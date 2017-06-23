<?php
/**
 * Created by PhpStorm.
 * User: vinamilk26
 * Date: 18/06/2017
 * Time: 15:04
 */
include_once "upfile/upload-file.php";
$dir = 'upfile/showcase/';
$name = 'upload-img';
$anh=$dir . $_FILES[$name]['name'];
$id=$_GET['id'];
$query1="select * from showcase WHERE ID=$id";
$result1=mysqli_query($link, $query1);
$rows1=mysqli_fetch_array($result1);
$sourceimg=$rows1['source-img'];
if(isset($_POST['edit'])) {
    $title=$_POST['title'];
    $id=$_GET['id'];
    $description=$_POST['description'];
    $update=$_POST['update'];
    $source=$_POST['img-banner'];
    $query="UPDATE strict.showcase SET `source-img`='$source', `title-pro`='$title', `description-pro`='$description', `update`='$update' WHERE ID=$id";
    $result=mysqli_query($link, $query);
    if($result){
        header("location: admin.php?page-layout=showcase");
    }
    else{
        echo "Failed". mysqli_error($link);
    }
}
?>
<h1 class="text-center">Edit showcase</h1>
<div class="row content-common demo-common">
    <div class="col-sm-6 col-md-offset-2 col-md-8">
        <form method="post" enctype="multipart/form-data" action="admin.php?page-layout=edit-showcase&id=<?php echo $_GET['id']; ?>">
            <div class="form-group">
                <input class="form-control" type="file" name="upload-img" id="filetoUpload">
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
                Title banner: <input class="form-control title" type="text" value="<?php echo $rows1['title-pro'];?>">
            </div>
            <div class="form-group">
                Description banner: <input class="form-control input-description des" value="<?php echo $rows1['description-pro'];?>">
            </div>
            <div class="form-group">
                Update: <input class="form-control update" value="<?php echo $rows1['update'];?>" disabled>
            </div>
        </form>
        <button class="btn btn-primary demo-banner" data-toggle="modal" data-target="#modal-banner" name="demo">Demo <i class="fa fa-edit fa-editbanner"></i></button>


        <div class="modal fade" id="modal-banner" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center">Demo showcase</h4>
                    </div>
                    <div class="modal-body">
                        <img src="<?php if(isset($_FILES[$name]['name'])) {echo $anh;}else{echo $sourceimg;}?>">
                        <form action="admin.php?page-layout=edit-showcase&id=<?php echo $_GET['id']; ?>" method="post">
                            <div class="form-group">
                                Source image project: <input class="form-control" name="img-banner" value="<?php if(isset($_FILES[$name]['name'])) {echo $anh;}else{echo $sourceimg;}?>">
                            </div>
                            <div class="form-group">
                                Title project: <input class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                Description project: <input class="form-control" id="des" name="description">
                            </div>
                            <div class="form-group">
                                Update: <input class="form-control" id="update" name="update">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="edit">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>