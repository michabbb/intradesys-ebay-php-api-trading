<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Container consisting for the list of locations to where the seller will not ship 
 * items. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerExcludeShipToLocationPreferencesType.html
 *
 */
class SellerExcludeShipToLocationPreferencesType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $ExcludeShipToLocation;

	/**
	 * @return string
	 * @param integer $index 
	 */
	function getExcludeShipToLocation($index = null)
	{
		if ($index !== null) {
			return $this->ExcludeShipToLocation[$index];
		} else {
			return $this->ExcludeShipToLocation;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setExcludeShipToLocation($value, $index = null)
	{
		if ($index !== null) {
			$this->ExcludeShipToLocation[$index] = $value;
		} else {
			$this->ExcludeShipToLocation = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addExcludeShipToLocation($value)
	{
		$this->ExcludeShipToLocation[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerExcludeShipToLocationPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'ExcludeShipToLocation' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
