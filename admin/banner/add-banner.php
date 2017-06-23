<?php
/**
 * Created by PhpStorm.
 * User: vinamilk26
 * Date: 18/06/2017
 * Time: 15:04
 */
    include_once "upfile/upload-file.php";
    $dir = 'upfile/banner/';
    $name = 'upload-img';
    $anh=$dir . $_FILES[$name]['name'];
    $time=gmdate("Y-m-d H:i:s", time()+7*3600);
    if(isset($_POST['add'])) {
        $title=$_POST['title'];
        $description=$_POST['description'];
        $update=$_POST['update-banner'];
        $source=$_POST['img-banner'];
        $query="insert into strict.banners (image, title, description, `update`) VALUE ('$source', '$title', '$description', '$time')";
        $result=mysqli_query($link, $query);
        if($result){
            header("location: admin.php?page-layout=banner");
        }
        else{
            echo "Failed". mysqli_error($link);
        }
}
?>
<h1 class="text-center">Add new banner</h1>
    <div class="row content-common demo-common">
        <div class="col-sm-6 col-md-offset-2 col-md-8">
            <form method="post" enctype="multipart/form-data" action="admin.php?page-layout=add-banner">
                <div class="form-group">
                    <input class="form-control" type="file" name="upload-img" id="filetoUpload" required>
                    <button type="submit" name="uploadclick" value="Upload">Upload file image</button>
                    <span><?php
                        if(isset($_POST['uploadclick'])){
                            uploadFile($name, $_FILES[$name]['type'], 3, $dir);
                            if ($_FILES[$name]['error'] > 0) {
                                echo 'File Upload Bị Lỗi';
                            }
                            else{
                                echo 'File Uploaded';
                            }
                        }
                        ?>
                </span>
                </div>
                <div class="form-group">
                    Title banner: <input class="form-control title" type="text" value="">
                </div>
                <div class="form-group">
                    Description banner: <input class="form-control input-description des" value="">
                </div>
                <div class="form-group">
                    Update: <input class="form-control update" value="<?php echo $time;?>" disabled>
                </div>
            </form>

            <button class="btn btn-primary demo-banner" data-toggle="modal" data-target="#modal-banner" name="demo">Demo <i class="fa fa-plus-circle plus-fa"></i></button>


            <div class="modal fade" id="modal-banner" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-center">Demo banner</h4>
                        </div>
                        <div class="modal-body">
                            <img src="<?php echo $anh;?>">
                            <form action="admin.php?page-layout=add-banner" method="post">
                                <div class="form-group">
                                    Source image banner: <input class="form-control" name="img-banner" value="<?php echo $anh;?>">
                                </div>
                                <div class="form-group">
                                    Title banner: <input class="form-control" id="title" name="title">
                                </div>
                                <div class="form-group">
                                    Description banner: <input class="form-control" id="des" name="description">
                                </div>
                                <div class="form-group">
                                    Update: <input class="form-control" id="update" name="update-banner" disabled>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="add">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>