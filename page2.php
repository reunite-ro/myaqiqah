
<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "askmyaqiqah@gmail.com";
 
    $email_subject = "Order For MyAqiqah.com";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['jantina']) ||
        !isset($_POST['pakej']) ||
        !isset($_POST['name']) ||
 	 !isset($_POST['email']) ||
        !isset($_POST['tel']) ||
	 !isset($_POST['address']) ||
	 !isset($_POST['postcode']) ||
	 !isset($_POST['state']) ||
        !isset($_POST['date'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
   		
   
  
 
    $jantina = $_POST['jantina']; // required
 
    $pakej = $_POST['pakej']; // required
 
    $email = $_POST['email']; // $email_from = $_POST['email']; // required
 
    $name = $_POST['name']; // not required
    $tel = $_POST['tel']; // required
$address = $_POST['address']; // required
$postcode = $_POST['postcode']; // required
$state = $_POST['state']; // required
$date = $_POST['date']; // required
$email_from= "helpmyaqiqah@gmail.com";
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
 
  }
 
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Jantina: ".clean_string($jantina)."\n";
 
    $email_message .= "Pakej: ".clean_string($pakej)."\n";
    
  
if($jantina == "perempuan" || $pakej=="kuzi")
    {
    $price="RM1100";
    }
    if($jantina == "perempuan" && $pakej=="bakar")
    {
    $price="RM1300";
    }
    if($jantina == "perempuan" && $pakej=="daging")
    {
    $price="RM850";
    }
    if($jantina == "lelaki" && $pakej=="kuzi")
    {
    $price="RM2200";
    }
    if($jantina == "lelaki" && $pakej=="bakar")
    {
    $price="RM2600";
    }
    if($jantina == "lelaki" && $pakej=="daging")
    {
    $price="RM1700";
    }
    $email_message .= "Harga: ".clean_string($price)."\n";
    $email_message .= "Name: ".clean_string($name)."\n";

    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Telefon: ".clean_string($tel)."\n";
 
    $email_message .= "Address: ".clean_string($address)."\n";
	
	$email_message .= "Postcode: ".clean_string($postcode)."\n";

	$email_message .= "State: ".clean_string($state)."\n";

	$email_message .= "Date: ".clean_string($date)."\n";


  
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n". //same as below
 
'Reply-To: '.$email_from."\r\n" . //\r\n
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting us. We will be in touch with you very soon.
 

 
<?php
$con = mysql_connect("127.0.0.1","ffxjdnzjmr","tVre7xT9K9");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ffxjdnzjmr", $con);

$sql="INSERT INTO product (jantina, pakej, email, name, tel, address, postcode, state, date)
VALUES
('$_POST[jantina]','$_POST[pakej]','$_POST[email]','$_POST[name]','$_POST[tel]','$_POST[address]','$_POST[postcode]','$_POST[state]','$_POST[date]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);
 header( "refresh:3;url=index.php" );
}
 
?>