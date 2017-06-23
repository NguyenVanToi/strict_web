
<div class="social">
    <table class="table table-striped table-hover">
        <tr>
            <td class="name-show">Name</td>
            <td>Link</td>
            <td>Edit</td>
        </tr>
    <?php
        $query="select * from social";
        $result=mysqli_query($link, $query);
        while($rows=mysqli_fetch_array($result)){
        ?>
            <tr class="social-link">
                <td class="name-show" id="name-show"><?php echo $rows['name-social'];?></td>
                <td class="linksocial" id="link-show"><?php echo $rows['link'];?></td>
                <td ><button class="btn btn-primary edit-link" data-toggle="modal" data-target="#link-modal" name="demo">Edit <i class="fa fa-edit fa-editbanner"></i></button>
                </td>
            </tr>
<!--        <form id="form-link" action="admin.php?page-layout=edit-linksocial&id=--><?php //echo $rows['ID'];?><!--" method="post">-->
<!--            <div class="row">-->
<!--                <div class="col-md-offset-3 col-md-6">-->
<!--                    <div class="form-group col-md-3">-->
<!--                        <p>--><?php //echo $rows['name-social'] .":";?><!--</p>-->
<!--                    </div>-->
<!--                    <div class="form-group col-md-7">-->
<!--                        <input class="form-control" type="text" name="link" id="linksocial" value="--><?php //echo $rows['link'];?><!--">-->
<!--                    </div>-->
<!--                    <button  name="edit" type="submit" class="btn btn-info btn-save col-md-2">Edit<i class="fa fa-edit fa-editbanner "></i></button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </form>-->
        <?php } ?>
    </table>
</div>
    <div class="modal fade" id="link-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">Edit link social</h4>
                </div>
                <div class="modal-body">
                    <form id="form-link" method="post" action="admin.php?page-layout=edit-linksocial">
                        <div class="form-group">
                            Name Social: <input class="form-control" id="social-name" type="text" name="namelink" value="">
                        </div>
                        <div class="form-group">
                            Link: <input class="form-control" type="text" name="link" id="linksocial">
                        </div>
                        <div class="form-group">
                            <button  name="edit"  class="btn btn-primary btn-save">Edit<i class="fa fa-edit fa-editbanner"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



