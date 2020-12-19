<html lang="en">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="CSS\basic.css">
    </head>
<?php
session_start();
session_destroy();

?>
<script>
    alert('You have logged out successfully....');
    window.open('store.php', '_self');
</script>
<?php

?>
</html>