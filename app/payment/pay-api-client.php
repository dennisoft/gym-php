<?php
/**
 * Created by PhpStorm.
 * User: DNJUNGE
 * Date: 1/6/2019
 * Time: 5:38 PM
 */

require_once ('new-payment.php');
if (isset($_POST['current_submit']) && isset($_POST['amount'])) {
    $amount = $_POST['amount'];
    $account = $_SESSION['id'];
    $response = makePayments("6",$amount);

    echo "<script>console.log( " .$response['responseCode'] . " );</script>";

    if ($response['responseCode'] == '0') {
        header("Location: ../../payments");
    } else {
        header("Location: ../../payments");
    }
}

