<?php
class myclass {

    public static $counter =0;
    function __construct()
    {

        self::$counter++ ;

    }

}

$r=mt_rand(1,10);
for($i=0;$i<=$r ; $i++ ){ $myclass =new myclass(); }
echo  myclass::$counter;