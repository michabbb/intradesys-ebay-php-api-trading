<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'PickupOptionsType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * This type defines the <strong>PickupDetails</strong> container, which contains 
 * an array of <strong>PickupOptions</strong> containers. Each 
 * <strong>PickupOptions</strong> container consists of the pickup method and its 
 * priority. <br/><br/><span class="tablenote"><strong>Note:</strong> At this time, 
 * the In-Store Pickup feature is generally only available to large retail 
 * merchants, and can only be applied to multi-quantity, fixed-price listings. 
 * Sellers who are eligible for the In-Store Pickup feature can start listing items 
 * in Production with the In-Store Pickup option beginning in late September 2013. 
 * </span> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PickupDetailsType.html
 *
 */
class PickupDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var PickupOptionsType
	 */
	protected $PickupOptions;

	/**
	 * @return PickupOptionsType
	 * @param integer $index 
	 */
	function getPickupOptions($index = null)
	{
		if ($index !== null) {
			return $this->PickupOptions[$index];
		} else {
			return $this->PickupOptions;
		}
	}
	/**
	 * @return void
	 * @param PickupOptionsType $value 
	 * @param  $index 
	 */
	function setPickupOptions($value, $index = null)
	{
		if ($index !== null) {
			$this->PickupOptions[$index] = $value;
		} else {
			$this->PickupOptions = $value;
		}
	}
	/**
	 * @return void
	 * @param PickupOptionsType $value 
	 */
	function addPickupOptions($value)
	{
		$this->PickupOptions[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PickupDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PickupOptions' =>
					array(
						'required' => false,
						'type' => 'PickupOptionsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
