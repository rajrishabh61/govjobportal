<?php include_once("../../configure/config.php");?>
<?php include_once("../../configure/userconfig.php");?>
<?php include_once ("../../adminpage/adminsubpages/track.php");?>
<?php include_once ("../../adminpage/data/visitor_data.php");?> 
<?php include_once("../../adminpage/adminsubpages/uniquevisitor.php");?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sarkarijoboffer  | Revised Time Table of CBSE Board Class 10th /12th </title>
    <meta name="description" content="Central Board of Secondary Education ( CBSE ) has Changed Their Time Table for the Class 10th / 12nd Exam. So Those Candidates  Want to do Download the Revised Time Table can Check the Details given Below.">
    <meta name="keywords" content="Sarkari Job Offer,sarkari job offer,CBSE time table. CBSE Syllabus ,sarkarijoboffer.in, Government Job,सरकारी जॉब ऑफर ,सरकारी नौकरी, Sarkari Exam Results, Admit Card, Scholarship">
    <link rel="shortcut icon" type="image/gif" href="../../Img/favicon.ico" >
    <meta name="google-site-verification" content="ev-ihRxs-vMZa5R-s-ZfB5Vitg-nB1-YMQJnXqDZW7s" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="rgb(22, 119, 158)">
    <meta name="robots" content="index,follow">
    <!---Fonticons-->
    <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/header.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/bootstrap.min.css" />
    <!---Fonticons-->
    <link rel="stylesheet" href="https://sarkarijoboffer.in/fontawesome-v5.15.1-.min.css"/>
</head>

<body>
<?php include '../../header.php';?>
<style>
  #mmcb_table3 td{width: 50%;};
        /* .container{
            border: 2px solid red;
        }
        .col-lg-9{
            border: 2px solid blue;
        }
        .col-lg-3{
            border: 2px solid green;
        } */
    </style>
    <div class="main-body">
        <div class="container">
            <div class="row" style="padding-top: 10px;">
            <!-------------------------Add------Anything------------------------->
                <div class="col-lg-9" id="subbranch">
               
                    <div class="mmcb">
                        <table class="table" id="mmcb_table">
                            <tbody>
                              <tr>
                                <th scope="row" id="hd">Post name :</th>
                                <td>Revised Time Table of CBSE Board Class 10th /12th Available Now</td>
                              </tr>
                              <tr>
                                <th scope="row" id="hd">Post Date :</th>
                                <td>
                                              <?php echo $row21['post_date'];?>  ||  <?php 
                                  $posttime = $row21['post_time'];
                                  $post_T = date("g:i A", strtotime($posttime));
                                  echo $post_T;
                                  ?>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row" id="hd">Information :</th>
                                <td><?php echo $row21['information'];?></td>
                              </tr>
                            </tbody>
                          </table>
                          <!-----------table-2----------------->
                          <table class="table" id="mmcb_table2" style="text-align: center;">
                          <thead>
                            <tr>
                              <th scope="row"><?php echo $row21['post_heading'];?></th>
                            </tr>
                          </thead>
                        </table>
                          <!-----------table-3----------------->
                          <table class="table" id="mmcb_table3">
                            <thead>
                                <tr>
                                  <th  id="imp">Important Dates</th>
                                  <th  id="imp">Application Fee</th>
                                </tr>
                              </thead>
                            <tbody>
                              <tr>
                                <td id="border-left">
                                <ul><li><?php echo $row21 ['adimpdate']; ?></li></ul>
                                </td>
                                <td>
                                <ul><li><?php echo $row21 ['apply_fee']; ?></li></ul>
                                </td>
                              </tr>
                              <!----------Eligibility-----&----Age Limit------------------->
                              <thead>
                                <tr>
                                  <th  id="imp">Eligibility</th>
                                  <th  id="imp">Age Limit</th>
                                </tr>
                              </thead>
                              <tr>
                                <td id="border-left"><ul><li><?php echo $row21 ['eligibility']; ?></li></ul></td>
                                <td>
                                <ul><li><?php echo $row21 ['age_limit']; ?></li></ul>
                                </td>
                              </tr>
                              <!---------Vacancy Details--&-----Post-Name------------------------>
                              <thead>
                                <tr>
                                  <th  id="imp">Vacancy Details</th>
                                  <th  id="imp">Post Name</th>
                                </tr>
                              </thead>
                              <tr>
                                <td id="border-left">
                                <ul><li><?php echo $row21 ['vacancy_date']; ?></li></ul>
                                </td>
                                <td>
                                <ul><li><?php echo $row21 ['post']; ?></li></ul>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <!--------vacant----area--for-content---------------->
                           <!----------Important-Links------------------->
                           <table class="table" >
                            <tbody>
                              <tr>
                                <th scope="row" id="imp" style="border-top: 0;">Important Links</th>
                              </tr>
                              <tr>
                                <th id="link" style="border-top: 0;border-bottom: 0;"><a href="<?php echo $row21['ofcl_link']?>" target="_blank">Official Website</a></th>
                              </tr>
                              <tr>
                                <th id="link" style="border-top: 0;"><a href="<?php echo $row21['applylink']?>" target="_blank">Click Here To Apply Online</a></th>
                              </tr>
                            </tbody>
                          </table>

                          <!-------------disclaimer------------->
                          <div class="col-lg-12">
                                <?php include '../../foot_head/disclaimer.php';?> 
                          </div>
                    </div>
                </div>
                <!---------------Sidebar--------------------->
                <div class="col-lg-3">
                   <div class="row">
                       <div class="col-lg">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsarkarijobofferofficial&tabs&width=300&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=663480581234396" width="300" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                       </div>
                       <div class="col-lg">
                        <a href="index.php"><img src="../../Img/skyscrapperbanner.png" alt="ads" width="300px"></a>
                       </div>
                   </div>
                </div> 
            </div>
        </div>
    </div>
<!-------------------footer-------------------------->
<?php include '../../footer.php';?> 
</body>
</html>
