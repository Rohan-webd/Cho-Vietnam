<?php 



$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,' bookings_local');

if($con){

}

else{
    echo "Connection NOt SUCCESS";
}







?>