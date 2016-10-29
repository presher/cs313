<?php

$lifetime = 60 * 60 * 24 * 7;    // 1 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require ('../models/database.php');
require ('../models/trees.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'logIn';
    }
} elseif ($action == 'logIn') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $users_id = filter_input(INPUT_POST, 'users_id', FILTER_VALIDATE_INT);
    $password = filter_input(INPUT_POST, 'password');
    $name = filter_input(INPUT_POST, 'name');
    $user = get_user_name($name, $email);
    $id = get_user_id($email);
    $uname = get_user_name($email);
    
    //get_user_name($email);
    if ($email_address == FALSE && $password == FALSE && $name == FALSE) {
        echo"<script type='text/javascript'>alert('Incorrect Login Info. Please Try Again');</script>";
    } else {
        var_dump($id);
         $users_id = filter_input(INPUT_POST, 'users_id', FILTER_VALIDATE_INT);
        include '../login/welcome.php';
    }
}else if ($action == 'signout'){
    echo"<script type='text/javascript'>alert('You have sucessfully signed out.');</script>";
    include 'signout.php';
}elseif ($action == 'upload_tree') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $id = get_user_id($email);
    $uname = get_user_name($email);
    include('trees.php');
}
