<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'UnpaidItemCaseOpenTypeCodeType.php';
require_once 'UnpaidItemCaseStatusTypeCodeType.php';

/**
 * Type defining the <strong>UnpaidItem</strong> container, which consists 
 * ofdetails related to the type and status of an Unpaid Item case. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UnpaidItemType.html
 *
 */
class UnpaidItemType extends EbatNs_ComplexType
{
	/**
	 * @var UnpaidItemCaseStatusTypeCodeType
	 */
	protected $Status;
	/**
	 * @var UnpaidItemCaseOpenTypeCodeType
	 */
	protected $Type;

	/**
	 * @return UnpaidItemCaseStatusTypeCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param UnpaidItemCaseStatusTypeCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return UnpaidItemCaseOpenTypeCodeType
	 */
	function getType()
	{
		return $this->Type;
	}
	/**
	 * @return void
	 * @param UnpaidItemCaseOpenTypeCodeType $value 
	 */
	function setType($value)
	{
		$this->Type = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UnpaidItemType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'Status' =>
					array(
						'required' => false,
						'type' => 'UnpaidItemCaseStatusTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Type' =>
					array(
						'required' => false,
						'type' => 'UnpaidItemCaseOpenTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
