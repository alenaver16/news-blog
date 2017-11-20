$(document).ready(function(){
    $("#news").on("submit",function(e){
        e.preventDefault();
        $.ajax({
            url: "php/news.php",
            method: "POST",
            data: $(this).serialize(),
            success: function (result) {
                $result = $.parseJSON(result);
                $('#myModal').modal('show');
                $("#myModalLabel").text($result.text);
            } 
        });
    });
});