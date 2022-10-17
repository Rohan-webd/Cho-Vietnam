<?php 


include "Connection.php";

$Email="";

if(isset($_POST['Subscribe'])) {
   $Email=$_POST['email'];
    
}
 $Emailquery = " INSERT INTO `email`(`Email`) VALUES ('$Email')";

 $esr=mysqli_query($con, $Emailquery);


 if($esr){
	?>
	<script>
	  alert("Thank You for Subscribing");
	</script>
	<?php
  }
  else{
	?>
	<script>
	 
	</script>
	  <?php
  }
  
	
	



?>
<?php
if(isset($_POST['Subscribe'])) {
	
	// CHANGE THE TWO LINES BELOW
	$email_to = "hello@cho-vietnam.com";  
	// your email address for getting email
	
	function died($error) {
		// your error code can go here
		echo "We're sorry, but there's errors found with the form you submitted.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and try again.<br /><br />";
		die();
	}
	
	// validation expected data exists
	if(!isset($_POST['email'])) {
		died('We are sorry, but there appears to be a problem with the form you submitted.');		
	}
	
	$Email = $_POST['email']; // required	

	
		
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}

	$email_subject .= "New Subscription".clean_string($subject)."";
	
	
	$email_message .= "Email: ".clean_string($Email)."\n";	


	
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  

header("Location:https://cho-vietnam.com/");


?>







<?php
}
die();
?>