$(document).ready(function() {

  $("input").keyup(function() {
    var name = $("input").val();
    $.post("suggestions.php", {
      suggestion: name
    }, function (data, status) {
        $("#text").html(data);
    });
  })
})