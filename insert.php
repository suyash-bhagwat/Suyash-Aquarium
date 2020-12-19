<?php
    include('dbconnect.php');
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $pnumber = $_POST['p_number'];


    $query = "INSERT INTO `register`(`Name`, `Email`, `Password`, `Address`, `Phone_number`) VALUES ('$name','$email','$password','$address','$pnumber')";
    
    $run = mysqli_query($connect, $query);
    
    if ($run == TRUE)
    ?>           
    <script>
         alert('You have registered in successfully!!!');
    </script>    
     <?php
     header('location:login.php');
?>                                                                    