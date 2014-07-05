<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Returns the shipping discount profiles defined by the user, along with other 
 * combinedpayment-related details such as packaging and handling costs. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetShippingDiscountProfilesRequestType.html
 *
 */
class GetShippingDiscountProfilesRequestType extends AbstractRequestType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetShippingDiscountProfilesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))])) {
			self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))], array());
		}
	}
}
?>
