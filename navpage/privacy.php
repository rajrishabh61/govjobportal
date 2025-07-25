<?php include_once ("../configure/userconfig.php"); ?>
<?php include_once ("../adminPanel/track.php");?>
<!--<?php include_once ("../adminPanel/data/visitor_data.php");?> -->
<?php include_once("../adminPanel/uniquevisitor.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sarkarijoboffer | Privacy Policy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="rgb(22, 119, 158)"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/styles.min.css">
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="Cache-control" content="no-cache"/>
    <!------------------------google-----Analytic---------------------------->
    <?php include_once("../foot_head/analytic.php");?>
    <link rel="shortcut icon" type="image/gif" href="../Img/favicon.ico" >
    <meta name="language" content="english">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

</head>
<body>
<?php include("../foot_head/header.php"); ?> 
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
.abt-container{
    display:flex;
    flex-direction:column;
    background:#fff;
}
.mto{
    text-decoration: underline;
}
.paragraph1{
    display:block;
    flex-wrap:wrap;
    overflow-wrap: break-word;
-ms-word-wrap: break-word;
word-wrap: break-word;
-ms-hyphens: auto; 
vertical-align: baseline;
    padding:10px;
    margin:50px;

}
.paragraph1 h1{
    font-family:'Poppins',sans-serif;
    font-weight:700;
    font-size:2.1rem;
    margin:5px;
}
.paragraph1 .p1{
    font-family:'Poppins',sans-serif;
    font-size:1.4rem;
    padding:5px 0px;
    letter-spacing:1px;
    vertical-align: baseline;
    white-space: pre-wrap;
 
}
.paragraph1 h2{
    font-family: 'Poppins', sans-serif;
    font-weight:25px;
    margin:10px 20px;
    font-size:1.4rem;
}
.paragraph1 p{
    font-family:'Poppins',sans-serif;
    padding:2px 0px;
    margin:0px 20px;
    letter-spacing:1px;
    white-space: pre-wrap;
 
}
.paragraph1 ul{
    margin:0px 45px;
    font-family:'Poppins',sans-serif;
    letter-spacing:1px;
}
@media screen and (max-width:991px){
    .paragraph1{
    padding:10px;
    margin:50px;
}
.paragraph1 h1{
    font-weight:700;
    font-size:2.1rem;
}
.paragraph1 .p1{
    font-size:1.4rem;
    padding:5px 0px;
    letter-spacing:1px;
  
}
.paragraph1 h2{
    font-weight:25px;
    margin:10px 20px;
    font-size:1.4rem;
}
.paragraph1 p{
    font-family:'Poppins',sans-serif;
    padding:2px 0px;
    margin:0px 20px;
    letter-spacing:1px;
  
}
.paragraph1 ul{
    margin:0px 45px;
    font-family:'Poppins',sans-serif;
    letter-spacing:1px;
} 
.paragraph1 .mto{
    color:#000;
    text-decoration:none;
}
.paragraph1 .mto:hover{
    color:rgb(22, 119, 158);
}  
}
@media screen and (max-width:786px){
    .paragraph1{
    padding:10px;
    margin:25px 0px;
}
.paragraph1 h1{
    font-weight:700;
    font-size:2rem;
}
.paragraph1 .p1{
    font-size:1.1rem;
    padding:5px 0px;
    letter-spacing:1px;
}
.paragraph1 h2{
    font-weight:25px;
    margin:10px 20px;
    font-size:1.2rem;
}
.paragraph1 p{
    font-family:'Poppins',sans-serif;
    padding:2px 0px;
    margin:0px 20px;
    letter-spacing:1px;
}
.paragraph1 ul{
    margin:0px 45px;
    font-family:'Poppins',sans-serif;
    letter-spacing:1px;
}   
}
@media screen and (max-width:486px){
    .paragraph1{
    padding:10px;
    margin:0px 2px;
}
.paragraph1 h1{
    font-weight:700;
    font-size:1.5rem;
}
.paragraph1 .p1{
    font-size:1rem;
    padding:0px;
    letter-spacing:1px;
    margin:10px 0;
}
.paragraph1 h2{
    font-weight:25px;
    margin:10px 0px;
    font-size:1rem;
}
.paragraph1 p{
    font-family:'Poppins',sans-serif;
    padding:2px 0px;
    margin:0px;
    letter-spacing:1px;
}
.paragraph1 ul{
    margin:0px 12px;
    font-family:'Poppins',sans-serif;
    letter-spacing:1px;
    font-size:15px;
}   
}
@media screen and (max-width:321px){
    .paragraph1{
    padding:10px;
    margin:0px 2px;
}
.paragraph1 h1{
    font-weight:700;
    font-size:1.5rem;
}
.paragraph1 .p1{
    font-size:1rem;
    padding:0px;
    letter-spacing:1px;
    margin:10px 0;
}
.paragraph1 h2{
    font-weight:25px;
    margin:10px 0px;
    font-size:1rem;
}
.paragraph1 p{
    font-family:'Poppins',sans-serif;
    padding:2px 0px;
    margin:0px;
    letter-spacing:1px;
}
.paragraph1 ul{
    margin:0px 12px;
    font-family:'Poppins',sans-serif;
    letter-spacing:1px;
    font-size:15px;
}   
}
</style>
<!-----main-body-abt-container--->
  <div class="abt-container">
  <div class="paragraph1">
 
  <h1>PRIVACY POLICY</h1>

<span class="p1">At Sarkari Job Offer, accessible from https://sarkarijoboffer.in/, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Sarkari Job Offer and how we use it.</span>

<span class="p1">If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</span>

<span class="p1">This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Sarkari Job Offer. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href="https://www.privacypolicyonline.com/privacy-policy-generator/">Free Privacy Policy Generator</a>.</span>

<h2>CONSENT</h2>

<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>

<h2>INFORMATION WE COLLECT</h2>

<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>

<h2>HOW WE USE YOUR INFORMATION</h2>

<p>We use the information we collect in various ways, including to:</p>

<ul>
<li>Provide, operate, and maintain our webste</li>
<li>Improve, personalize, and expand our webste</li>
<li>Understand and analyze how you use our webste</li>
<li>Develop new products, services, features, and functionality</li>
<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the webste, and for marketing and promotional purposes</li>
<li>Send you emails</li>
<li>Find and prevent fraud</li>
</ul>

<h2>LOG FILES</h2>

<p>Sarkari Job Offer follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>

<h2>COOKIES AND WEB BEACONS</h2>

<p>Like any other website, Sarkari Job Offer uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>

<p>For more general information on cookies, please read <a href="https://www.cookieconsent.com/what-are-cookies/">"What Are Cookies" from Cookie Consent</a>.</p>

<h2>GOGLE DOUBLECLICK DART COOKIE</h2>

<p>Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to www.website.com and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL – <a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>

<h2>OUR ADVERTISING PARTNERS</h2>

<p>Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.</p>

<ul>
    <li>
        <p>Google</p>
        <p><a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>
    </li>
</ul>

<h2>ADVERTISING PARTNERS PRIVACY POLICIES</h2>

<P>You may consult this list to find the Privacy Policy for each of the advertising partners of Sarkari Job Offer.</p>

<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Sarkari Job Offer, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

<p>Note that Sarkari Job Offer has no access to or control over these cookies that are used by third-party advertisers.</p>

<h2>THIRD PARTY PRIVACY POLICIES</h2>

<p>Sarkari Job Offer's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>

<h2>CCPA PRIVACY RIGHTS (DO NOT SELL MY PERSONAL INFORMATION)</h2>

<p>Under the CCPA, among other rights, California consumers have the right to:</p>
<p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
<p>Request that a business delete any personal data about the consumer that a business has collected.</p>
<p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

<h2>GDPR DATA PROTECTION RIGHTS</h2>

<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
<p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
<p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
<p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
<p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
<p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
<p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

<h2>CHILDRENS'S INFORMATION</h2>

<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

<p>Sarkari Job Offer does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
<h2>AMENDMENTS TO THE PRIVACY POLICY</h2>
<p>Sarkarijoboffer may amend it's Privacy Policy posted on website time to time at its sole descretion.Your continued use of our services accepts amendments to the Privacy Policy.Please always check our Privacy Policy, to see the current Privacy Policy. </p>
<h2>CONTACT US</h2>
<P>If you have any questions and concern regarding our Privacy Policy, kindly <a class="mto" href="mailto:support@sarkarijoboffer.in">contact</a> us.</P>
  </div>
  </div>
<!-----------------footer------------------>
<?php include("../foot_head/footer.php"); ?>
</body>
</html>
