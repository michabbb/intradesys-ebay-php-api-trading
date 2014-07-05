<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'VeROReasonCodeDetailsType.php';
require_once 'AbstractResponseType.php';

/**
 * Contains the reason codes for all sites. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetVeROReasonCodeDetailsResponseType.html
 *
 */
class GetVeROReasonCodeDetailsResponseType extends AbstractResponseType
{
	/**
	 * @var VeROReasonCodeDetailsType
	 */
	protected $VeROReasonCodeDetails;

	/**
	 * @return VeROReasonCodeDetailsType
	 */
	function getVeROReasonCodeDetails()
	{
		return $this->VeROReasonCodeDetails;
	}
	/**
	 * @return void
	 * @param VeROReasonCodeDetailsType $value 
	 */
	function setVeROReasonCodeDetails($value)
	{
		$this->VeROReasonCodeDetails = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetVeROReasonCodeDetailsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'VeROReasonCodeDetails' =>
					array(
						'required' => false,
						'type' => 'VeROReasonCodeDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
