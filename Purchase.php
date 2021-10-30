<html>
    <head>
        <link rel="stylesheet" href="CSS\Purchase.css">
    </head>
    <body>
<?php 
session_start();
include('dbconnect.php');

if(isset($_SESSION['uid'])){
    $id = $_SESSION['uid'];
    $qry="SELECT * FROM `register` WHERE `ID`=$id";
    $r = mysqli_query($connect, $qry);
    $total = $_SESSION['total'] ;
     $d=strtotime("+ 2 days");
    if ($r ==  TRUE)
        {while($data = mysqli_fetch_assoc($r)){  
            $_SESSION['username'] = $data['Name']; 
    ?><div class="total">
    <h1>
        Please Confirm the details:</h1>
        <p>
        <b>Name: </b><?php echo $data['Name'] ?> <br>
        <b>Email id: </b><?php echo $data['Email'] ?><br>
        <b>Address: </b><?php echo $data['Address']?><br>
        <b>Phone Number: </b><?php echo $data['Phone_number']?><br>
        <b>Total Amount: &#8377</b> <?php echo $total ?><br>
        </p>
        <h2>
        Your order will be ready by <?php echo date("d-m-Y", $d)?>
        </h2>
        </div>
        <button class="btn btn-primary btn-purchase" ><a href="confirm.php">Confirm</button></a>
        
<?php
}
}
}
?>
</body>
</html>