<?php 
namespace PayPal\AdaptivePayments;
/**
 * The result of the ConfirmPreapprovalRequest. 
 */
class ConfirmPreapprovalResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}
