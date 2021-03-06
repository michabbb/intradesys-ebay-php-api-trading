<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Enables a seller to respond to a Want It Now post with an item listed on the 
 * eBaysite. Responses appear on the Want It Now post page, with the item title, 
 * theprice of the item, the number of bids on the item, and the time left before 
 * thelisting ends. If the item has a picture, the picture is also included on the 
 * WantIt Now post page. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RespondToWantItNowPostRequestType.html
 *
 */
class RespondToWantItNowPostRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var ItemIDType
	 */
	protected $PostID;

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
	 * @return ItemIDType
	 */
	function getPostID()
	{
		return $this->PostID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setPostID($value)
	{
		$this->PostID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RespondToWantItNowPostRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
					'PostID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
