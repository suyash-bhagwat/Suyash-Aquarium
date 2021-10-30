<html>
<head>
    <link rel="stylesheet" href="CSS\cart.css">
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous">
  </script>    
  <script src="cart1.js"></script>
    <script type = "text/javascript">
        function test() {
            var a = [];
            var b ;
            a = JSON.parse(localStorage.getItem("cart"));

var result = a.map(b => b.productid);

$.ajax({
    url: "cart1.php",
    method: "post",
    data: result,
    success: function(){
        console.log("Done");
    }

        }
)
    }
    </script>
</head>
