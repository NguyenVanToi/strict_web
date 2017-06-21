<?php
    require_once "admin/connect_db/db_connection.php";
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<meta>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--JS-->
    <link rel="stylesheet" type = "text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type = "text/css" href="css/strict.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!--icon-->
    <link rel="icon" href="home/pic/favicon.ico" type="image/x-icon"/>
    <!--JS-->
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
<title>Strict Template</title>

</head>
<body class="color-body">
<!--container-body-->
<div class="container-body">
<!--logo-->
    <div class="container-logo"><img src="home/pic/logo.png" alt="logo"></div>

<!--end logo-->
<!--banner1-->
    <div class = "container-fluid  banner">
        <div id="carousel-example-generic" class="carousel slide img-banner text-center" data-ride="carousel">
            <!--<ol class="carousel-indicators">-->
            <!--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
            <!--<li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
            <!--<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
            <!--</ol>-->
            <div class="carousel-inner banner-img" role="listbox">
                <?php
                    $query="select * from banners";
                    $result=mysqli_query($link, $query);
                    while($rows=mysqli_fetch_array($result)){
                ?>
                <div class="item <?php if($rows['ID']==1) echo "active";?>">
                    <img src="<?php echo '../admin/'.$rows['image'];?>" alt="banner1">
                    <div class="banner-title">
                        <h1><strong><?php echo $rows['title'];?></strong></h1>
                        <hr/>
                        <p><?php echo $rows['description'];?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="banner-content text-center">
            <a href="#staywithat"><button type="submit" value="Call to action" class="btn btn-primary btn-common-banner">Call to action</button></a>
            <a href = "#slogan">
                <span class="down"><i class="fa fa-angle-down fa-2x"></i></span>
            </a>
        </div>
        <a id="slogan"></a>
    </div>
<!--end banner1-->

<!--slogan-->
    <div class="wrapper text-center container-slogan" id="slogan-text">
            <h2>Simple & pure design.</h2>
            <p>Designers everywhere dush with admiration upon seeing a web design and exclaim "it's beautiful, it's so clean !". There are a countless number a webdesign round up dedicated to 'clean' design and it is a term thrown around quite a bit in the web design community.It can be easy to spot a good example of clean design.</p>
    </div>
<!--end slogan-->
<!--header-icon-->
    <div class="wrapper header-icon">
        <div class="row text-center row-icon">
            <?php
                $query1="select * from simplepure";
                $result1=mysqli_query($link, $query1);
                while($rows1=mysqli_fetch_array($result1)){
                ?>
                <div class="col-sm-4 col-md-4 col-lg-4 icon">
                    <img src="<?php echo '../admin/'.$rows1['source-icon']?>" alt="icon1">
                    <h4><?php echo $rows1['title'];?></h4>
                    <p><?php echo $rows1['description'];?></p>
                </div>
            <?php } ?>
        </div>
    </div>
<!--end header-icon-->
<!--content-pic-->
    <section class="wrapper gallary" id="gallary-size">
        <div class="des-pic">
            <h1>Showcase your work like a pro.</h1>
            <p>Contact my if you like my work</p>
        </div>
        <div class="container">
            <div class="row row-pic clearfix">
                <?php
                    $query2="select * from showcase";
                    $result2=mysqli_query($link, $query2);
                    while($rows2=mysqli_fetch_array($result2)){
                ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 pic">
                    <div class="pro">
                    <img value="<?php echo $rows2['ID'];?>" src="<?php echo '../admin/'.$rows2['source-img'];?>" alt="pic1" class="image">
                    <div class="project">
                        <span class="title-none"><?php echo $rows2['title-pro'];?></span>
                        <span class="des-none"><?php echo $rows2['description-pro'];?></span>
                        <span class="update-none"><?php echo $rows2['update'];?></span>
                    </div>
                    </div>
                    <div class="pic-hover">
                        <div class="pic-icon">
                            <a class="img-zoom" data-toggle="modal" data-target="#myModal"><i class="fa fa-search-plus"></i></a>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

            <?php } ?>
                <div class="container-slides">
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="title-show"></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="flex-container">
                                        <a class="prev"><i class="flex-item fa fa-angle-left fa-2x"></i></a>
                                        <img id="img-modal" class="flex-item" src="" value="">
                                        <a class="next"><i class="fa fa-angle-right fa-2x flex-item"></i></a>
                                    </div>
                                    <div>
                                        <p id="des-show"></p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    Update: <span id="update-show"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <a id="staywithat"></a>
    </section>
    <!--stay-with-at--><!--end content-pic-->
    <section class="stay-wa" id="ft-swa">
    <div class="container">
        <div class="row form-row">
            <div class="text-center">
                <h3>Stay with us</h3>
                <p>We ensure quality &support</p>
            </div>
            <div class="text-center">
                <span id="err-total" class="text-danger"></span>
            </div>
            <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                <form class="form-info" method="post" action="message.php">
                    <div class="form-group">
                        <input class="form-control input-text" id="name" type="text" name="fullname" placeholder="Full Name">
                        <span id="name-err"></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control input-text" id="form-email" name="email" type="text" placeholder="Email Address">
                        <span id="email-err"></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-message" name="message" id="message" type="textarea" placeholder="Message">
                        <span id="message-err"></span>
                    </div>
                    <div class="form-submit">
                        <div class="checkbox">
                            <label id="form-checkbox">
                                <input type="checkbox"> Subcribes Newsletter
                            </label>
                        </div>
                       <button  onclick="return confirm('Check message!?')" class ="btn btn-primary btn-common-swa" type="submit" value="Send" name="send" id="btn-submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
<!--end stay-with-at-->
<!--footer-->
    <div class="container">
        <div class="footer">
            <div class="row">
                <div class="footer-row col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    Copyright 2014.STRICT
                </div>
                <div class="footer-img col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <?php
                        $query4="select * from social";
                        $result4=mysqli_query($link, $query4);
                        while($rows4=mysqli_fetch_array($result4)){
                    ?>
                    <a href="<?php echo $rows4['link'];?>"><i class="<?php echo $rows4['class-fa'];?>"></i></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!--end footer-->
</div>
<!--end container-body-->

</body>
</html>