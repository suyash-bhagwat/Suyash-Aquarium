<html>
<?php  
    $date = $_GET['date'];
    $name = $_GET['name'];
    $id = $_GET['id']
?>
    
<?php
    include('dbconnect.php');
    $q = "DELETE FROM `cart` WHERE `uid` = $id";
    $r = mysqli_query($connect, $q);
    if($r == TRUE){
        ?>
        <script>
        alert("Dear <?php echo $name; ?>\nThank you for buying\nYour order will be ready by <?php echo $date ?>\nPlease always carry a mask during collection of your order ")
        window.open('store.php','_self')
    </script>
    <?php
    }
?>
</html>