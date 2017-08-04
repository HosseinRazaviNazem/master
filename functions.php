<!doctype html >
<html>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Sepehr-Nazem
 * Date: 7/13/2017
 * Time: 9:10 AM
 */


function info($x1, $x2) {
         echo " your name is   ".$x1." and your family is  ".$x2;

           return 1;
        }

?>



<?php

function checknum($n){
    if ($n>25): echo "this number is grater than 25  value of variable  is  ".$n;

    else: echo 'the number is smaller than 25';
    endif;
    return $n;
}


?>

<?php
function green()
{
    echo " the green function is choosen  ";
    return
}

function blue()
{
    echo " the blue function is choosen  ";
}

function red()
{
    echo " the red function is choosen  ";
}

?>



</body>
</html>
