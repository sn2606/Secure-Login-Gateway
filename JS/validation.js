$(function() {
    $("#username").keypress(function(e) {
        var keyCode = e.keyCode || e.which;

        $("#lblError").html("");
        var regex = /^[A-Za-z0-9]+$/;

        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            $("#lblError").html("Only Alphabets allowed.");
            var alerted = localStorage.getItem('alerted') || '';
            if (alerted != 'yes') {
                alert("Only Alphabets allowed.");
                localStorage.setItem('alerted', 'yes');
            }
        }

        return isValid;
    });
});