<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'PromotionalSaleArrayType.php';
require_once 'AbstractResponseType.php';

/**
 * Contains information about promotional sales. This callis part of the 
 * Promotional Price Display feature. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetPromotionalSaleDetailsResponseType.html
 *
 */
class GetPromotionalSaleDetailsResponseType extends AbstractResponseType
{
	/**
	 * @var PromotionalSaleArrayType
	 */
	protected $PromotionalSaleDetails;

	/**
	 * @return PromotionalSaleArrayType
	 */
	function getPromotionalSaleDetails()
	{
		return $this->PromotionalSaleDetails;
	}
	/**
	 * @return void
	 * @param PromotionalSaleArrayType $value 
	 */
	function setPromotionalSaleDetails($value)
	{
		$this->PromotionalSaleDetails = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetPromotionalSaleDetailsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'PromotionalSaleDetails' =>
					array(
						'required' => false,
						'type' => 'PromotionalSaleArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
