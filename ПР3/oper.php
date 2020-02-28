<?php
require_once 'connection.php';

$link = mysqli_connect)($host, $user< $password, $database) or die("Error " . mysqli_error($link));

$query ="SELECT * FROM phones";
$result = mysqli_query($link,$query) or die("Error " . mysqli_error($link));
if($result)
{
    echo "Успешно"
}

mysqli_close($link);
?>