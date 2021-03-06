<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'MarkUpMarkDownEventType.php';

/**
 * List of objects representing markup or markdown events for a given 
 * applicationand time period. If no time period is specified in the request, the 
 * informationfor only one day (24 hours before the time the call is made to the 
 * time the callis made) is included. The maximum time period is allowed is 3 days 
 * (72 hoursbefore the call is made to the time the call is made). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MarkUpMarkDownHistoryType.html
 *
 */
class MarkUpMarkDownHistoryType extends EbatNs_ComplexType
{
	/**
	 * @var MarkUpMarkDownEventType
	 */
	protected $MarkUpMarkDownEvent;

	/**
	 * @return MarkUpMarkDownEventType
	 * @param integer $index 
	 */
	function getMarkUpMarkDownEvent($index = null)
	{
		if ($index !== null) {
			return $this->MarkUpMarkDownEvent[$index];
		} else {
			return $this->MarkUpMarkDownEvent;
		}
	}
	/**
	 * @return void
	 * @param MarkUpMarkDownEventType $value 
	 * @param  $index 
	 */
	function setMarkUpMarkDownEvent($value, $index = null)
	{
		if ($index !== null) {
			$this->MarkUpMarkDownEvent[$index] = $value;
		} else {
			$this->MarkUpMarkDownEvent = $value;
		}
	}
	/**
	 * @return void
	 * @param MarkUpMarkDownEventType $value 
	 */
	function addMarkUpMarkDownEvent($value)
	{
		$this->MarkUpMarkDownEvent[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MarkUpMarkDownHistoryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'MarkUpMarkDownEvent' =>
					array(
						'required' => false,
						'type' => 'MarkUpMarkDownEventType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
