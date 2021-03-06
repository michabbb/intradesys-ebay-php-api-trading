<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeedbackRequirementsType.html
 *
 */
class FeedbackRequirementsType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeedbackRequirementsType', 'http://www.w3.org/2001/XMLSchema');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))])) {
			self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))], array());
		}	$this->_attributes = array_merge($this->_attributes,
		array(
			'minimum' =>
			array(
				'name' => 'minimum',
				'type' => 'string',
				'use' => 'required'
			)
		));

	}
}
?>
