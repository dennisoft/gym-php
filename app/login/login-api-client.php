<?php
/**
 * Created by PhpStorm.
 * User: DNJUNGE
 * Date: 1/6/2019
 * Time: 5:38 PM
 */

require_once ('login-api.php');
if (isset($_POST['current_submit']) && isset($_POST['current_email']) && isset($_POST['current_password'])) {
    $email = $_POST['current_email'];
    $password = $_POST['current_password'];
    $response = login($email,$password);
            if ($response['responseCode'] == '0') {
                session_start();
                $_SESSION['id'] = $response['userID'];
                header("Location: ../../index");
            } else if ($response['responseCode'] == '2'){
                header("Location: ../../login?error=password");
            } else if ($response['responseCode'] == '3'){
                header("Location: ../../login?error=user");
            } else {
                header("Location: ../../login?error=error");
            }
}

