<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Contains a seller's preference for sending a "Payment Reminder Email" to buyers. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PurchaseReminderEmailPreferencesType.html
 *
 */
class PurchaseReminderEmailPreferencesType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $PurchaseReminderEmailPreferences;

	/**
	 * @return boolean
	 */
	function getPurchaseReminderEmailPreferences()
	{
		return $this->PurchaseReminderEmailPreferences;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setPurchaseReminderEmailPreferences($value)
	{
		$this->PurchaseReminderEmailPreferences = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PurchaseReminderEmailPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'PurchaseReminderEmailPreferences' =>
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
