<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'AmountType.php';

/**
 * Indicates the refund amount that a seller issued to a buyer for a single 
 * Half.com order line item.Refunds may only be issued for a specific order line 
 * item. Sellers do not have the ability to issue a general refund (not tied to an 
 * order line item) to a buyer. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/IssueRefundResponseType.html
 *
 */
class IssueRefundResponseType extends AbstractResponseType
{
	/**
	 * @var AmountType
	 */
	protected $RefundFromSeller;
	/**
	 * @var AmountType
	 */
	protected $TotalRefundToBuyer;

	/**
	 * @return AmountType
	 */
	function getRefundFromSeller()
	{
		return $this->RefundFromSeller;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setRefundFromSeller($value)
	{
		$this->RefundFromSeller = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTotalRefundToBuyer()
	{
		return $this->TotalRefundToBuyer;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTotalRefundToBuyer($value)
	{
		$this->TotalRefundToBuyer = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('IssueRefundResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'RefundFromSeller' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalRefundToBuyer' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
