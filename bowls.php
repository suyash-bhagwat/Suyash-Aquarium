<html>
<head>
<link rel="stylesheet" href="CSS\Product.css">
    <title>
    Available Bowls
    </title>
</head>
<body>
<?php
        include("header.php");
        ?>
<?php
    include('dbconnect.php');
    $qry="SELECT * FROM `sale items` WHERE `Category`=3";
    $run = mysqli_query($connect , $qry);
    if ($run == TRUE)
    {  ?>
       <p>  <h1>Available Bowls</h1>
       </p> 
       <table style="width: 50%;" align ="center" class="table1"> 
           <tr>
               <th>Code</th>
               <th>Name</th>
               <th>Available Quantity</th>
               <th>Price</th>
               <th></th>
               <th></th>
           </tr>
       <?php
       while($data = mysqli_fetch_assoc($run)){
           ?>
           <tr>
               <td><?php echo $data['Item_code']?></td>
               <td><?php echo $data['Name'] ?></td>
               <td><?php echo $data['AvailQuantity']?></td>
               <td>&#8377 <?php echo $data['Price']?></td>
               <td><a href='Template.php?id=<?php echo $data['Sr_No'] ?>'><button>More Info</button></a></td>
               <td><a href="AddtoCart.php?id=<?php echo $data['Sr_No'] ?>"><button>ADD to Cart</button></a></td>
           </tr>
           <?php
       }
       ?></table>
      <?php
    }
    else
    {
        echo "Something went Wrong";
    }
    

    ?>
    <script>
    let s = [];
    let all = [];
    let count = 0;
    function test(id){
    <?php if(isset($_SESSION['uid'])){
    ?>

    var all = JSON.parse(localStorage.getItem("cart"));
    console.log(all);
    if(all == null) { all = []; }
    s.push(id) ;
    alert('Added to cart successfully...........');
    let s1 = JSON.stringify(s);
    localStorage.setItem("xd",s1);

    all.push(s[count]);
    localStorage.setItem("cart", JSON.stringify(all));
    console.log(all);
    count = count + 1;
    <?php 
    }
    else{?>
        alert("Please log in first and then add item to the cart");
        window.open('login.php', '_self');
        <?php 

    }
?>
}
    

    
    </script>

    </body>