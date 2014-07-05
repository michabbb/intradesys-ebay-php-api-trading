<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves Theme and Layout specifications for the display of an item's 
 * description. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetDescriptionTemplatesRequestType.html
 *
 */
class GetDescriptionTemplatesRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var dateTime
	 */
	protected $LastModifiedTime;
	/**
	 * @var boolean
	 */
	protected $MotorVehicles;

	/**
	 * @return string
	 */
	function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}
	/**
	 * @return dateTime
	 */
	function getLastModifiedTime()
	{
		return $this->LastModifiedTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setLastModifiedTime($value)
	{
		$this->LastModifiedTime = $value;
	}
	/**
	 * @return boolean
	 */
	function getMotorVehicles()
	{
		return $this->MotorVehicles;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setMotorVehicles($value)
	{
		$this->MotorVehicles = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetDescriptionTemplatesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LastModifiedTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MotorVehicles' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
