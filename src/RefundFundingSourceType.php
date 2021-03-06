<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'RefundingSourceTypeCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
 * Type defining the <b>RefundFundingSource</b> container, which consists of 
 * detailed information about the funding source for a refund issued by the seller 
 * through the Order Adjusment API's issueRefund call. It is possible that more 
 * than one funding source may be used for this refund. This type is only 
 * applicable for German and Austrian orders subject to the new eBay payment 
 * process. <br/><br/> Currently, this type is not applicable since the new eBay 
 * payment process on the German and Austrian sites has been put on hold 
 * indefinitely. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RefundFundingSourceType.html
 *
 */
class RefundFundingSourceType extends EbatNs_ComplexType
{
	/**
	 * @var RefundingSourceTypeCodeType
	 */
	protected $RefundingSourceType;
	/**
	 * @var string
	 */
	protected $AccountNumber;
	/**
	 * @var AmountType
	 */
	protected $RefundAmount;
	/**
	 * @var string
	 */
	protected $SellerExternalTransactionID;
	/**
	 * @var string
	 */
	protected $BuyerExternalTransactionID;

	/**
	 * @return RefundingSourceTypeCodeType
	 */
	function getRefundingSourceType()
	{
		return $this->RefundingSourceType;
	}
	/**
	 * @return void
	 * @param RefundingSourceTypeCodeType $value 
	 */
	function setRefundingSourceType($value)
	{
		$this->RefundingSourceType = $value;
	}
	/**
	 * @return string
	 */
	function getAccountNumber()
	{
		return $this->AccountNumber;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setAccountNumber($value)
	{
		$this->AccountNumber = $value;
	}
	/**
	 * @return AmountType
	 */
	function getRefundAmount()
	{
		return $this->RefundAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setRefundAmount($value)
	{
		$this->RefundAmount = $value;
	}
	/**
	 * @return string
	 */
	function getSellerExternalTransactionID()
	{
		return $this->SellerExternalTransactionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSellerExternalTransactionID($value)
	{
		$this->SellerExternalTransactionID = $value;
	}
	/**
	 * @return string
	 */
	function getBuyerExternalTransactionID()
	{
		return $this->BuyerExternalTransactionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setBuyerExternalTransactionID($value)
	{
		$this->BuyerExternalTransactionID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RefundFundingSourceType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'RefundingSourceType' =>
					array(
						'required' => false,
						'type' => 'RefundingSourceTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AccountNumber' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RefundAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerExternalTransactionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BuyerExternalTransactionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
