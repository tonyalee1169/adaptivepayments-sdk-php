<?php 
namespace PayPal\AdaptivePayments;
/**
 * 
 */
class ReceiverInfoList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ReceiverInfo 	 
	 */ 
	public $receiverInfo;

	/**
	 * Constructor with arguments
	 */
	public function __construct($receiverInfo = NULL) {
		$this->receiverInfo = $receiverInfo;
	}


}
