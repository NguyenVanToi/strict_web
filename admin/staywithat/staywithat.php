<div class="staywithat fa-common">
    <div class="col-md-offset-11 col-md-1">
        <a onclick="return confirm('Bạn muốn xóa project này ?')" href="../admin.php?page-layout=del-message&id=all" >
            <button type="button" class="btn btn-danger btn-add">All <i class="fa fa-trash trash-icon"></i></button>
        </a>
    </div>
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Fullname</th>
            <th>Message</th>
            <th>Delete</th>
        </tr>
        <?php
            $query="select * from staywithat";
            $result=mysqli_query($link, $query);
            while ($rows=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $rows['ID']?></td>
            <td><?php echo $rows['email']?></td>
            <td><?php echo $rows['fullname']?></td>
            <td><?php echo $rows['message']?></td>
            <td>
                <a onclick="return confirm('Bạn muốn xóa message này ?')" href="admin.php?page-layout=del-message&id=<?php echo $rows['ID'];?>" >
                    <button type="button" class="btn btn-danger"><i class="fa fa-trash trash-icon"></i></button>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
