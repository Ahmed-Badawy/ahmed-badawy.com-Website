<?php 

        require("init.php");


use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Exception\PayPalConnectionException;


$payer = new Payer();
    $details = new Details();
    $amount = new Amount();
    $transaction = new Transaction();
    $payment = new Payment();
    $redirectUrls = new RedirectUrls();

    $payer->setPaymentMethod('paypal');
    $details->setShipping('1.00')->setTax('0.00')->setSubtotal('3.00');
    $amount->setCurrency('USD')->setTotal('4.00')->setDetails($details);
    $transaction->setAmount($amount)->setDescription("this is the description of the payment");
    $payment->setIntent('sale')->setPayer($payer)->setTransactions([$transaction]);
    $redirectUrls->setReturnUrl($rediren_link.'?approved=true')
                ->setCancelUrl($rediren_link.'?approved=false');
    $payment->setRedirectUrls($redirectUrls);


try{
    $payment->create($api);
    $hash = md5($payment->getId()); //used to identify
//    $_SESSION['paypal_hash'] = $hash;
}catch (PayPalConnectionException $e){
	// err($e->getMessage());
	// die;
    header('Location: error.php');
};


foreach($payment->getLinks() as $link){
    if($link->getRel()=='approval_url'){
        $redirect_url = $link->getHref();
    }
//    else die("sorry! redirect wasn't approved.");
}



//    echo "<pre>";
//var_export($payment->getLinks());
//    echo "<hr>";
//var_export($redirect_url);
//    echo "</pre>";
//die;



header('location: '.$redirect_url);
