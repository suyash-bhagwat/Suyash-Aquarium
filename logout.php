<html lang="en">
    <head>
        <title>Logout</title>
        <link rel="stylesheet" href="CSS\basic.css">
        <script src="logout.js"></script>
    </head>
<?php
session_start();
session_unset();
session_destroy();

?>
          <script>
                logout();
          </script>
<?php

?>
</html>