<?php

class ClsValidation{

 public static function valid_require($var_input_data,$key_of_var)
{
    return empty($var_input_data) ? "$key_of_var is required" : null;
}

public static function valid($key,$value){       
    $data=[
        'key'=>htmlspecialchars($key),
        'value'=>htmlspecialchars($value),
];
// print_r($data); exit;
    foreach($data as $key =>$value)
    {
        if(self::valid_require($value,$key)){
            return $type_of_error =self::valid_require($value,$key);
        }
    }

    return null; 
}
}
// $valid =new ClsValidation();