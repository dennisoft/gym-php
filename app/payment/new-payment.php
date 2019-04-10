<?php
/**
 * Created by PhpStorm.
 * User: DNJUNGE
 * Date: 1/8/2019
 * Time: 5:59 PM
 */

function makePayments($userID, $amount)
{
    require_once('call-api.php');
    $data = array('accountNumber' => $userID, 'amount' => $amount);
    $response = callAPI('POST', 'http://localhost:8080/payment/new', json_encode($data));

    // Check what we received
    $decoded = json_decode($response, true);

    return ($decoded);
}
