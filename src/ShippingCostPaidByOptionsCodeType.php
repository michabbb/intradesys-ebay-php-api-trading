<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * This simple type contains the values that specify the party (seller/buyer) who 
 * will be responsible for paying the return shipping cost if an item is returned. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShippingCostPaidByOptionsCodeType.html
 *
 * @property string Buyer
 * @property string Seller
 * @property string CustomCode
 * @property string EUSeller_ReturnRights
 * @property string EUSeller_CancelRights
 * @property string EUBuyer_CancelRightsUnder40
 */
class ShippingCostPaidByOptionsCodeType extends EbatNs_FacetType
{
	const CodeType_Buyer = 'Buyer';
	const CodeType_Seller = 'Seller';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_EUSeller_ReturnRights = 'EUSeller_ReturnRights';
	const CodeType_EUSeller_CancelRights = 'EUSeller_CancelRights';
	const CodeType_EUBuyer_CancelRightsUnder40 = 'EUBuyer_CancelRightsUnder40';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShippingCostPaidByOptionsCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ShippingCostPaidByOptionsCodeType = new ShippingCostPaidByOptionsCodeType();

?>
