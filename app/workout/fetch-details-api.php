<?php
/**
 * Created by PhpStorm.
 * User: DNJUNGE
 * Date: 1/8/2019
 * Time: 5:59 PM
 */

function getPayments($userID)
{
    require_once('call-api.php');
    $data = array('userID' => $userID);
    $response = callAPI('POST', 'http://localhost:8080/workout/get', json_encode($data));

    // Check what we received
    $decoded = json_decode($response, true);

    return ($decoded);
}
