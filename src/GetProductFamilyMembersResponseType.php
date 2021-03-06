<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'DataElementSetType.php';
require_once 'ProductSearchResultType.php';
require_once 'AbstractResponseType.php';

/**
 * This type is deprecated as the call is no longer available. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetProductFamilyMembersResponseType.html
 *
 */
class GetProductFamilyMembersResponseType extends AbstractResponseType
{
	/**
	 * @var DataElementSetType
	 */
	protected $DataElementSets;
	/**
	 * @var ProductSearchResultType
	 */
	protected $ProductSearchResult;

	/**
	 * @return DataElementSetType
	 * @param integer $index 
	 */
	function getDataElementSets($index = null)
	{
		if ($index !== null) {
			return $this->DataElementSets[$index];
		} else {
			return $this->DataElementSets;
		}
	}
	/**
	 * @return void
	 * @param DataElementSetType $value 
	 * @param  $index 
	 */
	function setDataElementSets($value, $index = null)
	{
		if ($index !== null) {
			$this->DataElementSets[$index] = $value;
		} else {
			$this->DataElementSets = $value;
		}
	}
	/**
	 * @return void
	 * @param DataElementSetType $value 
	 */
	function addDataElementSets($value)
	{
		$this->DataElementSets[] = $value;
	}
	/**
	 * @return ProductSearchResultType
	 * @param integer $index 
	 */
	function getProductSearchResult($index = null)
	{
		if ($index !== null) {
			return $this->ProductSearchResult[$index];
		} else {
			return $this->ProductSearchResult;
		}
	}
	/**
	 * @return void
	 * @param ProductSearchResultType $value 
	 * @param  $index 
	 */
	function setProductSearchResult($value, $index = null)
	{
		if ($index !== null) {
			$this->ProductSearchResult[$index] = $value;
		} else {
			$this->ProductSearchResult = $value;
		}
	}
	/**
	 * @return void
	 * @param ProductSearchResultType $value 
	 */
	function addProductSearchResult($value)
	{
		$this->ProductSearchResult[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetProductFamilyMembersResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'DataElementSets' =>
					array(
						'required' => false,
						'type' => 'DataElementSetType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ProductSearchResult' =>
					array(
						'required' => false,
						'type' => 'ProductSearchResultType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
