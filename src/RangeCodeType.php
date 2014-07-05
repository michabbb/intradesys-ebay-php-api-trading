<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * This type is deprecated as <b>GetProduct*</b> calls were deprecated. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RangeCodeType.html
 *
 * @property string High
 * @property string Low
 * @property string CustomCode
 */
class RangeCodeType extends EbatNs_FacetType
{
	const CodeType_High = 'High';
	const CodeType_Low = 'Low';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RangeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_RangeCodeType = new RangeCodeType();

?>