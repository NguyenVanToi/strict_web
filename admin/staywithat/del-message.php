
<?php
$id=$_GET['id'];
if($id=='all'){
    $query1="delete from staywithat";
    $result1=mysqli_query($link, $query1);

}else{
    $query="delete from staywithat WHERE ID=$id";
    $result=mysqli_query($link, $query);
}
if($result||$result1){
    header("location: admin.php?page-layout=staywithat");
}
?>
