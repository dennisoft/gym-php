<?php
/**
 * Created by PhpStorm.
 * User: DNJUNGE
 * Date: 1/8/2019
 * Time: 5:59 PM
 */

function getUser($userID)
{
    require_once('call-api.php');
    $data = array('userid' => $userID);
    $response = callAPI('POST', 'http://localhost:8080/getuser', json_encode($data));

    // Check what we received
    $decoded = json_decode($response, true);

    return ($decoded);
}
