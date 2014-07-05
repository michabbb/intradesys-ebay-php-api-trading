<?php

namespace intradesys\api\ebay\trading;
// autogenerated file 22.07.2011 09:27
// $Id: $
// $Log: $
//
//
require_once 'AdFormatLeadType.php';
require_once 'AbstractResponseType.php';

/**
 * Returns number of leads and contact and other information for each lead. 
 * OneAdFormatLead node is returned for each lead. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetAdFormatLeadsResponseType.html
 *
 */
class GetAdFormatLeadsResponseType extends AbstractResponseType
{
	/**
	 * @var AdFormatLeadType
	 */
	protected $AdFormatLead;
	/**
	 * @var int
	 */
	protected $AdFormatLeadCount;

	/**
	 * @return AdFormatLeadType
	 * @param integer $index 
	 */
	function getAdFormatLead($index = null)
	{
		if ($index !== null) {
			return $this->AdFormatLead[$index];
		} else {
			return $this->AdFormatLead;
		}
	}
	/**
	 * @return void
	 * @param AdFormatLeadType $value 
	 * @param  $index 
	 */
	function setAdFormatLead($value, $index = null)
	{
		if ($index !== null) {
			$this->AdFormatLead[$index] = $value;
		} else {
			$this->AdFormatLead = $value;
		}
	}
	/**
	 * @return void
	 * @param AdFormatLeadType $value 
	 */
	function addAdFormatLead($value)
	{
		$this->AdFormatLead[] = $value;
	}
	/**
	 * @return int
	 */
	function getAdFormatLeadCount()
	{
		return $this->AdFormatLeadCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setAdFormatLeadCount($value)
	{
		$this->AdFormatLeadCount = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetAdFormatLeadsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))]))
				self::$_elements[join('', array_slice(explode('\\', __CLASS__), -1))] = array_merge(self::$_elements[join('', array_slice(explode('\\', get_parent_class()), -1))],
				array(
					'AdFormatLead' =>
					array(
						'required' => false,
						'type' => 'AdFormatLeadType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'AdFormatLeadCount' =>
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
