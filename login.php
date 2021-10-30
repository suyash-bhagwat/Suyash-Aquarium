<?php
session_start();

?>
<html lang="en">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="CSS\product.css">
        <script src="login.js"></script>
    </head>
<body>
    <form action="login.php" method="post">
        <table  class ="login" align ="center" style="margin-top: 200px; " >
            <th colspan="2">LOGIN</th>
            <tr>
                <td>Username:</td><td><input id= "user-name" type="text" name="name" required="required" placeholder='Enter Name' onchange= "username();"></td>
            </tr>
            <tr>
                <td>Password:</td><td><input  id= "user-pass" type="password" name="password" required="required" placeholder='Password' onchange = "passvalidation();"></td>
            </tr>
            <tr>
                <td colspan= "2"><a href = "register.php"><b>Haven't registerd yet?? Just click here</b></a></td>
            </tr>
            <tr>
                <td id="login-data" colspan="2" align ="center"><input onclick = "clicked()" type="submit" name="submit" value="Login" ></td>
            </tr>
        </table>
</body>
</html>
<?php

    include('dbconnect.php');
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $password = $_POST['password'];

        $qry = "SELECT * FROM `register` WHERE `Name` = '$name' AND `Password` = '$password'";
        $run = mysqli_query($connect , $qry);

        $row = mysqli_num_rows($run);

        if($row<1)
        {
            ?>
            <script>
                 wrong();
            </script>
            <?php
        }
        else
        {
            $data = mysqli_fetch_assoc($run);
            $id = $data['ID'];
            $_SESSION['uid'] = $id;
            ?>
          <script>
                correct();
          </script>
            <?php

    }
    }

?>
