<?php
session_start();
class ClsSession {

    
    static function set($key , $value=null){
        if(is_null($value)){
            $value = $key;
        }

        // $_SESSION['data'][$key] = $value;

        // return true;
        // in here make override on data 
    //     $_SESSION['data']=[
    //     'key'=>$key,
    //     'value'=>$value,
    // ];
    // return true ; 

    }
static public function get($key = null) {
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
ClsSession::set("name", "mostafa");
ClsSession::set("key", "value");
print_r(ClsSession::get("name"));