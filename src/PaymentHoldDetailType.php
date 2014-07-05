<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'RequiredSellerActionArrayType.php';
require_once 'PaymentHoldReasonCodeType.php';

/**
 * This type defines the <b>PaymentHoldDetails</b> container, whichconsists of 
 * information related to the payment hold on the order, including thereason why 
 * the buyer's payment for the order is being held, the expected release date of 
 * the funds into the seller's account, and possible action(s) theseller can take 
 * to expedite the payout of funds into their account. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaymentHoldDetailType.html
 *
 */
class PaymentHoldDetailType extends EbatNs_ComplexType
{
	/**
	 * @var dateTime
	 */
	protected $ExpectedReleaseDate;
	/**
	 * @var RequiredSellerActionArrayType
	 */
	protected $RequiredSellerActionArray;
	/**
	 * @var int
	 */
	protected $NumOfReqSellerActions;
	/**
	 * @var PaymentHoldReasonCodeType
	 */
	protected $PaymentHoldReason;

	/**
	 * @return dateTime
	 */
	function getExpectedReleaseDate()
	{
		return $this->ExpectedReleaseDate;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setExpectedReleaseDate($value)
	{
		$this->ExpectedReleaseDate = $value;
	}
	/**
	 * @return RequiredSellerActionArrayType
	 */
	function getRequiredSellerActionArray()
	{
		return $this->RequiredSellerActionArray;
	}
	/**
	 * @return void
	 * @param RequiredSellerActionArrayType $value 
	 */
	function setRequiredSellerActionArray($value)
	{
		$this->RequiredSellerActionArray = $value;
	}
	/**
	 * @return int
	 */
	function getNumOfReqSellerActions()
	{
		return $this->NumOfReqSellerActions;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setNumOfReqSellerActions($value)
	{
		$this->NumOfReqSellerActions = $value;
	}
	/**
	 * @return PaymentHoldReasonCodeType
	 */
	function getPaymentHoldReason()
	{
		return $this->PaymentHoldReason;
	}
	/**
	 * @return void
	 * @param PaymentHoldReasonCodeType $value 
	 */
	function setPaymentHoldReason($value)
	{
		$this->PaymentHoldReason = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaymentHoldDetailType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'ExpectedReleaseDate' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RequiredSellerActionArray' =>
					array(
						'required' => false,
						'type' => 'RequiredSellerActionArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NumOfReqSellerActions' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaymentHoldReason' =>
					array(
						'required' => false,
						'type' => 'PaymentHoldReasonCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
