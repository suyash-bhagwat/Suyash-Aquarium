<html>
<head>
    <script>
        function goBack() 
            {
                window.history.back();
            }
    </script>
</head>
<?php
session_start();
if(isset($_SESSION['uid'])){
$userid = $_SESSION['uid'];
include('dbconnect.php');
$id = $_GET['id'];
$qry="SELECT * FROM `sale items` WHERE `Sr_No`= $id";
$run = mysqli_query($connect , $qry);
    if ($run ==  TRUE)
    { 
        while($data = mysqli_fetch_assoc($run))
        { 
            $name = $data['Name'];
            $img = $data['image'];
            $price = $data['Price'];
            $query = "INSERT INTO `cart`(`uid`,`Image`, `Name`, `Price`) VALUES ('$userid','$img','$name','$price')";
            $runn = mysqli_query($connect, $query);
            if($runn == TRUE){ ?>
                <script>
                            alert("Item has been added to cart");
                            goBack()
                </script>
            <?php
            }
            else{ ?>
                <script>
                            alert("Error in uploading");
                </script>
                <?php
            }
        }
    }   
}
else{?>
    <script>
                alert("Please log in first");
                window.open('login.php', '_self');
    </script>
<?php
}
?>
</html>