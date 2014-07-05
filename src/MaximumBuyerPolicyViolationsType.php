<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'PeriodCodeType.php';

/**
 * Type defining the <b>MaximumBuyerPolicyViolations</b> container, which isused by 
 * the seller as a mechanism to block prospective buyers who have buyer policy 
 * violations on their account exceeding the value set in the <b>Count</b> field 
 * during a specified time period (set in the <b>Period</b> field). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MaximumBuyerPolicyViolationsType.html
 *
 */
class MaximumBuyerPolicyViolationsType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $Count;
	/**
	 * @var PeriodCodeType
	 */
	protected $Period;

	/**
	 * @return int
	 */
	function getCount()
	{
		return $this->Count;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCount($value)
	{
		$this->Count = $value;
	}
	/**
	 * @return PeriodCodeType
	 */
	function getPeriod()
	{
		return $this->Period;
	}
	/**
	 * @return void
	 * @param PeriodCodeType $value 
	 */
	function setPeriod($value)
	{
		$this->Period = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MaximumBuyerPolicyViolationsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Count' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Period' =>
					array(
						'required' => false,
						'type' => 'PeriodCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
