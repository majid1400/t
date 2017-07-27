<?php
$select_form = function ($color_name){
    $result = "";
    switch ($color_name) {
        case 'flip':
            $fruits = array("lemon", "orange", "banana", "apple");
            array_flip ($fruits);
            foreach ($fruits as $key => $val) {
                $result .= $val . ", \n";
            }
            break;
        case 'descending':
            $fruits = array("lemon", "orange", "banana", "apple");
            rsort($fruits);
            foreach ($fruits as $key => $val) {
                $result .= $val . ", \n";
            }
            break;
        case 'random':
            $fruits = array("lemon", "orange", "banana", "apple");
            shuffle($fruits);
            foreach ($fruits as $key => $val) {
                $result .= $val . ", \n";
            }
            break;
    }
    return $result;
};