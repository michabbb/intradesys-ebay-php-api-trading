<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'SuggestedCategoryArrayType.php';

/**
 * Returns a list of categories with the highest numberof listings whose titles or 
 * descriptions contain the keywordsspecified in a GetSuggestedCategoriesRequest. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSuggestedCategoriesResponseType.html
 *
 */
class GetSuggestedCategoriesResponseType extends AbstractResponseType
{
	/**
	 * @var SuggestedCategoryArrayType
	 */
	protected $SuggestedCategoryArray;
	/**
	 * @var int
	 */
	protected $CategoryCount;

	/**
	 * @return SuggestedCategoryArrayType
	 */
	function getSuggestedCategoryArray()
	{
		return $this->SuggestedCategoryArray;
	}
	/**
	 * @return void
	 * @param SuggestedCategoryArrayType $value 
	 */
	function setSuggestedCategoryArray($value)
	{
		$this->SuggestedCategoryArray = $value;
	}
	/**
	 * @return int
	 */
	function getCategoryCount()
	{
		return $this->CategoryCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCategoryCount($value)
	{
		$this->CategoryCount = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSuggestedCategoriesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'SuggestedCategoryArray' =>
					array(
						'required' => false,
						'type' => 'SuggestedCategoryArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
