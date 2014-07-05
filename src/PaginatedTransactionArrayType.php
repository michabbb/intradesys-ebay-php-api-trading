<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'TransactionArrayType.php';
require_once 'PaginationResultType.php';

/**
 * Contains a paginated list of order line items. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PaginatedTransactionArrayType.html
 *
 */
class PaginatedTransactionArrayType extends EbatNs_ComplexType
{
	/**
	 * @var TransactionArrayType
	 */
	protected $TransactionArray;
	/**
	 * @var PaginationResultType
	 */
	protected $PaginationResult;

	/**
	 * @return TransactionArrayType
	 */
	function getTransactionArray()
	{
		return $this->TransactionArray;
	}
	/**
	 * @return void
	 * @param TransactionArrayType $value 
	 */
	function setTransactionArray($value)
	{
		$this->TransactionArray = $value;
	}
	/**
	 * @return PaginationResultType
	 */
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}
	/**
	 * @return void
	 * @param PaginationResultType $value 
	 */
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PaginatedTransactionArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'TransactionArray' =>
					array(
						'required' => false,
						'type' => 'TransactionArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaginationResult' =>
					array(
						'required' => false,
						'type' => 'PaginationResultType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>