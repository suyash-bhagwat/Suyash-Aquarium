<html lang="en">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="CSS\basic.css">
        <script>
            function goBack() 
            {
                window.history.go(-1);
            }
        </script>
    </head>
<?php
session_start();
session_destroy();

?>
<script>
    alert('You have logged out successfully....');
    goBack();
</script>
<?php

?>
</html>