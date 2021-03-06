<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * If present, the site defines category settings for when the seller can provide a 
 * Vehicle Identification Number (VIN) for US, CA, and CAFR eBay Motors sites. VIN 
 * is required for cars and trucks from model year 1981 and later. (The US 
 * developed national standards for VIN values as of 1981.) 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VINSupportedDefinitionType.html
 *
 */
class VINSupportedDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VINSupportedDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))])) {
			self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))], array());
		}
	}
}
?>
