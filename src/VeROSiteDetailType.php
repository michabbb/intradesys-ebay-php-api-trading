<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ReasonCodeDetailType.php';
require_once 'SiteCodeType.php';

/**
 * Container for reason code details for a given site. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VeROSiteDetailType.html
 *
 */
class VeROSiteDetailType extends EbatNs_ComplexType
{
	/**
	 * @var SiteCodeType
	 */
	protected $Site;
	/**
	 * @var ReasonCodeDetailType
	 */
	protected $ReasonCodeDetail;

	/**
	 * @return SiteCodeType
	 */
	function getSite()
	{
		return $this->Site;
	}
	/**
	 * @return void
	 * @param SiteCodeType $value 
	 */
	function setSite($value)
	{
		$this->Site = $value;
	}
	/**
	 * @return ReasonCodeDetailType
	 * @param integer $index 
	 */
	function getReasonCodeDetail($index = null)
	{
		if ($index !== null) {
			return $this->ReasonCodeDetail[$index];
		} else {
			return $this->ReasonCodeDetail;
		}
	}
	/**
	 * @return void
	 * @param ReasonCodeDetailType $value 
	 * @param  $index 
	 */
	function setReasonCodeDetail($value, $index = null)
	{
		if ($index !== null) {
			$this->ReasonCodeDetail[$index] = $value;
		} else {
			$this->ReasonCodeDetail = $value;
		}
	}
	/**
	 * @return void
	 * @param ReasonCodeDetailType $value 
	 */
	function addReasonCodeDetail($value)
	{
		$this->ReasonCodeDetail[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VeROSiteDetailType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Site' =>
					array(
						'required' => false,
						'type' => 'SiteCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReasonCodeDetail' =>
					array(
						'required' => false,
						'type' => 'ReasonCodeDetailType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
