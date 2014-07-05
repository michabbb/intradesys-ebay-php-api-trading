<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the Payment Method feature. If the field ispresent, the corresponding 
 * feature applies to the category. The field is returnedas an empty element (i.e., 
 * a boolean value is not returned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaymentMethodDefinitionType.html
 *
 */
class PaymentMethodDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaymentMethodDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))])) {
			self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))], array());
		}
	}
}
?>
