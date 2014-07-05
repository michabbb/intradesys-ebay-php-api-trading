<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'NotificationEventTypeCodeType.php';
require_once 'NotificationEventStateCodeType.php';

/**
 * Information about a single notification. Notification information includesthe 
 * reference ID, notification type, current status, time delivered, error code,and 
 * error message for the notification. If notification details are included inthe 
 * response, all of the detail fields are returned. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/NotificationDetailsType.html
 *
 */
class NotificationDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var anyURI
	 */
	protected $DeliveryURL;
	/**
	 * @var string
	 */
	protected $ReferenceID;
	/**
	 * @var dateTime
	 */
	protected $ExpirationTime;
	/**
	 * @var NotificationEventTypeCodeType
	 */
	protected $Type;
	/**
	 * @var int
	 */
	protected $Retries;
	/**
	 * @var NotificationEventStateCodeType
	 */
	protected $DeliveryStatus;
	/**
	 * @var dateTime
	 */
	protected $NextRetryTime;
	/**
	 * @var dateTime
	 */
	protected $DeliveryTime;
	/**
	 * @var string
	 */
	protected $ErrorMessage;
	/**
	 * @var string
	 */
	protected $DeliveryURLName;

	/**
	 * @return anyURI
	 */
	function getDeliveryURL()
	{
		return $this->DeliveryURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setDeliveryURL($value)
	{
		$this->DeliveryURL = $value;
	}
	/**
	 * @return string
	 */
	function getReferenceID()
	{
		return $this->ReferenceID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setReferenceID($value)
	{
		$this->ReferenceID = $value;
	}
	/**
	 * @return dateTime
	 */
	function getExpirationTime()
	{
		return $this->ExpirationTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setExpirationTime($value)
	{
		$this->ExpirationTime = $value;
	}
	/**
	 * @return NotificationEventTypeCodeType
	 */
	function getType()
	{
		return $this->Type;
	}
	/**
	 * @return void
	 * @param NotificationEventTypeCodeType $value 
	 */
	function setType($value)
	{
		$this->Type = $value;
	}
	/**
	 * @return int
	 */
	function getRetries()
	{
		return $this->Retries;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setRetries($value)
	{
		$this->Retries = $value;
	}
	/**
	 * @return NotificationEventStateCodeType
	 */
	function getDeliveryStatus()
	{
		return $this->DeliveryStatus;
	}
	/**
	 * @return void
	 * @param NotificationEventStateCodeType $value 
	 */
	function setDeliveryStatus($value)
	{
		$this->DeliveryStatus = $value;
	}
	/**
	 * @return dateTime
	 */
	function getNextRetryTime()
	{
		return $this->NextRetryTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setNextRetryTime($value)
	{
		$this->NextRetryTime = $value;
	}
	/**
	 * @return dateTime
	 */
	function getDeliveryTime()
	{
		return $this->DeliveryTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setDeliveryTime($value)
	{
		$this->DeliveryTime = $value;
	}
	/**
	 * @return string
	 */
	function getErrorMessage()
	{
		return $this->ErrorMessage;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setErrorMessage($value)
	{
		$this->ErrorMessage = $value;
	}
	/**
	 * @return string
	 */
	function getDeliveryURLName()
	{
		return $this->DeliveryURLName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDeliveryURLName($value)
	{
		$this->DeliveryURLName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('NotificationDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'DeliveryURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReferenceID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExpirationTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Type' =>
					array(
						'required' => false,
						'type' => 'NotificationEventTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Retries' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DeliveryStatus' =>
					array(
						'required' => false,
						'type' => 'NotificationEventStateCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NextRetryTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DeliveryTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ErrorMessage' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DeliveryURLName' =>
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
