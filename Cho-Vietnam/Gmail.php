<?php 
include "Connection.php";
$name=$Date=$Time=$Guest=$Phone="";
$name = $_POST['Fullname']; // required	
$Date = $_POST['Date']; // required	
$Time = $_POST['Time']; // required
$Guests = $_POST['Guests']; // required
$Phone = $_POST['Phone']; // required

if(isset($_POST['Register'])) {


  if(empty($name)||empty($Date)||empty($Time)||empty($Guests)||empty($Phone)){

echo"Brooo????";


  }
  else{






	$Insertquery = " INSERT INTO `newbook`(`id`, `Name`, `Date`, `Time`, `Guest`, `Phone`) VALUES ('','$name','$Date','$Time','$Guests',' $Phone')";
	$res=mysqli_query($con,$Insertquery);
	if($res){
	   ?>
	   <script>
		 alert("Thank You for booking");
	   </script>
	   <?php
	 }
	 else{
	   ?>
	   <script>
   alert("No Booking");
	   </script>
		 <?php
	 }
  }
    
}

  
	
	



?>

<?php
if(isset($_POST['Register'])) {
	
	// CHANGE THE TWO LINES BELOW
	$email_to = "gofona5905@superyp.com";  
	// your email address for getting email
	
	function died($error) {
		// your error code can go here
		echo "We're sorry, but there's errors found with the form you submitted.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and try again.<br /><br />";
		die();
	}
	
	// validation expected data exists
	if(!isset($_POST['Fullname']) ||
		!isset($_POST['Date']) ||
		!isset($_POST['Time']) ||
		!isset($_POST['Guests']) ||
		!isset($_POST['Phone'])) {
		died('We are sorry, but there appears to be a problem with the form you submitted.');		
	}
	
	$name = $_POST['Fullname']; // required	
	$Date = $_POST['Date']; // required	
	$Time = $_POST['Time']; // required
	$Guest = $_POST['Guests']; // required
	$phone = $_POST['Phone']; // required
	
		
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}

	$email_subject .= "New Booking".clean_string($subject)."";
	
	
	$email_message .= "Name: ".clean_string($name)."\n";	
	$email_message .= "Date: ".clean_string($Date)."\n";
	$email_message .= "Time: ".clean_string($Time)."\n";
	$email_message .= "Guest: ".clean_string($Guest)."\n";
	$email_message .= "Contact: ".clean_string($phone)."\n";

	
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
$mail = @mail($email_to, $email_subject, $email_message, $headers);  
if($mail){

	?>
	<script> alert("Thank You For Booking");</script>
<?php
 
}
else{
	?>

	<script> alert("Error In sending ");</script>
	<?php
}

header("Location:Main.php");

?>







<?php
}
die();
?>
