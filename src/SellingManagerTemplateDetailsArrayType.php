<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'SellingManagerTemplateDetailsType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * A list of Selling Manager templates. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerTemplateDetailsArrayType.html
 *
 */
class SellingManagerTemplateDetailsArrayType extends EbatNs_ComplexType
{
	/**
	 * @var SellingManagerTemplateDetailsType
	 */
	protected $SellingManagerTemplateDetails;

	/**
	 * @return SellingManagerTemplateDetailsType
	 * @param integer $index 
	 */
	function getSellingManagerTemplateDetails($index = null)
	{
		if ($index !== null) {
			return $this->SellingManagerTemplateDetails[$index];
		} else {
			return $this->SellingManagerTemplateDetails;
		}
	}
	/**
	 * @return void
	 * @param SellingManagerTemplateDetailsType $value 
	 * @param  $index 
	 */
	function setSellingManagerTemplateDetails($value, $index = null)
	{
		if ($index !== null) {
			$this->SellingManagerTemplateDetails[$index] = $value;
		} else {
			$this->SellingManagerTemplateDetails = $value;
		}
	}
	/**
	 * @return void
	 * @param SellingManagerTemplateDetailsType $value 
	 */
	function addSellingManagerTemplateDetails($value)
	{
		$this->SellingManagerTemplateDetails[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerTemplateDetailsArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'SellingManagerTemplateDetails' =>
					array(
						'required' => false,
						'type' => 'SellingManagerTemplateDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
