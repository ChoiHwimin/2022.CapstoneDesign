<?php
$db_host = "localhost"; 
$db_user = "capstone5"; 
$db_passwd = "scoutmini5!";
$db_name = "capstone5"; 

// MySQL - DB 접속.
$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

// 문자셋 설정, utf8.
mysqli_set_charset($conn,"utf8");

$x = $_GET['x'];
$y = $_GET['y'];
$id = $_GET['id'];

$sql ="UPDATE test SET
x='$x',
y='$y',
id='$id'
where id='$id'";

if (mysqli_query($conn,$sql)){
echo "$sql";
} 
else {
echo "error";
}

mysqli_close($conn);
?>
