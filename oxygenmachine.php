<html>
<head>
<link rel="stylesheet" href="CSS\Product.css">
    <title>
    Oxygen Machines
    </title>
</head>
<body>
<?php
    include('dbconnect.php');
    $qry="SELECT * FROM `sale items` WHERE `Category`=5";
    $run = mysqli_query($connect , $qry);
    if ($run ==  TRUE)
    {  ?>
       <p>  <h1>Available Oxygen Machines</h1>
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
               <td><button>ADD to Cart</button></td>
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
    
    </body>