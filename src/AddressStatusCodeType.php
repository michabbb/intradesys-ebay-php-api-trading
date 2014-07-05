<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * PayPal address status. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddressStatusCodeType.html
 *
 * @property string None
 * @property string Confirmed
 * @property string Unconfirmed
 * @property string CustomCode
 */
class AddressStatusCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_Confirmed = 'Confirmed';
	const CodeType_Unconfirmed = 'Unconfirmed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddressStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AddressStatusCodeType = new AddressStatusCodeType();

?>
