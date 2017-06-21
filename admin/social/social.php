
<div class="social">
    <?php
        $query="select * from social";
        $result=mysqli_query($link, $query);
        while($rows=mysqli_fetch_array($result)){
        ?>

        <form id="form-link" action="admin.php?page-layout=edit-linksocial&id=<?php echo $rows['ID'];?>" method="post">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div class="form-group col-md-3">
                        <p><?php echo $rows['name-social'] .":";?></p>
                    </div>
                    <div class="form-group col-md-7">
                        <input class="form-control" type="text" name="link" id="linksocial" value="<?php echo $rows['link'];?>">
                    </div>

                    <button  name="edit" type="submit" class="btn btn-info btn-save col-md-2">Edit<i class="fa fa-edit fa-editbanner"></i></button>
                </div>
            </div>
        </form>
        <?php } ?>
</div>
<!--            <button data-toggle="modal" data-target="#link-modal" class="btn btn-info btn-edit"><i class="fa fa-edit fa-editbanner"></i></button>-->
<!--    <div class="modal fade" id="link-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">-->
<!--        <div class="modal-dialog modal-sm" role="document">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-header">-->
<!--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
<!--                    <h4 class="modal-title text-center">Edit link social</h4>-->
<!--                </div>-->
<!--                <div class="modal-body">-->
<!--                    <form id="form-link" /*action="admin.php?page-layout=edit-linksocial" method="post"*/>-->
<!--                        <div class="form-group">-->
<!--                            Name Social: <input class="form-control" id="social-name" type="text" name="linksocial" value="">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            Link: <input class="form-control" type="text" name="link" id="linksocial">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <button  name="edit" onclick="load_ajax()" class="btn btn-info btn-save">Edit<i class="fa fa-edit fa-editbanner"></i></button>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->



