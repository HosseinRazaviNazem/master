
<?php

$first_name = array('ali','hossein','mitra','sepideh');
$last_name = array ('Notouzian','Nazem','tavaf','razavi');

$Q= count($first_name); ?>
<?php
for ($i=0;$i<$Q;$i++){
   echo ($i+1).'-'.$first_name[$i].'  '.$last_name[$i].'  ';
}
?>