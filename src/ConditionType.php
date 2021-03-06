<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Fields in this type provide IDs and values for item conditions (in 
 * GetCategoryFeatures). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ConditionType.html
 *
 */
class ConditionType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $ID;
	/**
	 * @var string
	 */
	protected $DisplayName;

	/**
	 * @return int
	 */
	function getID()
	{
		return $this->ID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setID($value)
	{
		$this->ID = $value;
	}
	/**
	 * @return string
	 */
	function getDisplayName()
	{
		return $this->DisplayName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDisplayName($value)
	{
		$this->DisplayName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ConditionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'ID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisplayName' =>
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
