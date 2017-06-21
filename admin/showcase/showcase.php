 <div class="showcase fa-common">
    <div class="col-md-offset-11 col-md-1">
        <a href="admin.php?page-layout=add-showcase"><button type="button" class="btn btn-primary btn-add"> <i class="fa fa-plus-circle plus-fa"></i></button></a>
    </div>
    <?php
        $query="select * from showcase";
        $result=mysqli_query($link, $query);
        $num=mysqli_num_rows($result);
        while ($rows=mysqli_fetch_array($result)){
    ?>
            <div class="row banners">
            <div class="col-md-4">
                <img src="<?php echo $rows['source-img'];?>" alt="pic" width="100%">
                <a href="admin.php?page-layout=edit-showcase&id=<?php echo $rows['ID'];?>"><button type="button" class="btn btn-info btn-edit"><i class="fa fa-edit fa-editbanner"></i></button></a>
                <a onclick="return confirm('Bạn muốn xóa project này ?')" href="admin.php?page-layout=del-showcase&id=<?php echo $rows['ID'];?>" >
                    <button <?php if($num <=6) echo "disabled"; ?> type="button" class="btn btn-danger btn-del"><i class="fa fa-trash trash-icon"></i></button>
                </a>
            </div>
            <div class="col-md-8">
                <table class="table table-striped table-hover">
                    <tbody>
                    <tr>
                        <th colspan="2" class="text-center">Project <?php echo $rows['ID'];?></th>
                    </tr>
                    <tr>
                        <td>ID</td>
                        <td><?php echo $rows['ID'];?></td>
                    </tr>
                    <tr>
                        <td>Source image project</td>
                        <td id="source-pro"><?php echo $rows['source-img'];?></td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td id="title-pro"><?php echo $rows['title-pro'];?></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td id="des-pro"><?php echo $rows['description-pro'];?></td>
                    </tr>
                    <tr>
                        <td>Update</td>
                        <td id="update-pro"><?php echo $rows['update'];?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
    <?php }?>
 </div>