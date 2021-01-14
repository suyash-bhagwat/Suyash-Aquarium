   
    if ($_SESSION['uid'])
    {
        ?>
        <script>
            alert("You have logged in")
        </script>
        <?php
    }
    else
    {
        header("location: login.php");
    }

    $(document).ready(function(){
        $("#button1").click(function(){
            var uname = $("#item_name").val();
            $.ajax({
                method: "post",
                url: "cart.php",
                data: {id:id, name:uname}
            });
        });
    });