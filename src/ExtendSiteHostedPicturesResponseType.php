<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Returns the URL of an eBay Picture Services image whose expiration date 
 * wasextended. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ExtendSiteHostedPicturesResponseType.html
 *
 */
class ExtendSiteHostedPicturesResponseType extends AbstractResponseType
{
	/**
	 * @var anyURI
	 */
	protected $PictureURL;

	/**
	 * @return anyURI
	 * @param integer $index 
	 */
	function getPictureURL($index = null)
	{
		if ($index !== null) {
			return $this->PictureURL[$index];
		} else {
			return $this->PictureURL;
		}
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 * @param  $index 
	 */
	function setPictureURL($value, $index = null)
	{
		if ($index !== null) {
			$this->PictureURL[$index] = $value;
		} else {
			$this->PictureURL = $value;
		}
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function addPictureURL($value)
	{
		$this->PictureURL[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ExtendSiteHostedPicturesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'PictureURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
