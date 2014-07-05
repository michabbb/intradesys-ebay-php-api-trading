<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * This type specifies the sort order of a returned array of elements. The array or 
 * list to be sorted, the sort key, and the default sort order depend on the call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SortOrderCodeType.html
 *
 * @property string Ascending
 * @property string Descending
 * @property string CustomCode
 */
class SortOrderCodeType extends EbatNs_FacetType
{
	const CodeType_Ascending = 'Ascending';
	const CodeType_Descending = 'Descending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SortOrderCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SortOrderCodeType = new SortOrderCodeType();

?>
