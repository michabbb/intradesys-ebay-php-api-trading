<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Enumerated type that defines the possible reasons why an auction listing is 
 * being hidden from search on the eBay site. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReasonHideFromSearchCodeType.html
 *
 * @property string DuplicateListing
 * @property string OutOfStock
 */
class ReasonHideFromSearchCodeType extends EbatNs_FacetType
{
	const CodeType_DuplicateListing = 'DuplicateListing';
	const CodeType_OutOfStock = 'OutOfStock';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReasonHideFromSearchCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ReasonHideFromSearchCodeType = new ReasonHideFromSearchCodeType();

?>
