

<?php

session_start();
if(!$_SESSION['Username']){

    header("Location: Admin-login.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="css/Admin-panel.css?version=9">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500&family=Open+Sans&family=Roboto:wght@900&display=swap" rel="stylesheet">
</head>
<body>

<div class="admin-head">

<div class="logo">
</div>

<h1>

<?php echo $_SESSION['Username']; ?>
</h1>

<button> <a href="Logout.php"> Logout</a> </button>
</div>






   <div class="main-table">
  <h1>BOOKING</h1>

  <div class="table-div">

<table class="table-cont">
    <thead>

    <tr>


    <th>Name</th>
    <th>Date</th>
    <th>Time</th>
    <th>Guests</th>
    <th>Phone</th>
    <th>Operation</th>
    </tr>
    </thead>

    <tbody>
    <?php 


include "Connection.php";

$select = " SELECT * FROM `newbook`";

$query = mysqli_query($con,$select);

$num = mysqli_num_rows($query);




while($res = mysqli_fetch_array($query)){
    ?>
    <tr>

    <td><?php echo $res['Name'] ?></td>
    <td><?php echo $res['Date'] ?></td>
    <td><?php echo $res['Time'] ?></td>
    <td><?php echo $res['Guest'] ?></td>
    <td><?php echo $res['Phone'] ?></td>
    
    
    <td><a href="delete.php?id=<?php echo $res['id'];?>"><i class="far fa-trash-alt fa-2x"></i></a> </td>
  
    </tr>

 <?php 
}


?>


    </tbody>
</table>

</div>

  </div>





   <script>


        setTimeout(() => {

            location.reload()
           
        }, 5000);
   </script>
</body>
</html>