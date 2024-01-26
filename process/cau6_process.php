
<?php
$so = $_POST['so'];
if($so < 100 && $so>=10)
{
    $sd = floor($so /10);
    $ss = $so %10;
    echo($sd + $ss);


}
else
{
    echo('Nhập sai r bạn');
}