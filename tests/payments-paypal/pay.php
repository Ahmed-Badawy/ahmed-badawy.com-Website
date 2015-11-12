
<?php

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;


require("init.php");


if(isset($_GET['approved'])){
    $approved = $_GET['approved'];
    if($approved=="true"){
        $payer_id = $_GET['PayerID'];
        $payment_id = $_GET['paymentId'];

        // Get The Paypal Payment
        $payment = Payment::get($payment_id,$api);
        $excution = new PaymentExecution();
        $excution->setPayerId($payer_id);
        $payment->execute($excution, $api);

//        err($payment);

    }elseif($approved=="false"){
        echo "<h1>it's Wasn't Approved.. You canceled the payment...";
    }
}else{
    die("didn't event find approved in the \$_SESSION array");
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Payment Status</h1>
    <h3>Approved = <?php echo $approved; ?> </h3>

</body>
</html>