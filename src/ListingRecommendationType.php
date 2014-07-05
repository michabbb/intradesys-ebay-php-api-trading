<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Type defining the <b>Recommendation</b> container(s) that areconditionally 
 * returned in all Add/Revise/Relist/Verify API calls. Each <b>Recommendation</b> 
 * container provides a message to the seller onhow a listing can be improved or 
 * brought up to standard in regards to recommendedItem Specifics, Picture quality 
 * requirements, Top-Rated seller/listing requirements,and/or a recommendation to 
 * use a product code (such as a UPC or ISBN value) to create a higher-quality 
 * listing.<br><br>One or more <b>Recommendation</b> containers can be returned for 
 * each listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingRecommendationType.html
 *
 */
class ListingRecommendationType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Type;
	/**
	 * @var string
	 */
	protected $Group;
	/**
	 * @var string
	 */
	protected $FieldName;
	/**
	 * @var string
	 */
	protected $Code;
	/**
	 * @var string
	 */
	protected $Value;
	/**
	 * @var string
	 */
	protected $Message;

	/**
	 * @return string
	 */
	function getType()
	{
		return $this->Type;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setType($value)
	{
		$this->Type = $value;
	}
	/**
	 * @return string
	 */
	function getGroup()
	{
		return $this->Group;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setGroup($value)
	{
		$this->Group = $value;
	}
	/**
	 * @return string
	 */
	function getFieldName()
	{
		return $this->FieldName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFieldName($value)
	{
		$this->FieldName = $value;
	}
	/**
	 * @return string
	 */
	function getCode()
	{
		return $this->Code;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCode($value)
	{
		$this->Code = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getValue($index = null)
	{
		if ($index !== null) {
			return $this->Value[$index];
		} else {
			return $this->Value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setValue($value, $index = null)
	{
		if ($index !== null) {
			$this->Value[$index] = $value;
		} else {
			$this->Value = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addValue($value)
	{
		$this->Value[] = $value;
	}
	/**
	 * @return string
	 */
	function getMessage()
	{
		return $this->Message;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMessage($value)
	{
		$this->Message = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingRecommendationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Type' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Group' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FieldName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Code' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Value' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'Message' =>
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
