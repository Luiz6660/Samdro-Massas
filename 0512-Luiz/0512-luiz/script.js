$(document).ready(function(){

    $("#btDados").click(function(event){

        $.ajax({
            type: "GET",
            url: 'teste.php',
            dataType: "html",
            success: function(response){
            alert(response);
        }
        });
    });
});