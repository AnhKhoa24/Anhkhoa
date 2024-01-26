<?php
$so = $_POST['so'];

echo($so."->");
do
{
    if($so %2 == 0)
    {
        $so = $so /2;
        echo($so."->");
    }
    else{
        $so = $so*3 + 1;
        echo($so."->");
    }
}   
while($so != 1);

