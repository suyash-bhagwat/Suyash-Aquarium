<?php


?>
<html lang="en">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="CSS\Product.css">
        <script src= "validate.js"></script>
    </head>
    <body>
    <?php
        include("header.php");
        ?>
    <form action="insert.php" method="post" class="register-form">
        <table class="register" align ="center" style="margin-top: 120px;" name="form">
            <th colspan="2">REGISTRATION</th>
            <tr>
                <td>Username:</td><td><input id="uname" class="register-form--uname" type="text" name="name" required="required" placeholder='Enter Name'></td>
            </tr>
            <tr>
                <td>Email:</td><td><input id="email" class="register-form--email" type="text" name="email" required="required" placeholder='Enter Email'></td>
            </tr>
            <tr>
                <td>Password:</td><td><input id="pass" class="register-form--pass" type="password" name="password" required="required" placeholder='Password'></td>
            </tr>
            <tr>
                <td>Address:</td><td><input id="addr" class="register-form--addr" type="text" name="address" required="required" placeholder='Enter Address'></td>
            </tr>
            <tr>
                <td>Phone Number:</td><td><input id="phone" class="register-form--phone" type="number" name="p_number" required="required" placeholder='Enter Phone number'></td>
            </tr>
            <tr>
                <td colspan="2" align ="center"><input type="submit" name="submit" value="Create Account" onclick="formValidation()"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php


?>