<?php

namespace intradesys\api\ebay\trading;
// $Id: EbatNs_NotificationClient.php,v 1.3 2013-04-17 10:38:43 thomasbiniasch Exp $
// $Log: EbatNs_NotificationClient.php,v $
// Revision 1.3  2013-04-17 10:38:43  thomasbiniasch
// added some methods needed for notification API (callbacks)
//
// Revision 1.2  2008-05-02 15:04:05  carsten
// Initial, PHP5
//
//
require_once 'EbatNs_ResponseParser.php';
require_once 'EbatNs_DataConverter.php';
require_once 'EbatNs_ResponseError.php';

class EbatNs_NotificationClient
{
	protected $_parser = null; 
	// callback-methods/functions for data-handling
	protected $_hasCallbacks = false;
	protected $_callbacks = null; 
	// EbatNs_DataConverter object
	protected $_dataConverter = null;

	protected $_logger = null;

	function __construct($converter = 'EbatNs_DataConverterIso')
	{
		if ($converter)
			$this->_dataConverter = new $converter();
		$this->_parser = null;
	}
	
	// should return true if the data should NOT be included to the
	// response-object !
	function _handleDataType( $typeName, &$value )
	{
		if ( $this->_hasCallbacks )
		{
			$callback = $this->_callbacks[strtolower( $typeName )];
			if ( $callback )
			{
				if ( is_object( $callback['object'] ) )
				{
					return call_user_method( $callback['method'], $callback['object'], $typeName, $value );
				} 
				else
				{
					return call_user_func( $callback['method'], $typeName, $value );
				} 
			} 
		} 
		return false;
	} 
	
	// $typeName as defined in Schema
	// $method (callback, either string or array with object/method)
	function setHandler( $typeName, $method )
	{
		$this->_hasCallbacks = true;
		if ( is_array( $method ) )
		{
			$callback['object'] = &$method[0];
			$callback['method'] = $method[1];
		} 
		else
		{
			$callback['object'] = null;
			$callback['method'] = $method;
		} 

		$this->_callbacks[strtolower( $typeName )] = $callback;
	} 

	function getResponse($msg)
	{
		$this->_parser = new EbatNs_ResponseParser( $this, 'urn:ebay:apis:eBLBaseComponents' );
		$this->_parser->setMode(EBATNS_PARSEMODE_NOTIFICATION);
		
		return $this->_parser->decode( $method . 'Response', $msg, true );
	}
	
	function hasCallbacks()
	{
		return $this->_hasCallbacks;
	}
	
	function hasDataConverter()
	{
		return $this->_dataConverter !== null ? true : false;
	}
	
	function getDataConverter()
	{
		return $this->_dataConverter;
	}
}

?>