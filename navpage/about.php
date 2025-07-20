<?php include_once ("../configure/userconfig.php"); ?>
<?php include_once ("../adminPanel/track.php");?>
<!--<?php include_once ("../adminPanel/data/visitor_data.php");?> -->
<?php include_once("../adminPanel/uniquevisitor.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sarkarijoboffer  | About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SarkariJobOffer, sarkarijoboffer.in provides you all the latest official job, online form, admit card, government job such as SSSC CHSL, SSC CGL, SSC Stenographer, Railway, Banking, UPSC etc related updates.">
    <meta name="theme-color" content="rgb(22, 119, 158)"/>
    <meta name="robots" content="noindex,nofollow">
    <meta name="googlebot" content="noindex,nofollow">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/styles.min.css">
    <meta http-equiv="Cache-control" content="no-cache"/>
    <!------------------------google-----Analytic---------------------------->
    <?php include_once("../foot_head/analytic.php");?>
    <link rel="shortcut icon" type="image/gif" href="../Img/favicon.ico" >
    <meta name="language" content="english">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
<?php include_once("../foot_head/header.php"); ?> 
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

.abt-container{
    display:flex;
    flex-direction:column;
}
.abt-container .abtbox{
    display:flex;
    justify-content:center;
    padding:5px;
    height:200px;
    background: #c31432;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #240b36, #c31432);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #240b36, #c31432); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
.abt-container .abtbox h1{
    align-items:center;
    align-self:center;
    font-family: 'Robotto',sans-serif;
    color:#fff;
    font-weight:bold;

}
.paragraph{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-self:center;
    width:50%;
    margin:10px 50px;
    padding:10px;
    background:#fff;
    box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15);
    border-top-left-radius:50px;
    border-bottom-right-radius:50px;
}
.paragraph p{
    margin:10px;
    padding:5px;
    text-align:center;
    font-family: 'Poppins', sans-serif;
}
.paragraph p a{
    text-decoration:none;
}
.paragraph  h2{
    align-self:center;
text-align:center;
font-family: 'Poppins', sans-serif;
padding:10px;
color:#1a508b;
}
@media screen and (max-width:991px){
    .paragraph{
        width:95%;
    }  
}
@media screen and (max-width:786px){
    .paragraph{
        width:95%;
    }  
}
@media screen and (max-width:486px){
    .paragraph{
        width:99%;
    }  
}
@media screen and (max-width:320px){
    .abt-container .abtbox h1{
    font-size:15px;

}
    .paragraph p{
    font-size:15px;
    width:98%;
} 
}
</style>
<!-----main-body-abt-container--->
 <div class="main-body">
    <div class="abt-container">
        <div class="abtbox">
        <h1>Sarkari Job Offer<h1>
        </div>
            <div class="paragraph">
            <h2>ABOUT US</h2>
            <p><a href="https://sarkarijoboffer.in/">sarkarijoboffer</a> gives latest governemnt job updates. You will get career guide, admit card, latest job, result, 
            scolarship, admission related updates. You can subscribe to the newsletter and get quick updates to your mail.</p>

            <h2>SUBSCRIBE</h2>
            <p><a href="https://sarkarijoboffer.in/">Subscribe</a> to our newsletter to get all the instant updates to your mail.Your data will be safe. Read our  <a href="https://sarkarijoboffer.in/navpage/privacy">Privacy Policy</a>.</p>
            </div>
    </div>
 </div>
<!-----------------footer------------------>
<?php include("../foot_head/footer.php"); ?>
</body>
</html>
