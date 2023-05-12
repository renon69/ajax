$(document).ready(function() {
  
  $("#btn").click(function () {
    $.get("docs.txt", function(data, status) {
        $("#text").html(data);
        alert(status);
    })
  })
})