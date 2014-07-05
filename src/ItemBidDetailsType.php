<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'UserIDType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'ItemIDType.php';

/**
 * Contains bidding details information of a user on an item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemBidDetailsType.html
 *
 */
class ItemBidDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var int
	 */
	protected $BidCount;
	/**
	 * @var UserIDType
	 */
	protected $SellerID;
	/**
	 * @var dateTime
	 */
	protected $LastBidTime;

	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return string
	 */
	function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}
	/**
	 * @return int
	 */
	function getBidCount()
	{
		return $this->BidCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setBidCount($value)
	{
		$this->BidCount = $value;
	}
	/**
	 * @return UserIDType
	 */
	function getSellerID()
	{
		return $this->SellerID;
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 */
	function setSellerID($value)
	{
		$this->SellerID = $value;
	}
	/**
	 * @return dateTime
	 */
	function getLastBidTime()
	{
		return $this->LastBidTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setLastBidTime($value)
	{
		$this->LastBidTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemBidDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BidCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerID' =>
					array(
						'required' => false,
						'type' => 'UserIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LastBidTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
