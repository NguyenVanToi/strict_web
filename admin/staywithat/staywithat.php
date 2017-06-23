<div class="staywithat fa-common">
    <div class="col-xs-offset-0 col-md-offset-11 col-md-1">
        <a onclick="return confirm('Bạn muốn xóa tất cả message?')" href="../admin.php?page-layout=del-message&id=all" >
            <button type="button" class="btn btn-danger btn-add" title="Delete All" data-toggle="tooltip">All <i class="fa fa-trash trash-icon"></i></button>
        </a>
    </div>
    <div class="row">
        <div class="">
        <table class="table table-striped table-hover text-center">
        <tr>
            <th class="id-show">ID</th>
            <th class="email-show">Email</th>
            <th>Fullname</th>
            <th class="text-center">Message</th>
            <th>Detail</th>
            <th class="text-center">Delete</th>
        </tr>
        <?php
        if(isset($_GET['page'])){
            $page=$_GET['page'];
        }else{
            $page=1;
        }
        $rowpage=4;
        $perrow= $rowpage * $page - $rowpage;
        $query="select * from staywithat ORDER BY ID ASC LIMIT $perrow, $rowpage";
        $result=mysqli_query($link, $query);
        $numrow=mysqli_num_rows($result);
        $totalrow=mysqli_num_rows(mysqli_query($link, "SELECT * FROM staywithat"));
        $totalpage=ceil($totalrow/$rowpage);
        $listpage='';
        for($i=1; $i<=$totalpage; $i++){
            if($page==$i){
                $listpage .= '<span>'.$i.'</span>';
            }else{
                $listpage .= '<a href="admin.php?page-layout=staywithat&page='.$i.'">'.$i.'</a>';
            }
        }
        echo '<h1 class="totalrow">Message('.$totalrow.')</h1>';
        while ($rows=mysqli_fetch_array($result)){
        ?>

        <tr class="row-swa">
            <td width="5%" class="id-show"><?php echo $rows['ID']?></td>
            <td width="20%" class="email-show"><?php echo $rows['email']?></td>
            <td width="20%" class="name-show"><?php echo $rows['fullname']?></td>
            <td width="35%" class="mess"><?php echo $rows['message']?></td>
            <td width="10%">
                <button type="button" class="btn btn-info btn-mess"  data-toggle="modal" data-target="#modal-message" title="Detail" data-toggle="tooltip"><i class="fa fa-address-card-o trash-icon"></i></button>
            </td>
            <td>
                <a onclick="return confirm('Bạn muốn xóa message này ?')" href="admin.php?page-layout=del-message&id=<?php echo $rows['ID'];?>" >
                    <button type="button" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="fa fa-trash trash-icon"></i></button>
                </a>
            </td>
        </tr>
        <?php } ?>
        </table>
            </div>
    </div>

    <div class="modal fade" id="modal-message" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">Detail message</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            ID: <input class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            Full name: <input class="form-control" value="" id="fullname">
                        </div>
                        <div class="form-group">
                            Email: <input class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            Message: <textarea class="form-control" id="message" disabled></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="text-center">
    <ul class="pagination">
        <li>
            <a href="<?php if($page==1) echo ""; else{ $pageprv=$page-1; echo "admin.php?page-layout=staywithat&page=".$pageprv;}?>"
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
            </a>
        </li>
        <li><?php echo $listpage;?></li>
        <li>
            <a href="<?php if($page==$totalpage) echo ""; else{ $pagenext=$page+1; echo "admin.php?page-layout=staywithat&page=".$pagenext;}?>">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
    </ul>
</div>