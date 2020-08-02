<?php

require '../libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->assign('myname', 'suresh');

$connect = mysqli_connect("localhost", "root", "");
if (!$connect) {
    die("Connection Unsuccessful: " . mysqli_connect_error());
}
$selectDB = mysqli_select_db($connect, "smarty") or die("Could not select Database");
$query = mysqli_query($connect, "SELECT * FROM user_tbl") or die("Query failed : ");
while ($result = mysqli_fetch_assoc($query)) {
    $data[] = $result;
}
$smarty->assign('users', $data);
$smarty->assign('srno', 0);
$smarty->display('dashboard.tpl');
mysqli_close($connect);



