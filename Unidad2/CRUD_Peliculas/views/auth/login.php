<?php

    require_once '../models/UserModel.php';

    if(isset($_SESSION['user_id'])){
        header('Location: ../../index.php');
        exit
    }

    $error = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
'
    