<?php
/**
 * Created by PhpStorm.
 * User: vinamilk26
 * Date: 15/06/2017
 * Time: 11:18
 */
function uploadFile ($name, $type, $max, $folder){
    $target_file= $folder . basename($_FILES[$name]['name']);
    $upload = 0;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    //    check file fake
    $check = getimagesize($_FILES[$name]["tmp_name"]);
    if($check != false) {
        $upload = 1;
    } else {
//        echo "File is not an image.";
        $upload = 0;
    }
    // Check if file already exists
    if(file_exists($target_file)){
//        echo "File already existed";
        $upload=0;
    }
    //Check size file
    if($_FILES[$name]['size'] > $max*1024*1024){
//        echo "File is too large";
        $upload=0;
    }
    //Check format file
//    if(!in_array($imageFileType, $type)){
//        echo "Only JPG, PNG, JPEG, GIF are allowed";
//        $upload=0;
//    }
    //upload file
    if($upload==0){
        echo "Sorry, Upload failed";
    }else{
        move_uploaded_file($_FILES[$name]['tmp_name'], $target_file);

    }
}
?>