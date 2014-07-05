<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 05.05.2008 16:30
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 *  
 *
 *
 */
class EbatNsCsSetExt_GlobalSettingsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $MonthAscendingLong;
	/**
	 * @var string
	 */
	protected $MonthDescendingLong;
	/**
	 * @var string
	 */
	protected $MonthAscendingShort;
	/**
	 * @var string
	 */
	protected $MonthDescendingShort;
	/**
	 * @var string
	 */
	protected $BaseHTMLPath;

	/**
	 * @return string
	 */
	function getMonthAscendingLong()
	{
		return $this->MonthAscendingLong;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMonthAscendingLong($value)
	{
		$this->MonthAscendingLong = $value;
	}
	/**
	 * @return string
	 */
	function getMonthDescendingLong()
	{
		return $this->MonthDescendingLong;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMonthDescendingLong($value)
	{
		$this->MonthDescendingLong = $value;
	}
	/**
	 * @return string
	 */
	function getMonthAscendingShort()
	{
		return $this->MonthAscendingShort;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMonthAscendingShort($value)
	{
		$this->MonthAscendingShort = $value;
	}
	/**
	 * @return string
	 */
	function getMonthDescendingShort()
	{
		return $this->MonthDescendingShort;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMonthDescendingShort($value)
	{
		$this->MonthDescendingShort = $value;
	}
	/**
	 * @return string
	 */
	function getBaseHTMLPath()
	{
		return $this->BaseHTMLPath;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setBaseHTMLPath($value)
	{
		$this->BaseHTMLPath = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EbatNsCsSetExt_GlobalSettingsType', 'http://www.intradesys.com/Schemas/ebay/AttributeData_Extension.xsd');
		$this->_elements = array_merge($this->_elements,
			array(
				'MonthAscendingLong' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'MonthDescendingLong' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'MonthAscendingShort' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'MonthDescendingShort' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				),
				'BaseHTMLPath' =>
				array(
					'required' => true,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				)
			));

	}
}
?>
