<?php

include 'Connection.php';

$id= $_GET['id'];

$q="DELETE FROM `newbook` WHERE id=$id";

mysqli_query($con,$q);


header("Location:Admin-panel.php");










?>