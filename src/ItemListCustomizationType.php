<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'ListingTypeCodeType.php';
require_once 'PaginationType.php';
require_once 'OrderStatusFilterCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'ItemSortTypeCodeType.php';

/**
 * Defines how a list of items should be returned. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemListCustomizationType.html
 *
 */
class ItemListCustomizationType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $Include;
	/**
	 * @var ListingTypeCodeType
	 */
	protected $ListingType;
	/**
	 * @var ItemSortTypeCodeType
	 */
	protected $Sort;
	/**
	 * @var int
	 */
	protected $DurationInDays;
	/**
	 * @var boolean
	 */
	protected $IncludeNotes;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;
	/**
	 * @var OrderStatusFilterCodeType
	 */
	protected $OrderStatusFilter;

	/**
	 * @return boolean
	 */
	function getInclude()
	{
		return $this->Include;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setInclude($value)
	{
		$this->Include = $value;
	}
	/**
	 * @return ListingTypeCodeType
	 */
	function getListingType()
	{
		return $this->ListingType;
	}
	/**
	 * @return void
	 * @param ListingTypeCodeType $value 
	 */
	function setListingType($value)
	{
		$this->ListingType = $value;
	}
	/**
	 * @return ItemSortTypeCodeType
	 */
	function getSort()
	{
		return $this->Sort;
	}
	/**
	 * @return void
	 * @param ItemSortTypeCodeType $value 
	 */
	function setSort($value)
	{
		$this->Sort = $value;
	}
	/**
	 * @return int
	 */
	function getDurationInDays()
	{
		return $this->DurationInDays;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setDurationInDays($value)
	{
		$this->DurationInDays = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeNotes()
	{
		return $this->IncludeNotes;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeNotes($value)
	{
		$this->IncludeNotes = $value;
	}
	/**
	 * @return PaginationType
	 */
	function getPagination()
	{
		return $this->Pagination;
	}
	/**
	 * @return void
	 * @param PaginationType $value 
	 */
	function setPagination($value)
	{
		$this->Pagination = $value;
	}
	/**
	 * @return OrderStatusFilterCodeType
	 */
	function getOrderStatusFilter()
	{
		return $this->OrderStatusFilter;
	}
	/**
	 * @return void
	 * @param OrderStatusFilterCodeType $value 
	 */
	function setOrderStatusFilter($value)
	{
		$this->OrderStatusFilter = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemListCustomizationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'Include' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ListingType' =>
					array(
						'required' => false,
						'type' => 'ListingTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Sort' =>
					array(
						'required' => false,
						'type' => 'ItemSortTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DurationInDays' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeNotes' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Pagination' =>
					array(
						'required' => false,
						'type' => 'PaginationType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OrderStatusFilter' =>
					array(
						'required' => false,
						'type' => 'OrderStatusFilterCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
