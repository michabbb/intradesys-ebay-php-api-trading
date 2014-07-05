<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * (in) Indicates the type of string matching to usewhen a value is submitted in 
 * CharityName. If no value isspecified, default behavior is "StartsWith." Does 
 * notapply to Query. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StringMatchCodeType.html
 *
 * @property string CustomCode
 * @property string StartsWith
 * @property string Contains
 */
class StringMatchCodeType extends EbatNs_FacetType
{
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_StartsWith = 'StartsWith';
	const CodeType_Contains = 'Contains';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StringMatchCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StringMatchCodeType = new StringMatchCodeType();

?>