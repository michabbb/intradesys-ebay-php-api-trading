<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'PromotionMethodCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'PromotionSchemeCodeType.php';
require_once 'PromotedItemType.php';
require_once 'ItemIDType.php';

/**
 * eBay Store Cross Promotions are no longer supported in the Trading API, so the 
 * <b>CrossPromotion</b> container will either not be returned, or, if it is 
 * returned, the data in the container may not be accurate. Contains one ormore 
 * items cross-promoted with the display or purchase of a referring item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CrossPromotionsType.html
 *
 */
class CrossPromotionsType extends EbatNs_ComplexType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var PromotionSchemeCodeType
	 */
	protected $PrimaryScheme;
	/**
	 * @var PromotionMethodCodeType
	 */
	protected $PromotionMethod;
	/**
	 * @var string
	 */
	protected $SellerID;
	/**
	 * @var boolean
	 */
	protected $ShippingDiscount;
	/**
	 * @var string
	 */
	protected $StoreName;
	/**
	 * @var PromotedItemType
	 */
	protected $PromotedItem;

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
	 * @return PromotionSchemeCodeType
	 */
	function getPrimaryScheme()
	{
		return $this->PrimaryScheme;
	}
	/**
	 * @return void
	 * @param PromotionSchemeCodeType $value 
	 */
	function setPrimaryScheme($value)
	{
		$this->PrimaryScheme = $value;
	}
	/**
	 * @return PromotionMethodCodeType
	 */
	function getPromotionMethod()
	{
		return $this->PromotionMethod;
	}
	/**
	 * @return void
	 * @param PromotionMethodCodeType $value 
	 */
	function setPromotionMethod($value)
	{
		$this->PromotionMethod = $value;
	}
	/**
	 * @return string
	 */
	function getSellerID()
	{
		return $this->SellerID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSellerID($value)
	{
		$this->SellerID = $value;
	}
	/**
	 * @return boolean
	 */
	function getShippingDiscount()
	{
		return $this->ShippingDiscount;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setShippingDiscount($value)
	{
		$this->ShippingDiscount = $value;
	}
	/**
	 * @return string
	 */
	function getStoreName()
	{
		return $this->StoreName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setStoreName($value)
	{
		$this->StoreName = $value;
	}
	/**
	 * @return PromotedItemType
	 * @param integer $index 
	 */
	function getPromotedItem($index = null)
	{
		if ($index !== null) {
			return $this->PromotedItem[$index];
		} else {
			return $this->PromotedItem;
		}
	}
	/**
	 * @return void
	 * @param PromotedItemType $value 
	 * @param  $index 
	 */
	function setPromotedItem($value, $index = null)
	{
		if ($index !== null) {
			$this->PromotedItem[$index] = $value;
		} else {
			$this->PromotedItem = $value;
		}
	}
	/**
	 * @return void
	 * @param PromotedItemType $value 
	 */
	function addPromotedItem($value)
	{
		$this->PromotedItem[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CrossPromotionsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PrimaryScheme' =>
					array(
						'required' => false,
						'type' => 'PromotionSchemeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PromotionMethod' =>
					array(
						'required' => false,
						'type' => 'PromotionMethodCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingDiscount' =>
					array(
						'required' => true,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					),
					'StoreName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PromotedItem' =>
					array(
						'required' => false,
						'type' => 'PromotedItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
