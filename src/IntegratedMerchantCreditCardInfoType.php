<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SiteCodeType.php';

/**
 * Indicates the sites on which a seller is eligible to offer IMCC as a payment 
 * method. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/IntegratedMerchantCreditCardInfoType.html
 *
 */
class IntegratedMerchantCreditCardInfoType extends EbatNs_ComplexType
{
	/**
	 * @var SiteCodeType
	 */
	protected $SupportedSite;

	/**
	 * @return SiteCodeType
	 * @param integer $index 
	 */
	function getSupportedSite($index = null)
	{
		if ($index !== null) {
			return $this->SupportedSite[$index];
		} else {
			return $this->SupportedSite;
		}
	}
	/**
	 * @return void
	 * @param SiteCodeType $value 
	 * @param  $index 
	 */
	function setSupportedSite($value, $index = null)
	{
		if ($index !== null) {
			$this->SupportedSite[$index] = $value;
		} else {
			$this->SupportedSite = $value;
		}
	}
	/**
	 * @return void
	 * @param SiteCodeType $value 
	 */
	function addSupportedSite($value)
	{
		$this->SupportedSite[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('IntegratedMerchantCreditCardInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'SupportedSite' =>
					array(
						'required' => false,
						'type' => 'SiteCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
