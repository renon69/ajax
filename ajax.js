$(document).ready(function() {
    var commentCount = 0;
    $("#btn").click(function() { // Add parentheses after "function"
      commentCount = commentCount - 1;
  
      $("#comments").load("load-comments.php", {
        commentNewCount: commentCount
      });
    });
  });
  