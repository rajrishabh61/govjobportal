<?php include_once ("../configure/userconfig.php"); ?>
<?php include_once ("../adminPanel/track.php");?>
<!--<?php include_once ("../adminPanel/data/visitor_data.php");?> -->
<?php include_once("../adminPanel/uniquevisitor.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Sarkarijoboffer | Disclaimer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="rgb(22, 119, 158)"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/styles.min.css">
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="Cache-control" content="no-cache"/>
   <link rel="shortcut icon" type="image/gif" href="../Img/favicon.ico" >
    <meta name="language" content="english">
    <!------------------------google-----Analytic---------------------------->
    <?php include_once("../foot_head/analytic.php");?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
<?php include("../foot_head/header.php"); ?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

.hgfhg{
    display:flex;
    flex-direction:column;
}
.hgfhg .hjdkh{
    display:flex;
    justify-content:center;
    padding:5px;
height:300px;
background-color: #2a2a72;
background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);
}
.hgfhg .hjdkh h1{
    align-items:center;
    align-self:center;
    font-family: 'Robotto',sans-serif;
    color:#fff;
    font-weight:bold;
    font-size:50px;
}
.diclaim-container{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-self:center;
    width:70%;
    margin:25px 50px;
    padding:10px;
    background:#fff;
    box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15);
    border-radius:4px;
}
.diclaim-container  h2{
    align-self:center;
text-align:center;
font-family: 'Poppins', sans-serif;
padding:10px;
color:#1a508b;
}
.diclaim-container p{
    margin:10px;
    padding:5px;
    text-align:justify;
    font-family: 'Poppins', sans-serif;
}


@media screen and (max-width:991px){
    ..diclaim-container{
        width:95%;
    }  
}
@media screen and (max-width:786px){
    .diclaim-container{
        width:95%;
    }  
}
@media screen and (max-width:486px){
    .diclaim-container{
        width:99%;
    }  
    .hgfhg .hjdkh{
height:280px;
}
}
@media screen and (max-width:320px){
    .hgfhg .hjdkh h1{
    font-size:15px;

}
.hgfhg .hjdkh{
height:280px;
}
.diclaim-container p{
    font-size:15px;
    width:98%;
} 
}
</style>  
    <!-----main-body-abt-container--->
<div class="main-body">
<div class="hgfhg">
    <div class="hjdkh">
    <h1>Disclaimer</h1>
    </div>
    <div class="diclaim-container">
        <div class="disclaimer">
            <h2>Disclaimer</h2>
            <p><b>The content uploaded on this website is only to provide immediate information to the examinees and we are non-government websites and collect information from various sources. Although all efforts have been made to make the website authentic and valuable, we are not responsible for the any error in result score or lack of any information.</b>The content uploaded on sarkarijoboffer.in is only for the general information purpose.All the links given on this website is only to provide instant information to the examinees.
            </p>
            <p>
                Sarkarijoboffer.in does all the efforts to make the uploaded information correct on this website. But there is any error found on this website, lack of complete information then sarkarijoboffer.in is not responsible for this.
            </p>
        </div>
    </div>
</div>
</div>
<!-----------------footer------------------>
<?php include("../foot_head/footer.php"); ?>
</body>
</html>
