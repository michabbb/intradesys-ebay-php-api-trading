<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Indicates if the category supports shipping options for Classified Ad format 
 * listings.Added for EbayMotors Pro users. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/eBayMotorsProShippingMethodEnabledDefinitionType.html
 *
 */
class eBayMotorsProShippingMethodEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('eBayMotorsProShippingMethodEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>