<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Returns information about the user's My eBay watch list. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RemoveFromWatchListResponseType.html
 *
 */
class RemoveFromWatchListResponseType extends AbstractResponseType
{
	/**
	 * @var int
	 */
	protected $WatchListCount;
	/**
	 * @var int
	 */
	protected $WatchListMaximum;

	/**
	 * @return int
	 */
	function getWatchListCount()
	{
		return $this->WatchListCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setWatchListCount($value)
	{
		$this->WatchListCount = $value;
	}
	/**
	 * @return int
	 */
	function getWatchListMaximum()
	{
		return $this->WatchListMaximum;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setWatchListMaximum($value)
	{
		$this->WatchListMaximum = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RemoveFromWatchListResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'WatchListCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'WatchListMaximum' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
