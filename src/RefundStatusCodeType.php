<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Enumerated type that list the values that indicate the status of the refund 
 * request. This type is only applicable for German and Austrian orders subject to 
 * the new eBay payment process. <br/><br/> Currently, this type is not applicable 
 * since the new eBay payment process on the German and Austrian sites has been put 
 * on hold indefinitely. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RefundStatusCodeType.html
 *
 * @property string Successful
 * @property string Pending
 * @property string Failed
 * @property string CustomCode
 */
class RefundStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Successful = 'Successful';
	const CodeType_Pending = 'Pending';
	const CodeType_Failed = 'Failed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RefundStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_RefundStatusCodeType = new RefundStatusCodeType();

?>
