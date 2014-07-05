<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the total number of fine grained item compatibilities that can be 
 * appliedto a listing (a maximum of 1000). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MaxGranularFitmentCountDefinitionType.html
 *
 */
class MaxGranularFitmentCountDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MaxGranularFitmentCountDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))])) {
			self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))], array());
		}
	}
}
?>
