<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Type defining the <b>AdditionalCompatibilityEnabled</b> field that is returned 
 * under the <b>FeatureDefinitions</b> container of the <b>GetCategoryFeatures</b> 
 * response (as long as 'AdditionalCompatibilityEnabled' is included as a 
 * <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are 
 * passed into the call request). This field is returned as anempty element (a 
 * boolean value is not returned) if one or more eBay API-enabled sites support the 
 * Boats Parts Compatibility feature. <br/><br/>To verify if a specific eBay site 
 * supports Boats Parts Compatibility (for mostcategories), look for a 'true' value 
 * in the <b>SiteDefaults.AdditionalCompatibilityEnabled</b> field.<br/><br/>To 
 * verify if a specific category on a specific eBay site supports Boats 
 * PartsCompatibility, pass in a <b>CategoryID</b> value in the request, and then 
 * look for a 'true' value in the <b>AdditionalCompatibilityEnabled</b> field of 
 * the corresponding Category node (match up the <b>CategoryID</b> values if more 
 * than one Category IDs were passed in the request).<br><br><span 
 * class="tablenote"><strong>Note:</strong>The Boats Parts Compatibility feature is 
 * not yet available for any eBay categories on the US site. This feature becomes 
 * available for some boat-related categories on version 821 and for the rest of 
 * the boat-related categories on version 823.</span> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AdditionalCompatibilityEnabledDefinitionType.html
 *
 */
class AdditionalCompatibilityEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AdditionalCompatibilityEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
