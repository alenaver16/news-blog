$(document).ready(function(){
    $("#recovery").on("submit", function(e){
        e.preventDefault();
        $.ajax({
            url: "php/recovery.php",
            method: "POST",
            data: $(this).serialize(),
            success: function(result){
             $("#myModal").modal("show");
             $("#myModalLabel").text(result);   
            }
        });
    });
})