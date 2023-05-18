$(document).ready(function() {
    $("form").submit(function(event) {
        event.preventDefault();
        var name = $("#mail-name").val();
        var name = $("#mail-email").val();
        var name = $("#mail-gender").val();
        var name = $("#mail-message").val();
    });
});