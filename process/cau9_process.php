<?php
$so = $_POST['max'];
$text = $_POST['day'];

$array = explode(' ', $text);

$arr = array();
for($i = 1; $i <= $so; $i++)
{
    if(!in_array($i, $array))
    {
        $arr[]=$i;
    }
}
foreach($arr as $item)
{
    echo($item." ");
}