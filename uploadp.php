<?php
    include('dbconnect.php');
    $category = $_POST['category'];
    $code = $_POST['code'];
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $imagename = $_FILES['pimage']['name'];
    $temp = $_FILES['pimage']['tmp_name'];

    move_uploaded_file($temp,"Product Images/$imagename");

    $query = "INSERT INTO `sale items`(`Category`, `Item_code`, `Name`, `AvailQuantity`, `Price`, `image`) VALUES ('$category','$code','$name','$quantity','$price','$imagename')";
    
    $run = mysqli_query($connect, $query);
    
    if($run == TRUE){
    ?>           
    <script>
         alert("Data inserted successfully!!!");
         window.open('store.php', '_self');
</script>
<?php
    }
?>