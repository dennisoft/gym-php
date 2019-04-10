<?php
/**
 * Created by PhpStorm.
 * User: DNJUNGE
 * Date: 1/6/2019
 * Time: 5:38 PM
 */

session_start();
unset($_SESSION['id']);
session_destroy();
header('Location: ../../login');
