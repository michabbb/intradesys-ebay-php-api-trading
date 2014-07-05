<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * This type is reserved for future or internal use. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RecommendationType.html
 *
 */
class RecommendationType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $FieldGroup;
	/**
	 * @var string
	 */
	protected $FieldName;
	/**
	 * @var string
	 */
	protected $RecommendationCode;
	/**
	 * @var string
	 */
	protected $RecommendedValue;
	/**
	 * @var string
	 */
	protected $Message;

	/**
	 * @return string
	 */
	function getFieldGroup()
	{
		return $this->FieldGroup;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFieldGroup($value)
	{
		$this->FieldGroup = $value;
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
	function getRecommendationCode()
	{
		return $this->RecommendationCode;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setRecommendationCode($value)
	{
		$this->RecommendationCode = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getRecommendedValue($index = null)
	{
		if ($index !== null) {
			return $this->RecommendedValue[$index];
		} else {
			return $this->RecommendedValue;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setRecommendedValue($value, $index = null)
	{
		if ($index !== null) {
			$this->RecommendedValue[$index] = $value;
		} else {
			$this->RecommendedValue = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addRecommendedValue($value)
	{
		$this->RecommendedValue[] = $value;
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
		parent::__construct('RecommendationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'FieldGroup' =>
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
					'RecommendationCode' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RecommendedValue' =>
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
