<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'SellingManagerSoldOrderType.php';
require_once 'AbstractResponseType.php';

/**
 * Response to a GetSellingManagerSaleRecord call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellingManagerSaleRecordResponseType.html
 *
 */
class GetSellingManagerSaleRecordResponseType extends AbstractResponseType
{
	/**
	 * @var SellingManagerSoldOrderType
	 */
	protected $SellingManagerSoldOrder;

	/**
	 * @return SellingManagerSoldOrderType
	 */
	function getSellingManagerSoldOrder()
	{
		return $this->SellingManagerSoldOrder;
	}
	/**
	 * @return void
	 * @param SellingManagerSoldOrderType $value 
	 */
	function setSellingManagerSoldOrder($value)
	{
		$this->SellingManagerSoldOrder = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellingManagerSaleRecordResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'SellingManagerSoldOrder' =>
					array(
						'required' => false,
						'type' => 'SellingManagerSoldOrderType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
