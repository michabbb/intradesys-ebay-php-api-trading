<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SellereBayPaymentProcessStatusCodeType.php';
require_once 'SiteCodeType.php';

/**
 * Type defining the <b>UserAgreementInfo</b> container, which consists of details 
 * related to thecurrent status of a DE or AT seller signing the required 
 * supplemental user agreement for the new eBaypayment process. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UserAgreementInfoType.html
 *
 */
class UserAgreementInfoType extends EbatNs_ComplexType
{
	/**
	 * @var SiteCodeType
	 */
	protected $Site;
	/**
	 * @var SellereBayPaymentProcessStatusCodeType
	 */
	protected $SellereBayPaymentProcessStatus;
	/**
	 * @var dateTime
	 */
	protected $AcceptedTime;
	/**
	 * @var dateTime
	 */
	protected $SellereBayPaymentProcessEnableTime;
	/**
	 * @var anyURI
	 */
	protected $UserAgreementURL;

	/**
	 * @return SiteCodeType
	 */
	function getSite()
	{
		return $this->Site;
	}
	/**
	 * @return void
	 * @param SiteCodeType $value 
	 */
	function setSite($value)
	{
		$this->Site = $value;
	}
	/**
	 * @return SellereBayPaymentProcessStatusCodeType
	 */
	function getSellereBayPaymentProcessStatus()
	{
		return $this->SellereBayPaymentProcessStatus;
	}
	/**
	 * @return void
	 * @param SellereBayPaymentProcessStatusCodeType $value 
	 */
	function setSellereBayPaymentProcessStatus($value)
	{
		$this->SellereBayPaymentProcessStatus = $value;
	}
	/**
	 * @return dateTime
	 */
	function getAcceptedTime()
	{
		return $this->AcceptedTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setAcceptedTime($value)
	{
		$this->AcceptedTime = $value;
	}
	/**
	 * @return dateTime
	 */
	function getSellereBayPaymentProcessEnableTime()
	{
		return $this->SellereBayPaymentProcessEnableTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setSellereBayPaymentProcessEnableTime($value)
	{
		$this->SellereBayPaymentProcessEnableTime = $value;
	}
	/**
	 * @return anyURI
	 */
	function getUserAgreementURL()
	{
		return $this->UserAgreementURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setUserAgreementURL($value)
	{
		$this->UserAgreementURL = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UserAgreementInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Site' =>
					array(
						'required' => false,
						'type' => 'SiteCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellereBayPaymentProcessStatus' =>
					array(
						'required' => false,
						'type' => 'SellereBayPaymentProcessStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AcceptedTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellereBayPaymentProcessEnableTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UserAgreementURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>