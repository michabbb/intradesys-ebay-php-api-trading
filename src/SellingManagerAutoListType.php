<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SellingManagerAutoListAccordingToScheduleType.php';
require_once 'SellingManagerAutoListMinActiveItemsType.php';

/**
 * Provides information about an automated listing rule. Automated listing rules 
 * cannot be combined with automated relisting rules.A template can have one set of 
 * information per automated listing rule specified. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerAutoListType.html
 *
 */
class SellingManagerAutoListType extends EbatNs_ComplexType
{
	/**
	 * @var long
	 */
	protected $SourceSaleTemplateID;
	/**
	 * @var SellingManagerAutoListMinActiveItemsType
	 */
	protected $KeepMinActive;
	/**
	 * @var SellingManagerAutoListAccordingToScheduleType
	 */
	protected $ListAccordingToSchedule;

	/**
	 * @return long
	 */
	function getSourceSaleTemplateID()
	{
		return $this->SourceSaleTemplateID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setSourceSaleTemplateID($value)
	{
		$this->SourceSaleTemplateID = $value;
	}
	/**
	 * @return SellingManagerAutoListMinActiveItemsType
	 */
	function getKeepMinActive()
	{
		return $this->KeepMinActive;
	}
	/**
	 * @return void
	 * @param SellingManagerAutoListMinActiveItemsType $value 
	 */
	function setKeepMinActive($value)
	{
		$this->KeepMinActive = $value;
	}
	/**
	 * @return SellingManagerAutoListAccordingToScheduleType
	 */
	function getListAccordingToSchedule()
	{
		return $this->ListAccordingToSchedule;
	}
	/**
	 * @return void
	 * @param SellingManagerAutoListAccordingToScheduleType $value 
	 */
	function setListAccordingToSchedule($value)
	{
		$this->ListAccordingToSchedule = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerAutoListType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'SourceSaleTemplateID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'KeepMinActive' =>
					array(
						'required' => false,
						'type' => 'SellingManagerAutoListMinActiveItemsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ListAccordingToSchedule' =>
					array(
						'required' => false,
						'type' => 'SellingManagerAutoListAccordingToScheduleType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
