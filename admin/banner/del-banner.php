<?php
$id=$_GET['id'];
$query="delete from banners WHERE ID=$id";
$result=mysqli_query($link, $query);
if($result){
    header("location: admin.php?page-layout=banner");
}
?>