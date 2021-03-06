<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'FeesType.php';
require_once 'SellingManagerAutoListType.php';
require_once 'AbstractResponseType.php';
require_once 'SellingManagerAutoSecondChanceOfferType.php';
require_once 'SellingManagerAutoRelistType.php';

/**
 * Contains the set of automation rules associated with the specified template. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DeleteSellingManagerTemplateAutomationRuleResponseType.html
 *
 */
class DeleteSellingManagerTemplateAutomationRuleResponseType extends AbstractResponseType
{
	/**
	 * @var SellingManagerAutoListType
	 */
	protected $AutomatedListingRule;
	/**
	 * @var SellingManagerAutoRelistType
	 */
	protected $AutomatedRelistingRule;
	/**
	 * @var SellingManagerAutoSecondChanceOfferType
	 */
	protected $AutomatedSecondChanceOfferRule;
	/**
	 * @var FeesType
	 */
	protected $Fees;

	/**
	 * @return SellingManagerAutoListType
	 */
	function getAutomatedListingRule()
	{
		return $this->AutomatedListingRule;
	}
	/**
	 * @return void
	 * @param SellingManagerAutoListType $value 
	 */
	function setAutomatedListingRule($value)
	{
		$this->AutomatedListingRule = $value;
	}
	/**
	 * @return SellingManagerAutoRelistType
	 */
	function getAutomatedRelistingRule()
	{
		return $this->AutomatedRelistingRule;
	}
	/**
	 * @return void
	 * @param SellingManagerAutoRelistType $value 
	 */
	function setAutomatedRelistingRule($value)
	{
		$this->AutomatedRelistingRule = $value;
	}
	/**
	 * @return SellingManagerAutoSecondChanceOfferType
	 */
	function getAutomatedSecondChanceOfferRule()
	{
		return $this->AutomatedSecondChanceOfferRule;
	}
	/**
	 * @return void
	 * @param SellingManagerAutoSecondChanceOfferType $value 
	 */
	function setAutomatedSecondChanceOfferRule($value)
	{
		$this->AutomatedSecondChanceOfferRule = $value;
	}
	/**
	 * @return FeesType
	 */
	function getFees()
	{
		return $this->Fees;
	}
	/**
	 * @return void
	 * @param FeesType $value 
	 */
	function setFees($value)
	{
		$this->Fees = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DeleteSellingManagerTemplateAutomationRuleResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'AutomatedListingRule' =>
					array(
						'required' => false,
						'type' => 'SellingManagerAutoListType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AutomatedRelistingRule' =>
					array(
						'required' => false,
						'type' => 'SellingManagerAutoRelistType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AutomatedSecondChanceOfferRule' =>
					array(
						'required' => false,
						'type' => 'SellingManagerAutoSecondChanceOfferType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Fees' =>
					array(
						'required' => false,
						'type' => 'FeesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
