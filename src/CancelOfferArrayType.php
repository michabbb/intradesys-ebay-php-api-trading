<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'CancelOfferType.php';

/**
 * Container for a list of offers. May contain zero, one, or multipleOfferType 
 * objects, each of which represents one offer extended bya user on a listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CancelOfferArrayType.html
 *
 */
class CancelOfferArrayType extends EbatNs_ComplexType
{
	/**
	 * @var CancelOfferType
	 */
	protected $CancelOffer;

	/**
	 * @return CancelOfferType
	 * @param integer $index 
	 */
	function getCancelOffer($index = null)
	{
		if ($index !== null) {
			return $this->CancelOffer[$index];
		} else {
			return $this->CancelOffer;
		}
	}
	/**
	 * @return void
	 * @param CancelOfferType $value 
	 * @param  $index 
	 */
	function setCancelOffer($value, $index = null)
	{
		if ($index !== null) {
			$this->CancelOffer[$index] = $value;
		} else {
			$this->CancelOffer = $value;
		}
	}
	/**
	 * @return void
	 * @param CancelOfferType $value 
	 */
	function addCancelOffer($value)
	{
		$this->CancelOffer[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CancelOfferArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'CancelOffer' =>
					array(
						'required' => false,
						'type' => 'CancelOfferType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
