<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AverageRatingDetailsType.php';

/**
 * Container for average detailed seller ratings. If a seller has detailed 
 * ratings,they are displayed in the Feedback Profile of the seller. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AverageRatingDetailArrayType.html
 *
 */
class AverageRatingDetailArrayType extends EbatNs_ComplexType
{
	/**
	 * @var AverageRatingDetailsType
	 */
	protected $AverageRatingDetails;

	/**
	 * @return AverageRatingDetailsType
	 * @param integer $index 
	 */
	function getAverageRatingDetails($index = null)
	{
		if ($index !== null) {
			return $this->AverageRatingDetails[$index];
		} else {
			return $this->AverageRatingDetails;
		}
	}
	/**
	 * @return void
	 * @param AverageRatingDetailsType $value 
	 * @param  $index 
	 */
	function setAverageRatingDetails($value, $index = null)
	{
		if ($index !== null) {
			$this->AverageRatingDetails[$index] = $value;
		} else {
			$this->AverageRatingDetails = $value;
		}
	}
	/**
	 * @return void
	 * @param AverageRatingDetailsType $value 
	 */
	function addAverageRatingDetails($value)
	{
		$this->AverageRatingDetails[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AverageRatingDetailArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'AverageRatingDetails' =>
					array(
						'required' => false,
						'type' => 'AverageRatingDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
