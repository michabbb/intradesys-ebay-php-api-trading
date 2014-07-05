<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * This type defines the <b>QuantityRestrictionPerBuyer</b> container, which isused 
 * by the seller to restrict the quantity of items that may be purchased by one 
 * buyerduring the duration of a fixed-price listing (single or multi-variation). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/QuantityRestrictionPerBuyerInfoType.html
 *
 */
class QuantityRestrictionPerBuyerInfoType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $MaximumQuantity;

	/**
	 * @return int
	 */
	function getMaximumQuantity()
	{
		return $this->MaximumQuantity;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaximumQuantity($value)
	{
		$this->MaximumQuantity = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('QuantityRestrictionPerBuyerInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'MaximumQuantity' =>
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
