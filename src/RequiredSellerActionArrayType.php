<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'RequiredSellerActionCodeType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * This type defines the RequiredSellerActionArray container, which may contain 
 * zero ormultiple RequiredSellerActionCodeType objects. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RequiredSellerActionArrayType.html
 *
 */
class RequiredSellerActionArrayType extends EbatNs_ComplexType
{
	/**
	 * @var RequiredSellerActionCodeType
	 */
	protected $RequiredSellerAction;

	/**
	 * @return RequiredSellerActionCodeType
	 * @param integer $index 
	 */
	function getRequiredSellerAction($index = null)
	{
		if ($index !== null) {
			return $this->RequiredSellerAction[$index];
		} else {
			return $this->RequiredSellerAction;
		}
	}
	/**
	 * @return void
	 * @param RequiredSellerActionCodeType $value 
	 * @param  $index 
	 */
	function setRequiredSellerAction($value, $index = null)
	{
		if ($index !== null) {
			$this->RequiredSellerAction[$index] = $value;
		} else {
			$this->RequiredSellerAction = $value;
		}
	}
	/**
	 * @return void
	 * @param RequiredSellerActionCodeType $value 
	 */
	function addRequiredSellerAction($value)
	{
		$this->RequiredSellerAction[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RequiredSellerActionArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'RequiredSellerAction' =>
					array(
						'required' => false,
						'type' => 'RequiredSellerActionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
