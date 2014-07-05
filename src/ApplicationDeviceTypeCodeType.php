<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Device used. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ApplicationDeviceTypeCodeType.html
 *
 * @property string Browser
 * @property string Wireless
 * @property string Desktop
 * @property string SetTopTVBox
 * @property string CustomCode
 */
class ApplicationDeviceTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Browser = 'Browser';
	const CodeType_Wireless = 'Wireless';
	const CodeType_Desktop = 'Desktop';
	const CodeType_SetTopTVBox = 'SetTopTVBox';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ApplicationDeviceTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ApplicationDeviceTypeCodeType = new ApplicationDeviceTypeCodeType();

?>
