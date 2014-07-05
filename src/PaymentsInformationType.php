<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'RefundInformationType.php';
require_once 'PaymentInformationType.php';

/**
 * This type defines the <strong>MonetaryDetails</strong> container, which consists 
 * of detailed information about one or more exchanges of funds that occur between 
 * the buyer, seller, eBay, and eBay partners during the lifecycle of an order, as 
 * well as detailed information about a merchant's refund (or store credit) to a 
 * buyer who has returned an In-Store Pickup item. <br/><br/><span 
 * class="tablenote"><strong>Note:</strong> At this time, the In-Store Pickup 
 * feature is generally only available to large retail merchants, and can only be 
 * applied to multi-quantity, fixed-price listings. Sellers who are eligible for 
 * the In-Store Pickup feature can start listing items in Production with the 
 * In-Store Pickup option beginning later in Q3 2013. </span> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaymentsInformationType.html
 *
 */
class PaymentsInformationType extends EbatNs_ComplexType
{
	/**
	 * @var PaymentInformationType
	 */
	protected $Payments;
	/**
	 * @var RefundInformationType
	 */
	protected $Refunds;

	/**
	 * @return PaymentInformationType
	 */
	function getPayments()
	{
		return $this->Payments;
	}
	/**
	 * @return void
	 * @param PaymentInformationType $value 
	 */
	function setPayments($value)
	{
		$this->Payments = $value;
	}
	/**
	 * @return RefundInformationType
	 */
	function getRefunds()
	{
		return $this->Refunds;
	}
	/**
	 * @return void
	 * @param RefundInformationType $value 
	 */
	function setRefunds($value)
	{
		$this->Refunds = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaymentsInformationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'Payments' =>
					array(
						'required' => false,
						'type' => 'PaymentInformationType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Refunds' =>
					array(
						'required' => false,
						'type' => 'RefundInformationType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
