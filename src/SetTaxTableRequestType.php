<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'TaxTableType.php';
require_once 'AbstractRequestType.php';

/**
 * Sets the tax table for a seller on a given site. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetTaxTableRequestType.html
 *
 */
class SetTaxTableRequestType extends AbstractRequestType
{
	/**
	 * @var TaxTableType
	 */
	protected $TaxTable;

	/**
	 * @return TaxTableType
	 */
	function getTaxTable()
	{
		return $this->TaxTable;
	}
	/**
	 * @return void
	 * @param TaxTableType $value 
	 */
	function setTaxTable($value)
	{
		$this->TaxTable = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetTaxTableRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'TaxTable' =>
					array(
						'required' => false,
						'type' => 'TaxTableType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
