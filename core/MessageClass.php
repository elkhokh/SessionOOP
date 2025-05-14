<?php 
session_start();
class ClsMessage{

 public static function set_messages($type_of_alert,$message_of_error)
{
    $_SESSION['message']=[
        'type'=>$type_of_alert,
        'text'=>$message_of_error,
    ];
}

public static function show_message()
{
    if(isset($_SESSION['message'])){
        $type = $_SESSION['message']['type'];//success or danger
        $text = $_SESSION['message']['text'];// email or name etc 
        echo "<div class='alert alert-$type'>$text</div>";
        unset($_SESSION['message']);
    }   
}
}   
