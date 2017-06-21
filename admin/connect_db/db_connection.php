<?php
/**
 * Created by PhpStorm.
 * User: vinamilk26
 * Date: 13/06/2017
 * Time: 23:49
 */
$user= "root";
$pass="root";
$host="127.0.0.1";
$name="strict";

$link = mysqli_connect($host, $user, $pass, $name);

if (!$link) {
    die('Could not connect: ' . mysqli_error());
}

//mysqli_close($link);
?>