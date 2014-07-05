<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Type that defines the Imposition field. The Imposition field allows the seller 
 * toprovide a description of the sales tax type. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/TaxTypeCodeType.html
 *
 * @property string SalesTax
 * @property string WasteRecyclingFee
 * @property string CustomCode
 */
class TaxTypeCodeType extends EbatNs_FacetType
{
	const CodeType_SalesTax = 'SalesTax';
	const CodeType_WasteRecyclingFee = 'WasteRecyclingFee';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('TaxTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_TaxTypeCodeType = new TaxTypeCodeType();

?>
