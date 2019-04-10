<?php
/**
 * Created by PhpStorm.
 * User: DNJUNGE
 * Date: 1/8/2019
 * Time: 5:59 PM
 */

function register($firstName,$lastName,$email,$password)
{
    require_once('call-api.php');
    $data = array('email' => $email, 'password' => $password,'name' => $firstName, 'lastName' => $lastName);
    $response = callAPI('POST', 'http://localhost:8080/registration', json_encode($data));

    // Check what we received
    $decoded = json_decode($response, true);

    $_SESSION['user_id'] = $response['userID'];

    return ($decoded);
}