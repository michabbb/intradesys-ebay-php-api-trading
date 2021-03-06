<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Type defining the <b>SellerReturnProfile</b> container, which is used in an 
 * Add/Revise/Relist Trading API call to reference a Business Policies return 
 * policy profile.Business Policies return policy profiles contain detailed 
 * information on the seller's return policy, including the refund option, how many 
 * days the buyer hasto return the item for a refund, warranty information, and 
 * restocking fee (if any).<br/><br/>Business Policies return policy profiles are 
 * also returned in <b>GetItem</b>, <b>GetMyeBaySelling</b>, and other Trading 
 * calls that retrieve Item data. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerReturnProfileType.html
 *
 */
class SellerReturnProfileType extends EbatNs_ComplexType
{
	/**
	 * @var long
	 */
	protected $ReturnProfileID;
	/**
	 * @var string
	 */
	protected $ReturnProfileName;

	/**
	 * @return long
	 */
	function getReturnProfileID()
	{
		return $this->ReturnProfileID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setReturnProfileID($value)
	{
		$this->ReturnProfileID = $value;
	}
	/**
	 * @return string
	 */
	function getReturnProfileName()
	{
		return $this->ReturnProfileName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setReturnProfileName($value)
	{
		$this->ReturnProfileName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerReturnProfileType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'ReturnProfileID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReturnProfileName' =>
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
