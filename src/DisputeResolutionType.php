<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'DisputeResolutionRecordTypeCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'DisputeResolutionReasonCodeType.php';

/**
 * Contains all information about a dispute resolution. A disputecan have a 
 * resolution even if the seller does not receive payment.The resolution can have 
 * various results, including a Final Value Fee credit tothe seller or a strike to 
 * the buyer. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DisputeResolutionType.html
 *
 */
class DisputeResolutionType extends EbatNs_ComplexType
{
	/**
	 * @var DisputeResolutionRecordTypeCodeType
	 */
	protected $DisputeResolutionRecordType;
	/**
	 * @var DisputeResolutionReasonCodeType
	 */
	protected $DisputeResolutionReason;
	/**
	 * @var dateTime
	 */
	protected $ResolutionTime;

	/**
	 * @return DisputeResolutionRecordTypeCodeType
	 */
	function getDisputeResolutionRecordType()
	{
		return $this->DisputeResolutionRecordType;
	}
	/**
	 * @return void
	 * @param DisputeResolutionRecordTypeCodeType $value 
	 */
	function setDisputeResolutionRecordType($value)
	{
		$this->DisputeResolutionRecordType = $value;
	}
	/**
	 * @return DisputeResolutionReasonCodeType
	 */
	function getDisputeResolutionReason()
	{
		return $this->DisputeResolutionReason;
	}
	/**
	 * @return void
	 * @param DisputeResolutionReasonCodeType $value 
	 */
	function setDisputeResolutionReason($value)
	{
		$this->DisputeResolutionReason = $value;
	}
	/**
	 * @return dateTime
	 */
	function getResolutionTime()
	{
		return $this->ResolutionTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setResolutionTime($value)
	{
		$this->ResolutionTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DisputeResolutionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DisputeResolutionRecordType' =>
					array(
						'required' => false,
						'type' => 'DisputeResolutionRecordTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisputeResolutionReason' =>
					array(
						'required' => false,
						'type' => 'DisputeResolutionReasonCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ResolutionTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>