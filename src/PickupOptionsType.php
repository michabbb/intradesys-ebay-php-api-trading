<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Type defining the <strong>PickupOptions</strong> container, which consists of an 
 * In-Store pickup method and the priority of the pickup method. <br/><br/><span 
 * class="tablenote"><strong>Note:</strong> At this time, the In-Store Pickup 
 * feature is generally only available to large retail merchants, and can only be 
 * applied to multi-quantity, fixed-price listings. Sellers who are eligible for 
 * the In-Store Pickup feature can start listing items in Production with the 
 * In-Store Pickup option beginning later in Q3 2013. </span> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PickupOptionsType.html
 *
 */
class PickupOptionsType extends EbatNs_ComplexType
{
	/**
	 * @var token
	 */
	protected $PickupMethod;
	/**
	 * @var int
	 */
	protected $PickupPriority;

	/**
	 * @return token
	 */
	function getPickupMethod()
	{
		return $this->PickupMethod;
	}
	/**
	 * @return void
	 * @param token $value 
	 */
	function setPickupMethod($value)
	{
		$this->PickupMethod = $value;
	}
	/**
	 * @return int
	 */
	function getPickupPriority()
	{
		return $this->PickupPriority;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPickupPriority($value)
	{
		$this->PickupPriority = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PickupOptionsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PickupMethod' =>
					array(
						'required' => false,
						'type' => 'token',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PickupPriority' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
