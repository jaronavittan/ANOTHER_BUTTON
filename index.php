<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script>
      $(document).ready(function() {

        $("button").click(function() {
          $.get("test.php", function(data, status) {
            $("#test").html(data);
            alert(status);
          });
        });
        
      });
    </script>
  </head>
  <body>
    
  <button>Click me to get data!</button>
  <p id="test"></p>
  </body>
</html>
