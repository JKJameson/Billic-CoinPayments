<?php
class CoinPayments {
	public $settings = array(
		'description' => 'Accept Bitcoin payments though CoinPayments.',
	);
	
	function payment_features() {
		return '<img src="data:image/png;base64,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
">';	
	}
	
	function payment_button($params) {
	    global $billic, $db;
		$coinpayments_merchant_id = get_config('coinpayments_merchant_id');
	    if ($coinpayments_merchant_id=='' || get_config('coinpayments_secret')=='') {
			return false;
	    }
		if ($billic->user['verified']==0 && get_config('coinpayments_require_verification')==1) {
            return 'verify';
		}
		$currency = get_config('billic_currency_code');
		$url = 'http' . (get_config('billic_ssl') == 1 ? 's' : '') . '://' . get_config('billic_domain') . '/';
		$html = <<<EOF
<form action="https://www.coinpayments.net/index.php" method="post">
	<input type="hidden" name="cmd" value="_pay">
	<input type="hidden" name="reset" value="1">
	<input type="hidden" name="merchant" value="$coinpayments_merchant_id">
	<input type="hidden" name="item_name" value="Invoice #{$params['invoice']['id']}">
	<input type="hidden" name="currency" value="$currency">
	<input type="hidden" name="amountf" value="{$params['charge']}">
	<input type="hidden" name="quantity" value="1">
	<input type="hidden" name="allow_quantity" value="0">
	<input type="hidden" name="want_shipping" value="0">
	<input type="hidden" name="success_url" value="{$url}User/Invoices/ID/{$params['invoice']['id']}/Status/Completed/">
	<input type="hidden" name="cancel_url" value="{$url}User/Invoices/ID/{$params['invoice']['id']}/Status/Cancelled/">
	<input type="hidden" name="ipn_url" value="{$url}Gateway/CoinPayments/">
	<input type="hidden" name="allow_extra" value="0">
	<input type="hidden" name="first_name" value="{$billic->user['firstname']}">
	<input type="hidden" name="last_name" value="{$billic->user['lastname']}">
	<input type="hidden" name="email" value="{$billic->user['email']}">
	<input type="submit" class="btn btn-default" name="submit" value="Pay by Cryptocurrency">
</form>
EOF;
		return $html;
	}
	
	function payment_callback() {
		global $billic, $db;
		
		$merchant_id = get_config('coinpayments_merchant_id');
		$secret = get_config('coinpayments_secret');

		if (!isset($_SERVER['HTTP_HMAC']) || empty($_SERVER['HTTP_HMAC'])) {
			return "No HMAC signature sent";
		}

		$merchant = isset($_POST['merchant']) ? $_POST['merchant']:'';
		if (empty($merchant)) {
			return "No Merchant ID passed";
		}

		if ($merchant != $merchant_id) {
			return "Invalid Merchant ID";
		}

		$request = file_get_contents('php://input');
		if ($request === FALSE || empty($request)) {
			return "Error reading POST data";
		}

		$hmac = hash_hmac("sha512", $request, $secret);
		if ($hmac != $_SERVER['HTTP_HMAC']) {
			return "HMAC signature does not match";
		}
		
		preg_match('~Invoice #([0-9]+)~', $_POST['item_name'], $invoiceid);
		$invoiceid = $invoiceid[1];
		if (!is_numeric($invoiceid)) {
			return 'Invoice ID is invalid';
		}
		
		if ($_POST['status']!=100) {
			return 'Status != 100';	
		}

		$billic->module('Invoices');
		return $billic->modules['Invoices']->addpayment(array(
			'gateway' => 'CoinPayments',
			'invoiceid' => $invoiceid,
			'amount' => $_POST['amount1'],
			'currency' => $_POST['currency1'],
			'transactionid' => $_POST['txn_id'],
		));
	}
	
	function settings($array) {
		global $billic, $db;
		if (empty($_POST['update'])) {
			echo '<form method="POST"><input type="hidden" name="billic_ajax_module" value="CoinPayments"><table class="table table-striped">';
			echo '<tr><th>Setting</th><th>Value</th></tr>';
			echo '<tr><td>Require Verification</td><td><input type="checkbox" name="coinpayments_require_verification" value="1"'.(get_config('coinpayments_require_verification')==1?' checked':'').'></td></tr>';
			echo '<tr><td>Merchant ID</td><td><input type="text" class="form-control" name="coinpayments_merchant_id" value="'.safe(get_config('coinpayments_merchant_id')).'"></td></tr>';		
			echo '<tr><td>CoinPayments Secret</td><td><input type="text" class="form-control" name="coinpayments_secret" value="'.safe(get_config('coinpayments_secret')).'"></td></tr>';			
			echo '<tr><td colspan="2" align="center"><input type="submit" class="btn btn-default" name="update" value="Update &raquo;"></td></tr>';
			echo '</table></form>';
		} else {
			if (empty($billic->errors)) {
				set_config('coinpayments_require_verification', $_POST['coinpayments_require_verification']);
				set_config('coinpayments_merchant_id', $_POST['coinpayments_merchant_id']);
				set_config('coinpayments_secret', $_POST['coinpayments_secret']);
				$billic->status = 'updated';
			}	
		}
	}
}
