 <div class="showcase fa-common">
    <div class="col-xs-offset-10 col-xs-2 col-md-offset-11 col-md-1">
        <a href="admin.php?page-layout=add-showcase"><button type="button" class="btn btn-primary btn-add" title="Add" data-toggle="tooltip"> <i class="fa fa-plus-circle plus-fa"></i></button></a>
    </div>
    <?php
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }else{
        $page=1;
    }
    $rowpage=2;
    $perrow= $rowpage * $page - $rowpage;
    $query="select * from showcase ORDER BY ID ASC LIMIT $perrow, $rowpage";
    $result=mysqli_query($link, $query);
    $numrow=mysqli_num_rows($result);
    $totalrow=mysqli_num_rows(mysqli_query($link, "SELECT * FROM showcase"));
    $totalpage=ceil($totalrow/$rowpage);
    $listpage='';
    for($i=1; $i<=$totalpage; $i++){
        if($page==$i){
            $listpage .= '<span>'.$i.'</span>';
        }else{
            $listpage .= '<a href="admin.php?page-layout=showcase&page='.$i.'">'.$i.'</a>';
        }
    }
    echo '<h1>Project('.$totalrow.')</h1>';

    while ($rows=mysqli_fetch_array($result)){
    ?>
            <div class="row banners">
            <div class="col-md-4">
                <img src="<?php echo $rows['source-img'];?>" alt="pic" width="100%">
                <a href="admin.php?page-layout=edit-showcase&id=<?php echo $rows['ID'];?>"><button type="button" class="btn btn-primary btn-edit" title="Edit" data-toggle="tooltip"><i class="fa fa-edit fa-editbanner"></i></button></a>
                <a onclick="return confirm('Bạn muốn xóa project này ?')" href="admin.php?page-layout=del-showcase&id=<?php echo $rows['ID'];?>" >
                    <button <?php if($totalrow<=6) echo "disabled"; ?> type="button" class="btn btn-danger btn-del" title="Delete" data-toggle="tooltip"><i class="fa fa-trash trash-icon"></i></button>
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
                        <td>Source</td>
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
 <div class="text-center">
     <ul class="pagination">
         <li>
             <a href="<?php if($page==1) echo ""; else{ $pageprv=$page-1; echo "admin.php?page-layout=showcase&page=".$pageprv;}?>"
             <span aria-hidden="true">&laquo;</span>
             <span class="sr-only">Previous</span>
             </a>
         </li>
         <li><?php echo $listpage;?></li>
         <li>
             <a href="<?php if($page==$totalpage) echo ""; else{ $pagenext=$page+1; echo "admin.php?page-layout=showcase&page=".$pagenext;}?>">
                 <span aria-hidden="true">&raquo;</span>
                 <span class="sr-only">Previous</span>
             </a>
         </li>
     </ul>
 </div>