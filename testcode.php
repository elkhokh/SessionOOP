<?php
session_start();
class ClsSession {

    
    static function set($key , $value=null){
        if(is_null($value)){
            $value = $key;
        }
        $_SESSION[$key] = $value;
        // $_SESSION['data'][$key] = $value;
        //------------------- 
        // $_SESSION['data'][$key] = $value;
    }
static public function get($key ) {
    // if ($key !== null) {
    //         return $_SESSION['data'][$key] ?? null;
    //     }
    //     return $_SESSION['data'] ?? [];
return $_SESSION[$key];
// return $_SESSION['data'][$key];
    
}
   public static function get_all(){
        return $_SESSION;
        // return $_SESSION['data'];
    }

    public static function remove($key){
    // if (isset($_SESSION['data'][$key])) {
    //         unset($_SESSION['data'][$key]);
    //         return true;
    //     }
    //     return false;

    unset($_SESSION[$key]);
    }


     public static function remove_all(){
        session_unset();
        session_destroy();
        return true ;
    }
    public static function flash($key){
    //         if (isset($_SESSION['data'][$key])) {
    //     $value = $_SESSION['data'][$key];
    //     unset($_SESSION['data'][$key]); 
    //     return $value;
    // }
    // return null;
              if (isset($_SESSION[$key])) {
               $flash = $_SESSION[$key];
               unset($_SESSION[$key]);
               return $flash;
          }

    }



    public static function check($key){
        // return true of false
        return isset($_SESSION[$key]);
        // return isset($_SESSION['data'][$key]);
        // isset($_SESSION['data'][$key]){
        //     return true ;
        // }return false;


    }

}
ClsSession::set("name", "mostafa2");
ClsSession::set("key", "value");
// print_r(ClsSession::get("name"));
// print_r(ClsSession::get("key"));
print_r(ClsSession::get_all());echo "<hr>";
print_r(ClsSession::flash("name"));echo "<hr>";
print_r(ClsSession::get_all());echo "<hr>";
// print_r(ClsSession::check("name"));echo "<hr>";
// print_r(ClsSession::remove("name"));
// print_r(ClsSession::get_all());echo "<hr>";
// print_r(ClsSession::remove_all());echo "<hr>";
// print_r(ClsSession::get_all());echo "<hr>";