<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * State of an account of an eBay user. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AccountStateCodeType.html
 *
 * @property string Active
 * @property string Pending
 * @property string Inactive
 * @property string CustomCode
 */
class AccountStateCodeType extends EbatNs_FacetType
{
	const CodeType_Active = 'Active';
	const CodeType_Pending = 'Pending';
	const CodeType_Inactive = 'Inactive';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AccountStateCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AccountStateCodeType = new AccountStateCodeType();

?>
