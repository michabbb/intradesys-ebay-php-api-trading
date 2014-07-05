<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Type defining all listing upgrades that may be available to the seller when 
 * listing anitem. The listing upgrades that are available vary by site and by the 
 * seller'saccount status. To discover which listing upgrades are available,call 
 * GeteBayDetails, pass in the appropriate SiteID value and set the DetailName 
 * inputfilter to 'ListingFeatureDetails', and then look for the 
 * ListingFeatureDetails containerin the response. Listing upgrades will either be 
 * listed as 'Enabled' or 'Disabled'. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingEnhancementsCodeType.html
 *
 * @property string Border
 * @property string BoldTitle
 * @property string Featured
 * @property string Highlight
 * @property string HomePageFeatured
 * @property string ProPackBundle
 * @property string BasicUpgradePackBundle
 * @property string ValuePackBundle
 * @property string ProPackPlusBundle
 * @property string CustomCode
 */
class ListingEnhancementsCodeType extends EbatNs_FacetType
{
	const CodeType_Border = 'Border';
	const CodeType_BoldTitle = 'BoldTitle';
	const CodeType_Featured = 'Featured';
	const CodeType_Highlight = 'Highlight';
	const CodeType_HomePageFeatured = 'HomePageFeatured';
	const CodeType_ProPackBundle = 'ProPackBundle';
	const CodeType_BasicUpgradePackBundle = 'BasicUpgradePackBundle';
	const CodeType_ValuePackBundle = 'ValuePackBundle';
	const CodeType_ProPackPlusBundle = 'ProPackPlusBundle';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingEnhancementsCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ListingEnhancementsCodeType = new ListingEnhancementsCodeType();

?>