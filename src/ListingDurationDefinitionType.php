<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * A container node for a set of durations that apply to a certain listing type. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingDurationDefinitionType.html
 *
 */
class ListingDurationDefinitionType extends EbatNs_ComplexType
{
	/**
	 * @var token
	 */
	protected $Duration;

	/**
	 * @return token
	 * @param integer $index 
	 */
	function getDuration($index = null)
	{
		if ($index !== null) {
			return $this->Duration[$index];
		} else {
			return $this->Duration;
		}
	}
	/**
	 * @return void
	 * @param token $value 
	 * @param  $index 
	 */
	function setDuration($value, $index = null)
	{
		if ($index !== null) {
			$this->Duration[$index] = $value;
		} else {
			$this->Duration = $value;
		}
	}
	/**
	 * @return void
	 * @param token $value 
	 */
	function addDuration($value)
	{
		$this->Duration[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingDurationDefinitionType', 'http://www.w3.org/2001/XMLSchema');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'Duration' =>
					array(
						'required' => false,
						'type' => 'token',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));	$this->_attributes = array_merge($this->_attributes,
		array(
			'durationSetID' =>
			array(
				'name' => 'durationSetID',
				'type' => 'int',
				'use' => 'required'
			)
		));

	}
}
?>
