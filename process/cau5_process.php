<?php

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

if($a >= $b)
{
    if($a >= $c)
    {
        echo($a);
    }
    else
    {
        echo($c);
    }
}else{
    if($b >= $c )
    {
        echo($b);
    }
    else{
        echo($c);
    }
}