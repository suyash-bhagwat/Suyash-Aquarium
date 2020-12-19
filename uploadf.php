<?php
    include('dbconnect.php');
    
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    
    


    $query = "INSERT INTO `fish`(`Name`, `AvailQuantity`, `Price`) VALUES ('$name','$quantity','$price')";
    
    $run = mysqli_query($connect, $query);
    
    if ($run == TRUE)
    ?>           
    <script>
         alert('Data inserted successfully!!!');
         window.open('store.php', '_self');
</script>
