// Checks to see if passwords match when registering
$(document).ready(function() {
  $("#password-verify").keyup(passMatch);
});

function passMatch() {
    var password = $("#password").val();
    var passwordVerify = $("#password-verify").val();
 
    if(password == passwordVerify) {
        $("#pass-match").css("background-color", "green"); 
        $("#pass-match").html("<span class='glyphicon glyphicon-ok'></span> Passwords match.");
        $("#registerButton").removeAttr("disabled");
    } else {
        $("#pass-match").css("background-color", "red"); 
        $("#pass-match").html("<span class='glyphicon glyphicon-remove'></span> Passwords do not match.");
        $("#registerButton").attr("disabled", "disabled");
    }
}
