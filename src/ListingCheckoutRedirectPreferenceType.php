<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * ProStores listing level preferences. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingCheckoutRedirectPreferenceType.html
 *
 */
class ListingCheckoutRedirectPreferenceType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $ProStoresStoreName;
	/**
	 * @var string
	 */
	protected $SellerThirdPartyUsername;

	/**
	 * @return string
	 */
	function getProStoresStoreName()
	{
		return $this->ProStoresStoreName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setProStoresStoreName($value)
	{
		$this->ProStoresStoreName = $value;
	}
	/**
	 * @return string
	 */
	function getSellerThirdPartyUsername()
	{
		return $this->SellerThirdPartyUsername;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSellerThirdPartyUsername($value)
	{
		$this->SellerThirdPartyUsername = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingCheckoutRedirectPreferenceType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'ProStoresStoreName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerThirdPartyUsername' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
