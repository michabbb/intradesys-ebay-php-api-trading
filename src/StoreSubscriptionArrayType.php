<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'StoreSubscriptionType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Set of eBay Store subscription levels. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreSubscriptionArrayType.html
 *
 */
class StoreSubscriptionArrayType extends EbatNs_ComplexType
{
	/**
	 * @var StoreSubscriptionType
	 */
	protected $Subscription;

	/**
	 * @return StoreSubscriptionType
	 * @param integer $index 
	 */
	function getSubscription($index = null)
	{
		if ($index !== null) {
			return $this->Subscription[$index];
		} else {
			return $this->Subscription;
		}
	}
	/**
	 * @return void
	 * @param StoreSubscriptionType $value 
	 * @param  $index 
	 */
	function setSubscription($value, $index = null)
	{
		if ($index !== null) {
			$this->Subscription[$index] = $value;
		} else {
			$this->Subscription = $value;
		}
	}
	/**
	 * @return void
	 * @param StoreSubscriptionType $value 
	 */
	function addSubscription($value)
	{
		$this->Subscription[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreSubscriptionArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'Subscription' =>
					array(
						'required' => false,
						'type' => 'StoreSubscriptionType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
