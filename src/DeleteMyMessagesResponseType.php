<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * The response to DeleteMyMessagesRequestType. If the request was successful, 
 * DeleteMyMessages returns nothing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DeleteMyMessagesResponseType.html
 *
 */
class DeleteMyMessagesResponseType extends AbstractResponseType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DeleteMyMessagesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))])) {
			self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))], array());
		}
	}
}
?>
