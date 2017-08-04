<?php

$strings = 'jjjj0h0hh0td0wsss';


Class changestring {





public function  spacecheck  ($strings) {

$strings_array = explode('0',$strings);


    foreach($strings_array_ as $s){
     echo "\t<li>$s</li>\n";
    }

}
}

$changestring= new changestring();
$changestring->spacecheck($strings);


?>



