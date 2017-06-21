
<?php
    $id=$_GET['id'];
    $query="delete from showcase WHERE ID=$id";
    $result=mysqli_query($link, $query);
    if($result){
        header("location: admin.php?page-layout=showcase");
    }
?>