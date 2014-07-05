<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * This is automatic or manual depending on selection. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SelectionModeCodeType.html
 *
 * @property string Automatic
 * @property string Manual
 * @property string Prefilled
 * @property string SelectionOnly
 * @property string FreeText
 * @property string CustomCode
 */
class SelectionModeCodeType extends EbatNs_FacetType
{
	const CodeType_Automatic = 'Automatic';
	const CodeType_Manual = 'Manual';
	const CodeType_Prefilled = 'Prefilled';
	const CodeType_SelectionOnly = 'SelectionOnly';
	const CodeType_FreeText = 'FreeText';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SelectionModeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SelectionModeCodeType = new SelectionModeCodeType();

?>
