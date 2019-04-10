<?php
/**
 * Created by PhpStorm.
 * User: DNJUNGE
 * Date: 1/6/2019
 * Time: 5:38 PM
 */

require_once ('register-api.php');
if (isset($_POST['register_submit']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['first_name']) && isset($_POST['last_name'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $response = register($firstName,$lastName,$email,$password);
            if ($response['responseCode'] == '0') {
                session_start();
                $_SESSION['id'] = $response['userID'];
                header("Location: ../../index");
            } else if ($response['responseCode'] == '1'){
                header("Location: ../../register?error=password");
            } else if ($response['responseCode'] == '3'){
                header("Location: ../../register?error=user");
            } else {
                header("Location: ../../register?error=error");
            }
}
