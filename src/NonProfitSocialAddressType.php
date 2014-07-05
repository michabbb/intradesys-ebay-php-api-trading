<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'SocialAddressTypeCodeType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Type defining the <b>NonProfitSocialAddress</b> container, which identifies 
 * thenonprofit organization's social networking site account ID. A 
 * <b>NonProfitSocialAddress</b>container will exist for each social networking 
 * site that the charity organization isasssociated with. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/NonProfitSocialAddressType.html
 *
 */
class NonProfitSocialAddressType extends EbatNs_ComplexType
{
	/**
	 * @var SocialAddressTypeCodeType
	 */
	protected $SocialAddressType;
	/**
	 * @var string
	 */
	protected $SocialAddressId;

	/**
	 * @return SocialAddressTypeCodeType
	 */
	function getSocialAddressType()
	{
		return $this->SocialAddressType;
	}
	/**
	 * @return void
	 * @param SocialAddressTypeCodeType $value 
	 */
	function setSocialAddressType($value)
	{
		$this->SocialAddressType = $value;
	}
	/**
	 * @return string
	 */
	function getSocialAddressId()
	{
		return $this->SocialAddressId;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSocialAddressId($value)
	{
		$this->SocialAddressId = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('NonProfitSocialAddressType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'SocialAddressType' =>
					array(
						'required' => false,
						'type' => 'SocialAddressTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SocialAddressId' =>
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
