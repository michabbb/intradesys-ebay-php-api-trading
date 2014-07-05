<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Based on the context of the field, this type defines the user is sending or 
 * receiving a payment. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UserIdentityType.html
 *
 */
class UserIdentityType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UserIdentityType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}	$this->_attributes = array_merge($this->_attributes,
		array(
			'type' =>
			array(
				'name' => 'type',
				'type' => 'UserIdentityCodeType',
				'use' => 'required'
			)
		));

	}
}
?>
