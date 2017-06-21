<div class="simple fa-common">
    <div class="col-md-offset-11 col-md-1">
        <a href="admin.php?page-layout=add-simple"><button type="button" class="btn btn-primary btn-add"> <i class="fa fa-plus-circle plus-fa"></i></button></a>
    </div>
    <?php
    $query="select * from simplepure";
    $result=mysqli_query($link, $query);
    $num=mysqli_num_rows($result);
    while ($rows=mysqli_fetch_array($result)){
        ?>
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $rows['source-icon'];?>" alt="banner1" height="170px" width="100%">
                <a href="admin.php?page-layout=edit-simple&id=<?php echo $rows['ID'];?>"><button type="button" class="btn btn-info btn-edit"><i class="fa fa-edit fa-editbanner"></i></button></a>
                <a onclick="return confirm('Bạn muốn xóa sub page này ?')" href="admin.php?page-layout=del-simple&id=<?php echo $rows['ID'];?>" >
                    <button type="button" <?php if($num<=3) echo "disabled";?> class="btn btn-danger btn-del"><i class="fa fa-trash trash-icon"></i></button>
                </a>
            </div>
            <div class="col-md-8">
                <table class="table table-striped table-hover">
                    <tbody>
                    <tr>
                        <th colspan="2" class="text-center">Sub page <?php echo $rows['ID'];?></th>
                    </tr>
                    <tr>
                        <td>ID</td>
                        <td><?php echo $rows['ID'];?></td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td><?php echo $rows['title'];?></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td><?php echo $rows['description'];?></td>
                    </tr>
                    <tr>
                        <td>Update</td>
                        <td><?php echo $rows['update'];?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
    <?php }?>
</div>