<html>
<?php  
    session_start();
    $d=strtotime("+ 2 days");
    $id = $_SESSION['uid'];  
    $name = $_SESSION['username'];
?>
    
<?php
    include('dbconnect.php');

    $query = "SELECT * FROM `cart` WHERE `uid` = $id";
    $run = mysqli_query($connect, $query);
    if($run == TRUE){
        while($data = mysqli_fetch_assoc($run)){
            $img = $data['Image'];
            $nm = $data['Name'];
            $prc = $data['Price'];

        $qu = "INSERT INTO `order`(`uid`, `Image`, `Name`, `Price`, `Quantity`) VALUES ('$id' , '$img' , '$nm' , '$prc' , '1')";
        $rr = mysqli_query($connect, $qu);
        }
    }
    $query2 = "SELECT * FROM `register` WHERE `ID` = $id";
    $run2 = mysqli_query($connect, $query2);
    if($run2 == TRUE){
        while ($data1 = mysqli_fetch_assoc($run2)) {
            $emailid = $data1['Email'];
            $to_mail = $emailid;
            $sub = "Thank You for purchase";
        $body = "You have received this mail from Suyash Aquarium Ratnagiri. \nYour ordered item/s is/are:" ;
            $query3 =  "SELECT * FROM `order` WHERE `uid` = $id";
            $run3 = mysqli_query($connect, $query3); 
            while($data = mysqli_fetch_assoc($run3)){
                $name1 = $data['Name'];
                $price = $data['Price'];
                $Quantity = $data['Quantity'];
                $body .= "\nName: " . $name1 . "\nPrice: " . $price . "\nQuantity: " . $Quantity ;
            }
        $body .= "\nTotal amount to be paid :" . $_SESSION['total'] . "\nAddress : Your order will be delivered at:   " . $data1['Address'] . " on " . date("d-m-Y", $d) . " \nStay Home, Stay Safe. \nThank You for trusting us......";
        $headers = "From: suyashaquariumratnagiri@gmail.com";
        mail($to_mail, $sub, $body, $headers);
    }
}
    $q = "DELETE FROM `cart` WHERE `uid` = $id";
    $r = mysqli_query($connect, $q);
    if($r == TRUE){
        ?>
        <script>
        alert("Dear <?php echo $name; ?>\nThank you for purchasing.\nYour order will be delivered by <?php echo date("d-m-Y", $d) ?>\nPlease always wear a mask during collection of your order ");
        window.open('store.php','_self');
    </script>
    <?php
    }
?>
</html>
