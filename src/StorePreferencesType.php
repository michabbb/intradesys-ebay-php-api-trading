<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'StoreVacationPreferencesType.php';

/**
 * Store Preferences type. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StorePreferencesType.html
 *
 */
class StorePreferencesType extends EbatNs_ComplexType
{
	/**
	 * @var StoreVacationPreferencesType
	 */
	protected $VacationPreferences;

	/**
	 * @return StoreVacationPreferencesType
	 */
	function getVacationPreferences()
	{
		return $this->VacationPreferences;
	}
	/**
	 * @return void
	 * @param StoreVacationPreferencesType $value 
	 */
	function setVacationPreferences($value)
	{
		$this->VacationPreferences = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StorePreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'VacationPreferences' =>
					array(
						'required' => false,
						'type' => 'StoreVacationPreferencesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
