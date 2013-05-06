<?php 
namespace PayPal\AdaptivePayments;
/**
 * Details about the payer's tax info passed in by the merchant
 * or partner. 
 */
class TaxIdDetails  
  extends PPMessage   {

	/**
	 * Tax id of the merchant/business. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $taxId;

	/**
	 * Tax type of the Tax Id. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $taxIdType;


}
