<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * This type is deprecated as Pictures Manager was retired. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PictureManagerDetailLevelCodeType.html
 *
 * @property string ReturnAll
 * @property string ReturnSubscription
 * @property string ReturnPicture
 * @property string CustomCode
 */
class PictureManagerDetailLevelCodeType extends EbatNs_FacetType
{
	const CodeType_ReturnAll = 'ReturnAll';
	const CodeType_ReturnSubscription = 'ReturnSubscription';
	const CodeType_ReturnPicture = 'ReturnPicture';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PictureManagerDetailLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PictureManagerDetailLevelCodeType = new PictureManagerDetailLevelCodeType();

?>
