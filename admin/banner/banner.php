<div class="banners fa-common">
<!--    <div class="row">-->
        <div class="col-sm-offset-10 col-sm-2 col-md-offset-11 col-md-1">
            <a href="admin.php?page-layout=add-banner"><button type="button" class="btn btn-primary btn-add" title="Add" data-toggle="tooltip"> <i class="fa fa-plus-circle plus-fa"></i></button></a>
        </div>
<!--     </div>-->
<?php
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }else{
        $page=1;
    }
    $rowpage=2;
    $perrow= $rowpage * $page - $rowpage;
    $query="select * from banners ORDER BY ID ASC LIMIT $perrow, $rowpage";
    $result=mysqli_query($link, $query);
    $numrow=mysqli_num_rows($result);
    $totalrow=mysqli_num_rows(mysqli_query($link, "SELECT * FROM banners"));
    $totalpage=ceil($totalrow/$rowpage);
    $listpage='';
    for($i=1; $i<=$totalpage; $i++){
        if($page==$i){
            $listpage .= '<span>'.$i.'</span>';
        }else{
            $listpage .= '<a href="admin.php?page-layout=banner&page='.$i.'">'.$i.'</a>';
        }
    }
    echo '<h1 class="totalrow">Banner('.$totalrow.')</h1>';

    while ($rows=mysqli_fetch_array($result)){
?>
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $rows['image'];?>" alt="banner1"  width="100%">
                <a href="admin.php?page-layout=edit-banner&id=<?php echo $rows['ID'];?>"><button type="button" class="btn btn-primary btn-edit" title="Edit" data-toggle="tooltip"><i class="fa fa-edit fa-editbanner"></i></button></a>
                <a onclick="return confirm('Bạn muốn xóa Banner này ?')" href="admin.php?page-layout=del-banner&id=<?php echo $rows['ID'];?>" >
                    <button <?php if($totalrow<=3) echo "disabled";?> type="button" class="btn btn-danger btn-del"><i class="fa fa-trash trash-icon" title="Delete" data-toggle="tooltip"></i></button>
                </a>
            </div>
            <div class="col-md-8">
            <table class="table table-striped table-hover">
                <tbody>
                <tr>
                    <th colspan="2" class="text-center">Banner <?php echo $rows['ID'];?></th>
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
<div class="text-center">
    <ul class="pagination">
        <li>
            <a href="<?php if($page==1) echo ""; else{ $pageprv=$page-1; echo "admin.php?page-layout=banner&page=".$pageprv;}?>"
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
            </a>
        </li>
        <li><?php echo $listpage;?></li>
        <li>
            <a href="<?php if($page==$totalpage) echo ""; else{ $pagenext=$page+1; echo "admin.php?page-layout=banner&page=".$pagenext;}?>">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Previous</span>
            </a>
        </li>
    </ul>
</div>