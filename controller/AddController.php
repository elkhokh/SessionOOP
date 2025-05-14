<?php
// session_start();

include_once "../core/ValidationClass.php";
include_once "../core/SessionClass.php";
include_once "../core/MessageClass.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $key = $_POST['key'] ;
        $value = $_POST['value'];


    $error = ClsValidation::valid($key, $value);

    if (!empty($error)) 
    {
        ClsMessage::set_messages('danger', $error);
        header("Location: ../index.php");
    
        exit;
    }

    if(ClsSession::check($key)){
          ClsMessage::set_messages('warning', "key is already exist");
        header("Location: ../index.php");
    //   print_r(  header("Location: ../index.php")); 
        exit;
    }

    if (ClsSession::set($key, $value)) 
    {
        ClsMessage::set_messages('success', "Data Add TO Session Successfully");
        header("Location: ../index.php");
    //   print_r(  header("Location: ../index.php")); 
        exit;
    } else {
      ClsMessage::set_messages('danger', "Falid Add Data TO Session");
        header("Location: ../index.php"); 

        exit;
    }
}