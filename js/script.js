/**
 * Created by vinamilk26 on 27/05/2017.
 */
$(document).ready(function () {
    $(".banner-content a").click(function () {
        name=$(this).attr("href");
        var pos_slogan= $(name).position().top;
        $('html, body').stop().animate({scrollTop:pos_slogan}, 600);
    });
    $(".form-info").submit(function(){
        var name=$("#name").val();
        var email=$("#form-email").val();
        var message=$("#message").val();
        var flag=true;
        if(name==""){
            $("#name-err").fadeIn("slow");
            $("#name-err").text("Can't blank");
            $("#name-err").addClass("text-danger");
            $("#err-total").text("There is a problem with your submission!");
            flag=false;
        }else{
            $("#name-err").fadeOut("slow");

        }
        if(email==""){
            $("#email-err").fadeIn("slow");
            $("#email-err").text("Can't blank");
            $("#email-err").addClass("text-danger");
            $("#err-total").text("There is a problem with your submission!");

            flag=false;
        }else{
            var req=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var result=req.test(email);
            if(result == false){
                $("#email-err").text("Email errror (abc123@xyz.com)");
                $("#email-err").addClass("text-danger");
                flag=false;
            }else{
                $("#email-err").fadeOut("slow");
            }
        }
        if(message==""){
            $("#message-err").fadeIn("slow");
            $("#message-err").text("Can't blank");
            $("#message-err").addClass("text-danger");
            $("#err-total").text("There is a problem with your submission!");
            flag=false;
        }
        else{
            $("#message-err").fadeOut("slow");
        }
        return flag;
    });
//    slides
    $(".img-zoom").click(function(){
        var src=$(this).parents(".pic").children(".pro").children(".image").attr("src");
        // var id=$(this).parents(".pic").children(".image").attr("value");
        // $("#img-modal").attr("value", id);
        var titlepro=$(this).parents(".pic").children(".pro").children(".project").children(".title-none").text();
        var despro=$(this).parents(".pic").children(".pro").children(".project").children(".des-none").text();
        var updatepro=$(this).parents(".pic").children(".pro").children(".project").children(".update-none").text();
        $(this).parents(".pic").children(".pro").addClass("modal-active");
        $("#img-modal").attr("src", src);
        $("#title-show").text(titlepro);
        $("#des-show").text(despro);
        $("#update-show").text(updatepro);


    });
    $(".prev").click(function () {
        if($(".modal-active").parents(".pic").prev().is(".pic")){
            $(".modal-active").parents(".pic").prev().children(".pro").addClass("modal-active");
            $("#img-modal").fadeOut("200", function () {
                $(".modal-active").last().removeClass("modal-active");
                var src=$(".modal-active img").attr("src");
                var titlepro=$(".modal-active .project .title-none").text();
                var despro=$(".modal-active .project .des-none").text();
                var updatepro=$(".modal-active .project .update-none").text();
                $("#img-modal").attr("src", src);
                $("#title-show").text(titlepro);
                $("#des-show").text(despro);
                $("#update-show").text(updatepro);


            });
            $("#img-modal").fadeIn("200");
        }
        else{
            $(".pic .pro").first().removeClass("modal-active");
            $(".pic .pro").last().addClass("modal-active");
            $("#img-modal").fadeOut("200", function () {
                var src=$(".modal-active img").attr("src");
                var titlepro=$(".modal-active .project .title-none").text();
                var despro=$(".modal-active .project .des-none").text();
                var updatepro=$(".modal-active .project .update-none").text();

                $("#img-modal").attr("src", src);
                $("#title-show").text(titlepro);
                $("#des-show").text(despro);
                $("#update-show").text(updatepro);
            })
            $("#img-modal").fadeIn("200");
        }
    });
    $(".next").click(function () {
        if($(".modal-active").parents(".pic").next().is(".pic")){
            $(".modal-active").parents(".pic").next().children(".pro").addClass("modal-active");
            $("#img-modal").fadeOut("200", function () {
                $(".modal-active").first().removeClass("modal-active");
                var src=$(".modal-active img").attr("src");
                var titlepro=$(".modal-active .project .title-none").text();
                var despro=$(".modal-active .project .des-none").text();
                var updatepro=$(".modal-active .project .update-none").text();
                $("#img-modal").attr("src", src);
                $("#title-show").text(titlepro);
                $("#des-show").text(despro);
                $("#update-show").text(updatepro);
            });
            $("#img-modal").fadeIn("200");
        }
        else{
            $(".pic .pro").last().removeClass("modal-active");
            $(".pic .pro").first().addClass("modal-active");
            $("#img-modal").fadeOut("200", function () {
                var src=$(".modal-active img").attr("src");
                var titlepro=$(".modal-active .project .title-none").text();
                var despro=$(".modal-active .project .des-none").text();
                var updatepro=$(".modal-active .project .update-none").text();
                $("#img-modal").attr("src", src);
                $("#title-show").text(titlepro);
                $("#des-show").text(despro);
                $("#update-show").text(updatepro);
            })
            $("#img-modal").fadeIn("200");
        }
    });
// demo banner
    $(".add-banner .demo-banner").click(function(){
        var title=$(".title").val();
        var des=$(".des").val();
        var update=$(".update").val();
        $("#title").val(title);
        $("#des").val(des);
        $("#update").val(update);
    });
//message
    $(".btn-mess").click(function () {
        var id=$(".id-show").text();
        var fullname=$(".name-show").text();
        var email=$(".email-show").text();
        var message=$(".mess").text();
        $("#id").val(id);
        $("#fullname").val(fullname);
        $("#email").val(email);
        $("#message").val(message);
    })

});

