<?php include_once ("../configure/userconfig.php"); ?>
<?php include_once ("../adminPanel/track.php");?>
<!--<?php include_once ("../adminPanel/data/visitor_data.php");?> -->
<?php include_once ("../adminPanel/uniquevisitor.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no ">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://www.google.com/recaptcha/api.js?render=6LdzslYaAAAAAAldNAJvUJu8PuotgGixXJlx5joK"></script>
    <!-- Bootstrap CSS -->
    <meta name="robots" content="index,follow">
    <!------------------------google-----Analytic---------------------------->
    <?php include_once("../foot_head/analytic.php");?>
           <!---Fonticons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/styles.min.css">
    <title>Document</title>
</head>
<body>
  <!-------------------footer-------------------------->
<?php include '../foot_head/header.php';?> 
    <style>
        .contact-body{
          height:100vh;
          background-color: rgb(206, 224, 224);
          font-family: 'Poppins', sans-serif;
          display:flex;
         align-items:center;
        }
        #concard{
            background:#fff;
            box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15);
            padding: 10px;
          
        }
        #concard h1{
            text-align:center;
            padding: 10px;
            color:crimson;
            font-weight:bold;
        }
        #concard textarea,
        #concard input{
          margin:15px;
          width:95%;
        }
        #error_message{
          width:95%;
  background: #f0bdbf;
  margin:15px;
    padding:5px;
    font-family: 'Poppins', sans-serif;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
  display:none;
  border:2px solid #fe8b8e;
  font-weight:600;
  color:red;
}
    </style>
       <!--------------------PHP-codes------------------------------------------->
       <?php
 if(isset($_POST["send"]))
 {
     $secretKey 	= '6LdzslYaAAAAAMWxOxZHOMJkRRA5zNWePNxu96tI';
     $response 		= $_POST["token"];
     $ip			= $_SERVER['REMOTE_ADDR'];
     
     $url = "https://www.google.com/recaptcha/api/siteverify";
     $data = array('secret' => $secretKey, 'response' => $response, 'remoteip'=> $ip);
  
     // use key 'http' even if you send the request to https://...
        $options = array('http' => array(
            'method'  => 'POST',
            'content' => http_build_query($data),
            'header' => 'Content-Type: application/x-www-form-urlencoded'
        )
       );
     $context  = stream_context_create($options);
     $result = file_get_contents($url, false, $context);
     $response = json_decode($result);

    if($response->success){
            $name = $_POST['name']; 
            $phone = $_POST['phone']; 
            $email = $_POST['email']; 
            $subject = $_POST['subject']; 
            $message = $_POST['message']; 
     
             $email_from = 'Sarkarijoboffer.in<support@sarkarijoboffer.in>';
     
             $email_subject = $subject;
     
             $email_body =  "User Name: $name .\n".
                            "User Phone Number: $phone.\n".
                            "User Email: $email.\n".
                            "Subject: $subject.\n".
                            "Message: $message.\n";
     
             $to = "support@sarkarijoboffer.in";
     
             $headers = "From: $email_from\r\n";
             $headers .= "Reply-To: $email\r\n";
             $headers .= "X-Priority: 1 (Highest)\n"; 
             $headers .= "X-MSMail-Priority: High\n"; 
             $headers .= "Importance: High\n";
     
             mail($to,$email_subject,$email_body,$headers);
     
             echo header("Location: navpage\contact.php");
          
    }else{
         echo '<script>alert ("Captcha Validation Failed..!")</script>';
     }
     
     
 }


?>
    <div class="contact-body">
        <div class="container">
            <div class="row">
                <div class="col-md-7 m-auto" id="concard">
                    <h1>Contact Us</h1>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" autocomplete="off" onsubmit = "return validate();">
                        <div class="form-row">
                          <div class="col m-auto">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Full name">
                          </div>
                          <div class="col">
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone number">
                          </div>
                          <div class="col">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email id">
                          </div>
                          <div class="col">
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                          </div>
                          <div class="col">
                            <textarea class="form-control" id="message" name="message" placeholder="Hey! what's up?...." rows="3"></textarea>
                          </div>
                          <div class="col">
                            <input type="hidden" id="g-token" name="token" />
                          </div>
                          <div class="col">
                          <div id="error_message"></div>
                          </div>
                          <div class="col">
                            <input id="sendbtn" class="btn btn-success" type="submit" name="send" value="Send">
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
  <!-------------------footer-------------------------->
<?php include '../foot_head/footer.php';?>
<!---------------SCRIPTS-------------------->
<script src="..\dist\js\index.js"></script>
    <script>
    function validate(){
  var name = document.getElementById("name").value;
  var subject = document.getElementById("subject").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(name.length < 5){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    error_message.style.display = 'block';
    return false;
  }
  if(subject.length < 10){
    text = "Please Enter Subject In More than 10 Characters";
    error_message.innerHTML = text;
    error_message.style.display = 'block';
    return false;
  }
  if(isNaN(phone) || phone.length != 10){
    text = "Please Enter Valid Phone Number";
    error_message.innerHTML = text;
    error_message.style.display = 'block';
    return false;
  }
  /*var mail;
   mail = document.getElementById("subemail").value;
  var regx =/^([a-zA-z0-9\._]+)@([a-a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/*/
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter Valid Email";
    error_message.innerHTML = text;
    error_message.style.display = 'block';
    return false;
  }
  if(message.length <= 10){
    text = "Please Enter Your Message In More Than 20 Characters";
    error_message.innerHTML = text;
    error_message.style.display = 'block';
    return false;
  }
  alert("Thanks For Contacting Us");
  return true;
}

    </script>
    <script>
setInterval(function () {  
grecaptcha.ready(function() {
    grecaptcha.execute('6LdzslYaAAAAAAldNAJvUJu8PuotgGixXJlx5joK', {action: 'homepage'}).then(function(token) {
		//console.log(token);
       document.getElementById("g-token").value = token;
    });
});
}, 30 * 1000);
  </script> 
</body>
</html>
