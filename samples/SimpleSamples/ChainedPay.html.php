<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>PayPal Adaptive Payments - Pay</title>
<link rel="stylesheet" type="text/css" href="../Common/sdk.css" />
<script type="text/javascript" src="../Common/sdk_functions.js"></script>
<script type="text/javascript" src="../Common/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../Common/jquery.qtip-1.0.0-rc3.min.js"></script>
</head>
<?php	
	$serverName = $_SERVER['SERVER_NAME'];
	$serverPort = $_SERVER['SERVER_PORT'];
	$url = dirname('http://' . $serverName . ':' . $serverPort . $_SERVER['REQUEST_URI']);
	$returnUrl = $url . "/../WebflowReturnPage.php";
	$cancelUrl =  $url . "/ChainedPay.html.php";
?>

<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png">
		<div id="header">
			<h3>Chained Pay</h3>
			<div id="apidetails">The Pay API operation is used to transfer
				funds from a sender's PayPal account to one or more receivers'
				PayPal accounts. You can use the Pay API operation to make simple
				payments, chained payments, or parallel payments; these payments can
				be explicitly approved, preapproved, or implicitly approved.  A chained payment is a payment from a sender that is indirectly split among multiple receivers. It is an extension of a typical payment from a sender to a receiver, in which a receiver, known as the primary receiver, passes part of the payment to other receivers, who are called secondary receivers.</div>
		</div>
		<div id="request_form">
			<form action="ChainedPay.php" method="post">
				<div class="params">
					<div class="param_name">Action type *</div>
					<div class="param_value">
						<select name="actionType" id="actionType">
							<option value="PAY">PAY</option>
							<option value="CREATE">CREATE</option>
							<option value="PAY_PRIMARY">PAY_PRIMARY</option>
						</select>
					</div>
				</div>
				<div class="params">
					<div class="param_name">Return Url</div>
					<div class="param_value">
						<input name="returnUrl" id="returnUrl" value="<?php echo $returnUrl;?>" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Cancel Url *</div>
					<div class="param_value">
						<input name="cancelUrl" id="cancelUrl" value="<?php echo $cancelUrl;?>" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Currency code *</div>
					<div class="param_value">
						<input name="currencyCode" value="USD" />
					</div>
				</div>
		
				<div class="params">
					<div class="param_name">Memo</div>
					<div class="param_value">
						<input name="memo" value="" />
					</div>
				</div>

				<div class="section_header">Receiver info</div>
				<table class="params" id="receiverTable">
					<tr>
						<th></th>
						<th>Email *</th>
						<th>Amount *</th>
						<th>Primary Receiver</th>
						</tr>
					<tr id="receiverTable_0">
						<td align="left"><input type="checkbox" name="receiver[]" id="receiver_0"  /></td>
						<td>
							<input type="text" name="receiverEmail[]" id="receiveremail_0" value="platfo_1255612361_per@gmail.com">
						</td>
						<td>
							<input type="text" name="receiverAmount[]" id="amount_0" value="1.0" class="smallfield">
						</td>
										
						<td>
							<select name="primaryReceiver[]" id="primaryReceiver_0" class="smallfield">
								<option value="true"  selected="selected">true</option>
								<option value="false">false</option>
							</select>
						</td>				
					</tr>
					<tr id="receiverTable_1">
						<td align="left"><input type="checkbox" name="receiver[]" id="receiver_1"  /></td>
						<td>
							<input type="text" value="platfo_1255077030_biz@gmail.com" id="receiveremail_1" name="receiverEmail[]">
						</td>
						<td>
							<input type="text" class="smallfield" value="1.0" id="amount_1" name="receiverAmount[]">
						</td>
										
						<td>
							<select class="smallfield" id="primaryReceiver_1" name="primaryReceiver[]">
								<option value="true">true</option>
								<option selected="selected" value="false">false</option>
							</select>
						</td>				
					</tr>
				</table>
				<a rel="receiverControls"></a>
				<table align="center">
					<tr>
						<td><a href="#receiverControls" onclick="cloneRow('receiverTable', 8)" id="Submit"><span> Add
									Receiver  </span> </a></td>
						<td><a href="#receiverControls" onclick="deleteRow('receiverTable')" id="Submit"><span>  Delete
									Receiver</span> </a></td>
					</tr>
				</table>
				
							
				<div class="submit">
					<input type="submit" value="Submit" />
				</div>
			</form>
		</div>
		<a href="index.php">Home</a>
	</div>
</body>
</html>
