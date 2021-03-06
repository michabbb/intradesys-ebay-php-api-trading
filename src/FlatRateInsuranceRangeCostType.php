<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'FlatRateInsuranceRangeCodeType.php';

/**
 * A pairing of range and insurance cost. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FlatRateInsuranceRangeCostType.html
 *
 */
class FlatRateInsuranceRangeCostType extends EbatNs_ComplexType
{
	/**
	 * @var FlatRateInsuranceRangeCodeType
	 */
	protected $FlatRateInsuranceRange;
	/**
	 * @var AmountType
	 */
	protected $InsuranceCost;

	/**
	 * @return FlatRateInsuranceRangeCodeType
	 */
	function getFlatRateInsuranceRange()
	{
		return $this->FlatRateInsuranceRange;
	}
	/**
	 * @return void
	 * @param FlatRateInsuranceRangeCodeType $value 
	 */
	function setFlatRateInsuranceRange($value)
	{
		$this->FlatRateInsuranceRange = $value;
	}
	/**
	 * @return AmountType
	 */
	function getInsuranceCost()
	{
		return $this->InsuranceCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setInsuranceCost($value)
	{
		$this->InsuranceCost = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FlatRateInsuranceRangeCostType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'FlatRateInsuranceRange' =>
					array(
						'required' => false,
						'type' => 'FlatRateInsuranceRangeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InsuranceCost' =>
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
