<?php
include_once "../core/SessionClass.php";
include_once "../core/MessageClass.php";

   if (!isset($_GET['key']) && empty($_GET['key'])) {
    // print_r($_GET);exit;
        ClsMessage::set_messages('danger', "Error in key send try again");
    header("Location: ../index.php");
    exit;
    }
    $key = $_GET['key'];
    if ( ClsSession::remove($key))
     {
         ClsMessage::set_messages('success', " removed  successfully ");
        header("Location: ../index.php");
        exit;
    } 
    else {
         ClsMessage::set_messages('danger', "Failed to remove  ");
        header("Location: ../index.php");
        exit;
    }

