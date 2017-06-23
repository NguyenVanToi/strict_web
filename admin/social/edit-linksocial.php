<?php
//    if(isset($_POST['edit'])) {
//        $id=$_GET['id'];
//        $linksocial = $_POST['link'];
//        $query="update social set link = '$linksocial' WHERE `ID`=$id";
//        $result = mysqli_query($link, $query);
//
//    if($result){
//        header("location: admin.php?page-layout=social");
//        echo "true";
//    }
//    else{
//        echo "Failed". mysqli_error($link);
//    }
//    }
//
//?>
<?php
if(isset($_POST['edit'])) {
    $namelink = $_POST['namelink'];
    $linksocial=$_POST['link'];
    $query="update social set link = '$linksocial' WHERE `name-social`='$namelink'";
    $result = mysqli_query($link, $query);
    echo "name: ". $namelink;
    if($result){
        header("location: admin.php?page-layout=social");
        echo "true";
    }
    else{
        echo "Failed". mysqli_error($link);
    }
}

?>
