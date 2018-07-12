$(document).ready(function(){
    $("#registration_form").submit(function () {
        var data = $("#registration_form").serialize();
        var url = "register_submit.php";
        $.ajax(url, {
            data: data,
            success: success_function,
            error: error_function,
            type: "POST"
        });
        return false;
    });
});
var success_function = function(response){
    alert(response);
}
var error_function = function(){
    alert("Internal server error");
}
