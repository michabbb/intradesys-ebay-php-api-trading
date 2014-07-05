<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * List of possible statuses for Store custom pages. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreCustomPageStatusCodeType.html
 *
 * @property string Active
 * @property string Delete
 * @property string Inactive
 * @property string CustomCode
 */
class StoreCustomPageStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Active = 'Active';
	const CodeType_Delete = 'Delete';
	const CodeType_Inactive = 'Inactive';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreCustomPageStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StoreCustomPageStatusCodeType = new StoreCustomPageStatusCodeType();

?>