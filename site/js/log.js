$(document).ready(function(){
    $("#log_in_form").on("submit",function(e){
        e.preventDefault();
        $.ajax({
            url: "php/login.php",
            method: "POST",
            data: $(this).serialize(),
            success: function (result) {
                $result = $.parseJSON(result);
                $("#myModal").modal('show');
                $("#myModalLabel").text($result.res);
                $(".add").css("display","inline-block");
                $("#users-log").text($result.log);
            } 
        });
    });
});