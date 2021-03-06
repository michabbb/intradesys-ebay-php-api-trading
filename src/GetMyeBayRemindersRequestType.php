<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'ReminderCustomizationType.php';
require_once 'AbstractRequestType.php';

/**
 * Requests totals for the Buying and Selling reminders from the user'sMy eBay 
 * account. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetMyeBayRemindersRequestType.html
 *
 */
class GetMyeBayRemindersRequestType extends AbstractRequestType
{
	/**
	 * @var ReminderCustomizationType
	 */
	protected $BuyingReminders;
	/**
	 * @var ReminderCustomizationType
	 */
	protected $SellingReminders;

	/**
	 * @return ReminderCustomizationType
	 */
	function getBuyingReminders()
	{
		return $this->BuyingReminders;
	}
	/**
	 * @return void
	 * @param ReminderCustomizationType $value 
	 */
	function setBuyingReminders($value)
	{
		$this->BuyingReminders = $value;
	}
	/**
	 * @return ReminderCustomizationType
	 */
	function getSellingReminders()
	{
		return $this->SellingReminders;
	}
	/**
	 * @return void
	 * @param ReminderCustomizationType $value 
	 */
	function setSellingReminders($value)
	{
		$this->SellingReminders = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetMyeBayRemindersRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'BuyingReminders' =>
					array(
						'required' => false,
						'type' => 'ReminderCustomizationType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellingReminders' =>
					array(
						'required' => false,
						'type' => 'ReminderCustomizationType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
