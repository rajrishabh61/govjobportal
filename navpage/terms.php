<?php include_once ("../configure/userconfig.php"); ?>
<?php include_once ("../adminPanel/track.php");?>
<!--<?php include_once ("../adminPanel/data/visitor_data.php");?> -->
<?php include_once("../adminPanel/uniquevisitor.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sarkarijoboffer | Terms & Conditions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="theme-color" content="rgb(22, 119, 158)"/>
    <meta name="robots" content="noindex,nofollow">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/styles.min.css">
    <meta http-equiv="Cache-control" content="no-cache"/>
    <link rel="shortcut icon" type="image/gif" href="../Img/favicon.ico" >
    <meta name="language" content="english"/>
    <!------------------------google-----Analytic---------------------------->
    <?php include_once("../foot_head/analytic.php");?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<!----------------google------analytic----------------->
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
.paragraph1 h2 strong{
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
.paragraph1 h3{
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
 line-height:1.78rem;
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
.paragraph1 h2{
    font-weight:700;
    font-size:2.1rem;
}
.paragraph1 .p1{
    font-size:1.4rem;
    padding:5px 0px;
    letter-spacing:1px;
  
}
.paragraph1 h3{
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
.paragraph1 h2{
    font-weight:300;
    font-size:1.2rem;
}
.paragraph1 .p1{
    font-size:1.1rem;
    padding:5px 0px;
    letter-spacing:1px;
}
.paragraph1 h3{
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
.paragraph1 h2{
    font-weight:300;
    font-size:1.2rem;
}
.paragraph1 .p1{
    font-size:1rem;
    padding:0px;
    letter-spacing:1px;
    margin:10px 0;
}
.paragraph1 h3{
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
.paragraph1 h2{
    font-weight:300;
    font-size:1.2rem;
}
.paragraph1 .p1{
    font-size:1rem;
    padding:0px;
    letter-spacing:1px;
    margin:10px 0;
}
.paragraph1 h3{
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
</head>
<body> 
<?php include("../foot_head/header.php"); ?>
  <!-----main-body-abt-container--->
  <div class="abt-container">
  <div class="paragraph1">
  <h2><strong>Terms and Conditions</strong></h2>

<span class="p1">Welcome to Sarkari Job Offer!</span>

<span class="p1">These terms and conditions outline the rules and regulations for the use of Sarkari Job Offer's Website, located at https://sarkarijoboffer.in/.</span>

<span class="p1">By accessing this website we assume you accept these terms and conditions. Do not continue to use Sarkari Job Offer if you do not agree to take all of the terms and conditions stated on this page.</span>

<span  class="p1">The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</span>

<h3>Cookies</h3>

<p>We employ the use of cookies. By accessing Sarkari Job Offer, you agreed to use cookies in agreement with the Sarkari Job Offer's Privacy Policy. </p>

<p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>

<h3>License</h3>

<p>Unless otherwise stated, Sarkari Job Offer and/or its licensors own the intellectual property rights for all material on Sarkari Job Offer. All intellectual property rights are reserved. You may access this from Sarkari Job Offer for your own personal use subjected to restrictions set in these terms and conditions.</p>

<p>You must not:</p>
<ul>
    <li>Republish material from Sarkari Job Offer</li>
    <li>Sell, rent or sub-license material from Sarkari Job Offer</li>
    <li>Reproduce, duplicate or copy material from Sarkari Job Offer</li>
    <li>Redistribute content from Sarkari Job Offer</li>
</ul>

<p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the <a href="https://www.termsandconditionsgenerator.com">Terms And Conditions Generator</a> and the <a href="https://www.generateprivacypolicy.com">Privacy Policy Generator</a>.</p>

<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Sarkari Job Offer does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of Sarkari Job Offer,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, Sarkari Job Offer shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>

<p>Sarkari Job Offer reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>

<p>You warrant and represent that:</p>

<ul>
    <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
    <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
    <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
    <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
</ul>

<p>You hereby grant Sarkari Job Offer a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>

<h3>Hyperlinking to our Content</h3>

<p>The following organizations may link to our Website without prior written approval:</p>

<ul>
    <li>Government agencies;</li>
    <li>Search engines;</li>
    <li>News organizations;</li>
    <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
    <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
</ul>

<p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>

<p>We may consider and approve other link requests from the following types of organizations:</p>

<ul>
    <li>commonly-known consumer and/or business information sources;</li>
    <li>dot.com community sites;</li>
    <li>associations or other groups representing charities;</li>
    <li>online directory distributors;</li>
    <li>internet portals;</li>
    <li>accounting, law and consulting firms; and</li>
    <li>educational institutions and trade associations.</li>
</ul>

<p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of Sarkari Job Offer; and (d) the link is in the context of general resource information.</p>

<p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>

<p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to Sarkari Job Offer. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>

<p>Approved organizations may hyperlink to our Website as follows:</p>

<ul>
    <li>By use of our corporate name; or</li>
    <li>By use of the uniform resource locator being linked to; or</li>
    <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>
</ul>

<p>No use of Sarkari Job Offer's logo or other artwork will be allowed for linking absent a trademark license agreement.</p>

<h3>iFrames</h3>

<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>

<h3>Content Liability</h3>

<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>

<h3>Your Privacy</h3>

<p>Please read Privacy Policy</p>

<h3>Reservation of Rights</h3>

<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>

<h3>Removal of links from our website</h3>

<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>

<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>

<h3>Disclaimer</h3>

<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>

<ul>
    <li>limit or exclude our or your liability for death or personal injury;</li>
    <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
    <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
    <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
</ul>

<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>

<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>

<h3>AMENDMENTS TO THE TERMS AND CONDITIONS</h3>

<p>Sarkarijoboffer may amend it's Terms and Conditions posted on website time to time at its sole descretion.Your continued use of our services accepts amendments to the Terms and Conditions.Please always check our Terms and Conditions, to see the current Terms and Conditions. </p>

<h3>CONTACT US</h3>

<P>If you have any questions and concern regarding our Terms and Conditions, kindly contact us at <a class="mto" href="mailto:support@sarkarijoboffer.in">support[@]sarkarijoboffer.in</a></P>
  </div>
  </div>
<!-----------------footer------------------>
<?php include("../foot_head/footer.php"); ?>
</body>
</html>
