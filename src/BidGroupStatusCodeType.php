<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * This type is deprecated as the Bid Assistant feature is no longer available. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BidGroupStatusCodeType.html
 *
 * @property string Open
 * @property string Closed
 * @property string CustomCode
 */
class BidGroupStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Open = 'Open';
	const CodeType_Closed = 'Closed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BidGroupStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_BidGroupStatusCodeType = new BidGroupStatusCodeType();

?>