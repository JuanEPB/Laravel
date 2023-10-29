<?php

if(!function_exists('truncateText')){
    function truncateText($text, $lengt = 20, $suffix = '....'){
    if(strlen($text)<=$lengt){
        return $text;
    }
        return substr($text, 0, $lengt).$suffix;
    }
}


?>
