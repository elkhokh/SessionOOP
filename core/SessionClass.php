<?php


// session_start();

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!class_exists('ClsSession')) {

class ClsSession {

    
    static function set($key , $value){ // value = null and change code like code in testcode page 

        $_SESSION['data'][$key] = $value;

        return true;

    }
static public function get($key = null) { // or check if null in set and but default value 
    if ($key !== null) {
            return $_SESSION['data'][$key] ?? null;
        }
        return $_SESSION['data'] ?? [];
    
}

    public static function flash($key){
            if (isset($_SESSION['data'][$key])) {
        $value = $_SESSION['data'][$key];
        unset($_SESSION['data'][$key]); 
        return $value;
    }
    return null;
    }

    public static function remove_all(){
        session_unset();
        session_destroy();
        return true ;
    }

    public static function remove($key){
        //unset($_session[$key]);
  if (isset($_SESSION['data'][$key])) {
            unset($_SESSION['data'][$key]);
            return true;
        }
        return false;
    
    }
    public static function check($key){
        // return true of false
        return isset($_SESSION['data'][$key]);
        // isset($_SESSION['data'][$key]){
        //     return true ;
        // }return false;


    }

    public static function get_all(){
        return self::get();
    }

}
}


