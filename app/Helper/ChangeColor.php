<?php

namespace App\Helper;

class ChangeColor{

    public static function color($string){
        return str_replace(array('[',']'),array('<span>','</span>'),$string);
    }
}



?>