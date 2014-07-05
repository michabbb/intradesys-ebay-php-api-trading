<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'PaymentTransactionType.php';

/**
 * This type contains information about the way a buyer payment is allocated for a 
 * specified order. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaymentInformationType.html
 *
 */
class PaymentInformationType extends EbatNs_ComplexType
{
	/**
	 * @var PaymentTransactionType
	 */
	protected $Payment;

	/**
	 * @return PaymentTransactionType
	 * @param integer $index 
	 */
	function getPayment($index = null)
	{
		if ($index !== null) {
			return $this->Payment[$index];
		} else {
			return $this->Payment;
		}
	}
	/**
	 * @return void
	 * @param PaymentTransactionType $value 
	 * @param  $index 
	 */
	function setPayment($value, $index = null)
	{
		if ($index !== null) {
			$this->Payment[$index] = $value;
		} else {
			$this->Payment = $value;
		}
	}
	/**
	 * @return void
	 * @param PaymentTransactionType $value 
	 */
	function addPayment($value)
	{
		$this->Payment[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaymentInformationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'Payment' =>
					array(
						'required' => false,
						'type' => 'PaymentTransactionType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
