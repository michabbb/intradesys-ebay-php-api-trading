<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'MyMessagesAlertIDArrayType.php';
require_once 'MyMessagesMessageIDArrayType.php';
require_once 'AbstractRequestType.php';

/**
 * Removes selected messages for a given user. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DeleteMyMessagesRequestType.html
 *
 */
class DeleteMyMessagesRequestType extends AbstractRequestType
{
	/**
	 * @var MyMessagesAlertIDArrayType
	 */
	protected $AlertIDs;
	/**
	 * @var MyMessagesMessageIDArrayType
	 */
	protected $MessageIDs;

	/**
	 * @return MyMessagesAlertIDArrayType
	 */
	function getAlertIDs()
	{
		return $this->AlertIDs;
	}
	/**
	 * @return void
	 * @param MyMessagesAlertIDArrayType $value 
	 */
	function setAlertIDs($value)
	{
		$this->AlertIDs = $value;
	}
	/**
	 * @return MyMessagesMessageIDArrayType
	 */
	function getMessageIDs()
	{
		return $this->MessageIDs;
	}
	/**
	 * @return void
	 * @param MyMessagesMessageIDArrayType $value 
	 */
	function setMessageIDs($value)
	{
		$this->MessageIDs = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DeleteMyMessagesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'AlertIDs' =>
					array(
						'required' => false,
						'type' => 'MyMessagesAlertIDArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MessageIDs' =>
					array(
						'required' => false,
						'type' => 'MyMessagesMessageIDArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
