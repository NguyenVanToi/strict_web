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
            <th>Detail</th>
            <th>Delete</th>
        </tr>
        <?php
            $query="select * from staywithat";
            $result=mysqli_query($link, $query);
            while ($rows=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td width="5%" class="id-show"><?php echo $rows['ID']?></td>
            <td width="20%" class="email-show"><?php echo $rows['email']?></td>
            <td width="20%" class="name-show"><?php echo $rows['fullname']?></td>
            <td width="35%"class="mess"><?php echo $rows['message']?></td>
            <td width="10%">
                <button type="button" class="btn btn-info btn-mess"  data-toggle="modal" data-target="#modal-message"><i class="fa fa-address-card-o trash-icon"></i></button>
            </td>
            <td>
                <a onclick="return confirm('Bạn muốn xóa message này ?')" href="admin.php?page-layout=del-message&id=<?php echo $rows['ID'];?>" >
                    <button type="button" class="btn btn-danger"><i class="fa fa-trash trash-icon"></i></button>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>

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
                            Message: <input class="form-control" id="message" disabled>
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
