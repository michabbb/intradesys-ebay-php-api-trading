<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the escrow workflow version applicable for the given category on the 
 * India site, if the categorysupports PaisaPayFullEscrow. If this field is 
 * present, the corresponding feature applies to the category. The fieldis returned 
 * as an empty element. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/INEscrowWorkflowTimelineDefinitionType.html
 *
 */
class INEscrowWorkflowTimelineDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('INEscrowWorkflowTimelineDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))])) {
			self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))], array());
		}
	}
}
?>
