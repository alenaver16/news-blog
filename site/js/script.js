$(document).ready(function(){
    $(document).on("click", "#log_in",function(){
        $('#registration_form').css("display","none");
        $('#log_form').css("display","block");
        $("#password_recovery_form").css("display","none");
    });
    $(document).on("click", "#sign_up",function(){
        $('#log_form').css("display","none");
        $('#registration_form').css("display","block");
        $("#password_recovery_form").css("display","none");
    });
    $(document).on("click", "#forget",function(){
        $('#log_form').css("display","none");
        $('#registration_form').css("display","none");
        $("#password_recovery_form").css("display","block");
    });

    $('.navbar-toggle').on('click', function() {
        $('body').css('background-size', '100% 800px');
    });
    
});

function close()    {    
    ($(this).parent()).parent().css("max-height","300px");
    $(this).prevAll((".box")).css("overflow","hidden");
    $(this).prevAll((".box")).css("text-overflow","ellipsis");
    $(this).prevAll((".box")).css("display"," -webkit-box");
    $(this).css("display","none");
    $(this).prev(('.toggle-text')).css("display","block");
}
function open(){
    ($(this).parent()).parent().css("max-height","none");
    $(this).prev((".box")).css("overflow","visible");
    $(this).prev((".box")).css("text-overflow","initial");
    $(this).prev((".box")).css("display"," block");
    $(this).css("display","none");
    $(this).next(('.close-text')).css("display","block");
}

$('.close-text').click(close);
$('.toggle-text').click(open);

$(function(){
    for( $i = 1;  $i <= $('.news-block').length; $i++){
        $c = $('#news-block'+$i+' .box').text().length;
        $b = $("#news-block"+$i+" .box").width();
        if($c < 314 && $b <= 991){
            $('#news-block'+$i+' .toggle-text').css("display","none");
        }
        console.log($c);
    }
});