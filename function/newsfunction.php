<?php
// include_once("../../adminpage/adminsubpages/header.php");
?>

<?php
    if(isset($_POST['send'])){
    
      $email = mysqli_real_escape_string($conn2, $_POST['email']);
    
    
    //Email
    $query_email = "SELECT * FROM emailsubs WHERE email ='$email' ";
    
    $result_email = $conn2->query($query_email);
    
    $client_email = $result_email->fetch_array();
    

    
    
    if($client_email){
    
      $msg = '<span id="sunberror" >'.$email.' already exist.</span>';
    
    }
    else 
    { 
date_default_timezone_set('Asia/Kolkata');
$newsletter_datetime = date("Y-m-d H:i:s");


$sql = $conn2->prepare("INSERT INTO emailsubs (id, email,newsletter_datetime) VALUES (?,?,?)");
$sql->bind_param("iss",$id, $email,$newsletter_datetime);
$sql->execute();
$sql->close(); 
  

    $msg = '<span id="sunbthank">
    Thanks for subscribing, We`ll update you.</span>';
    
    


$to      = $email; // Send email to our user
$subject = 'Thanks for subscribing the newsletter'; //  email a subject 

$message = '
<html>
<body>

<div style="background-color:#f1f6f9;padding:5px;">
<div style="margin:10px;background-color:#fff;box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15);">
<div  style="padding:5px;text-align:center;background-color:crimson;">
 <a href="https://sarkarijoboffer.in/"><img src="https://sarkarijoboffer.in/Img/logowhite.png" style="text-align:center;align-self:center;width: 100px;height: 35px;margin: 5px 15px;"></a></div>
 <h2 style="text-align:center;align-self:center;font-family: sans-serif;color:rgb(22, 119, 158);" >Thanks for Subscribing Newsletter!</h2>
<h3 style="margin:5px 10px;padding:10px;text-align:center;font-family:sans-serif;color: rgb(5, 31, 48);font-weight:600;">Your Email Id: '.$email.'</h3>
<p style="margin:5px 10px;padding:10px;text-align:center;align-self:center;font-family:sans-serif;color: rgb(5, 31, 48);">We will keep you updated about Latest Job, Admit Card, Result.</p>
<div style="padding:10px;background-color: rgb(5, 31, 48);">

<div  style="text-align:center;padding:10px;color:#fff;">
<a href="https://sarkarijoboffer.in/privacy" style="margin:2px 2px;padding:2px 0px;font-size:10px;text-decoration:none;align-items:center;align-self:center;color:white;font-family: sans-serif;">Privacy Policy </a>
<a href="https://sarkarijoboffer.in/terms" style="margin:2px 2px;padding:2px 0px;font-size:10px;text-decoration:none;align-items:center;align-self:center;color:white;font-family: sans-serif;">Terms & Conditions </a>
<a href="https://sarkarijoboffer.in/contact" style="margin:2px 2px;padding:2px 0px;font-size:10px;text-decoration:none;align-items:center;align-self:center;color:white;font-family: sans-serif;">Contact Us</a>
</div>

<div style="text-align:center;padding:10px;">
<a style="color:#fff;text-decoration:none;text-align:center;align-items:center;align-self:center;font-family:sans-serif;" href="https://sarkarijoboffer.in/">www.sarkarijoboffer.in</a>
</div>

</div>
</div>
</div>

</body>
</html>
  
'; // Our message above including the link

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "X-Priority: 1 (Highest)\r\n"; 
$headers .= "X-MSMail-Priority: High\r\n"; 
$headers .= "Importance: High\r\n";
$headers .= "From: Sarkarijoboffer.in<support@sarkarijoboffer.in>" . "\r\n" . "Reply-To: support@sarkarijoboffer.in" . "\r\n" . "X-Mailer: PHP/" . phpversion();


mail($to, $subject, $message, $headers); // Send our email
 }
}
?>
