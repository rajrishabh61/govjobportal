</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .modal-body{
        background-color: #fff;
        width: 100%;
        padding: 33px;
        border-radius: 5px;
        box-shadow: 0px 10px 15px rgba(0,0,0,0.1);
        font-family:'Poppins',sans-serif;
    }
    .modal-body .icon{
   
  height: 110px;
  width: 110px;
  background:#674CC4;
  line-height: 110px;
  border-radius: 50%;
  color: #fff;
  font-size: 55px;
 
}


.content{
  margin: 20px 0;
}
.content h2{
  font-size: 30px;
  font-weight: 600;
  text-align: center;
}
.content p{
  color: #333;
  font-size: 16px;
  font-weight: 400;
  margin-left: -3px;
  text-align: center;
}
form{

  width: 98%;
}
form .field{
  height: 45px;
  width: 100%;
  margin-bottom: 12px;
}
form .field input{
  width: 100%;
  height: 100%;
  border-radius: 5px;
  border: 3px solid #ccc;
  padding: 0 15px;
  outline: none;
  font-size: 17px;
  transition: all 0.3s ease;
}
form .field input:focus{
  border-color: #66afe9;
  box-shadow: 0 0 8px #719ECE;
}
form .btn{
  height: 47px;
  width: 100%;
  position: relative;
  overflow: hidden;
  border-radius: 5px;
}
form .btn .layer{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: #674CC4 ;
  transition: all 0.4s ease;
}
form .btn:hover .layer{
  left: 0;
}
form .btn button{
  z-index: 1;
  position: relative;
  background: none;
  padding: 5px;
  color: #fff;
  border: 0px;
  padding: 0px!important;
  outline: none;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  height: 100%;
  width: 100%;
margin-top: 1px;
}
 .text{
  margin-top: 5px;
  padding: 5px;
  font-size: 0.9rem;
}
 .text a{
  text-decoration: none;
  text-align: center;
}
.alert{
  margin: -9px 0 12px 0;
  padding: 10px;
  border-radius: 5px;
}
.success-alert{
  color: #155724;
  background: #d4edda;
  border: 1px solid #c3e6cb;
  text-align:center;
}
.error-alert{
  color: #721c24;
  background: #f8d7da;
  border: 1px solid #f5c6cb;
  text-align:center;
}
#close{
    background-color: rgba(0,0,0,0.9);
    color: #fff;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    text-align: center;
    padding-bottom: 1px;
}
</style>
<body>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class=" modal-content">
               <!------->
            <div class="modal-body">
                <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <div class="icon m-auto"><lord-icon
                    src="https://cdn.lordicon.com/rhvddzym.json"
                    trigger="loop"
                    colors="primary:#ffffff,secondary:#ffffff"
                    stroke="56"
                    scale="49"
                    style="width:110px;height:110px">
                </lord-icon></div>
            <div class="content">
                <h2>Newsletter</h2>
                <p>Subscribe to get the latest updates straight to your inbox.</p>     
            </div>
             <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
            <div class="field">
                <input type="text" class="email" name="email" id="email" autocomplete="on" placeholder="Email Address" required validate>
              </div>
              <?php
    if(isset($_POST['subscribe'])){
    
      $email = mysqli_real_escape_string($conn2, $_POST['email']);
    
    
    //Email
    $query_email = "SELECT * FROM emailsubs WHERE email ='$email' ";
    
    $result_email = $conn2->query($query_email);
    
    $client_email = $result_email->fetch_array();
    

    
    
    if($client_email){
    
      echo  '<div class="alert error-alert" >Email already exist.</div>';
    
    }
    else 
    { 
date_default_timezone_set('Asia/Kolkata');
$newsletter_datetime = date("Y-m-d H:i:s");

    ///$sql = "INSERT INTO emailsubs (`id`,`email`,`newsletter_datetime`) VALUES (NULL,'$email','$newsletter_datetime')";
$sql = $conn2->prepare("INSERT INTO emailsubs (id, email,newsletter_datetime) VALUES (?,?,?)");
$sql->bind_param("iss",$id, $email,$newsletter_datetime);
$sql->execute();
$sql->close(); 

    
   if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        
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
$headers = "Organization: Sender Organization\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: Sarkarijoboffer.in<support@sarkarijoboffer.in>" . "\r\n" . "Reply-To: support@sarkarijoboffer.in" . "\r\n" . "X-Mailer: PHP/" . phpversion();


if(mail($email, $subject, $message, $headers)){
          ?>
           <!-- show sucess message once email send successfully -->
          <div class="alert success-alert">
            <?php echo "Thanks for Subscribing us." ?>
          </div>
          <?php
          $userEmail = "";
        }else{
          ?>
          <!-- show error message if somehow mail can't be sent -->
          <div class="alert error-alert">
          <?php echo "Failed while sending your mail!" ?>
          </div>
          <?php
        } 
   }else{
        ?>
        <!-- show error message if user entered email is not valid -->
        <div class="alert error-alert">
          <?php echo "$userEmail is not a valid email address!" ?>
        </div>
        <?php
      }  


 }
}
?>
              <div class="field btn">
                <div class="layer"></div>
                <button type="submit" name="subscribe">Subscribe</button>
              </div>
            </form>
            <div class="text">We do not share your information. Read our<a href="https://sarkarijoboffer.in/privacy">&nbsp;Privacy Policy</a></div>
          </div>
        </div>
            </div>
            <!------->
          </div>
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
$('#exampleModal').modal({
    backdrop: 'static',
    keyboard: false  // to prevent closing with Esc button (if you want this too)
})
    $(document).ready(function(){
        if(document.cookie.indexOf('modal_shown') >=0){
            //do nothing
        }
        else{
            $('#exampleModal').modal('show');
        document.cookie="modal_shown=seen";
        }
    });
</script>
</body>
</html>
