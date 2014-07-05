<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'CategoryGroupType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Type defining the <b>SupportedSellerProfile</b> container, which containssummary 
 * information related to specific Business Policies payment, return policy, and 
 * shipping profiles. The profile type is found in the <b>ProfileType</b> field. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SupportedSellerProfileType.html
 *
 */
class SupportedSellerProfileType extends EbatNs_ComplexType
{
	/**
	 * @var long
	 */
	protected $ProfileID;
	/**
	 * @var string
	 */
	protected $ProfileType;
	/**
	 * @var string
	 */
	protected $ProfileName;
	/**
	 * @var string
	 */
	protected $ShortSummary;
	/**
	 * @var CategoryGroupType
	 */
	protected $CategoryGroup;

	/**
	 * @return long
	 */
	function getProfileID()
	{
		return $this->ProfileID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setProfileID($value)
	{
		$this->ProfileID = $value;
	}
	/**
	 * @return string
	 */
	function getProfileType()
	{
		return $this->ProfileType;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setProfileType($value)
	{
		$this->ProfileType = $value;
	}
	/**
	 * @return string
	 */
	function getProfileName()
	{
		return $this->ProfileName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setProfileName($value)
	{
		$this->ProfileName = $value;
	}
	/**
	 * @return string
	 */
	function getShortSummary()
	{
		return $this->ShortSummary;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setShortSummary($value)
	{
		$this->ShortSummary = $value;
	}
	/**
	 * @return CategoryGroupType
	 */
	function getCategoryGroup()
	{
		return $this->CategoryGroup;
	}
	/**
	 * @return void
	 * @param CategoryGroupType $value 
	 */
	function setCategoryGroup($value)
	{
		$this->CategoryGroup = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SupportedSellerProfileType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ProfileID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProfileType' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProfileName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShortSummary' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryGroup' =>
					array(
						'required' => false,
						'type' => 'CategoryGroupType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>