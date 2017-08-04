
<?php


function choose_func()
{
    if (isset($_GET['send'])) {
       // echo var_dump($_GET);

        foreach ($_GET as $key => $value) {
            if ($value != "send") :
                $value();
            endif;

        }//foreach

    }//if
return ;
}
?>

<?php  // in function file
function green()
{
    echo " the green function is choosen  ";
    return ;
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

<?php
//index file
choose_func(); ?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="Get">

    <INPUT TYPE="radio" name="red" value="red"> red<br>
    <INPUT TYPE="radio" name="green" value="green"> green<br>
    <INPUT TYPE="radio" name="blue" value="blue"> blue<br>

    <input type="submit" name="send" value="send">
</form>


</body>
</html>


