<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'AmountType.php';
require_once 'RefundReasonCodeType.php';
require_once 'RefundTypeCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * <b>Half.com only.</b>&nbsp;Issues a refund for a specificHalf.com order line 
 * item. This can only be called by a seller. Sellers do nothave the ability to 
 * issue a general refund (a refund not tied to an order lineitem) to a buyer. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/IssueRefundRequestType.html
 *
 */
class IssueRefundRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $TransactionID;
	/**
	 * @var RefundReasonCodeType
	 */
	protected $RefundReason;
	/**
	 * @var RefundTypeCodeType
	 */
	protected $RefundType;
	/**
	 * @var AmountType
	 */
	protected $RefundAmount;
	/**
	 * @var string
	 */
	protected $RefundMessage;
	/**
	 * @var string
	 */
	protected $OrderLineItemID;

	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return string
	 */
	function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}
	/**
	 * @return RefundReasonCodeType
	 */
	function getRefundReason()
	{
		return $this->RefundReason;
	}
	/**
	 * @return void
	 * @param RefundReasonCodeType $value 
	 */
	function setRefundReason($value)
	{
		$this->RefundReason = $value;
	}
	/**
	 * @return RefundTypeCodeType
	 */
	function getRefundType()
	{
		return $this->RefundType;
	}
	/**
	 * @return void
	 * @param RefundTypeCodeType $value 
	 */
	function setRefundType($value)
	{
		$this->RefundType = $value;
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
	function getRefundMessage()
	{
		return $this->RefundMessage;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setRefundMessage($value)
	{
		$this->RefundMessage = $value;
	}
	/**
	 * @return string
	 */
	function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setOrderLineItemID($value)
	{
		$this->OrderLineItemID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('IssueRefundRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TransactionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RefundReason' =>
					array(
						'required' => false,
						'type' => 'RefundReasonCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RefundType' =>
					array(
						'required' => false,
						'type' => 'RefundTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
					'RefundMessage' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OrderLineItemID' =>
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
