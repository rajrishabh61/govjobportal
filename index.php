<?php ob_start();?>
<?php include_once 'fetch/indexfetch.php';?>
<?php include_once 'adminPanel/track.php';?>
<!--<?php include_once 'adminPanel/data/visitor_data.php';?>-->
<?php include_once 'adminPanel/uniquevisitor.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sarkari Job Offer: Apply Online for Latest Government Jobs 2023 | Download Admit Cards</title>
<meta name="description" content="Explore the latest government job opportunities with Sarkari Job Offer in 2021. Sarkarijobffer delivers timely updates on official job notifications, online forms, admit cards, and results. Stay informed about government vacancies in SSSC CHSL, Banking, SSC, Army, Navy, Police, UPPSC, UPSSSC, SSC CGL, SSC Stenographer, Railway, UPSC, and more. Your one-stop destination for comprehensive and reliable information on various government exams and recruitment processes. Apply seamlessly for the latest Sarkari Naukri and embark on a fulfilling career in the public sector.">
  <meta name="keywords" content="Sarkari jobs,Government job updates,Latest government jobs,Central government jobs,State government jobs,Public sector jobs,Government job notifications,Employment news,Sarkari Naukri,Government job vacancies,Job alerts,Exam notifications,Indian government recruitment,PSU jobs ,Public Sector Undertakings,Defense jobs,Railway jobs,Banking jobs,UPSC jobs ,Union Public Service Commission,SSC jobs ,Staff Selection Commission,Teaching jobs in government schools,Police jobs,Indian Army jobs,Navy jobs,Air Force jobs,State-wise government jobs">
  <link rel="canonical" href="https://www.sarkarijoboffer.in/">
  <meta property="og:url" content="https://www.sarkarijoboffer.in/" />
  <meta property="og:image" content="https://www.sarkarijoboffer.in/Img/card.png" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Sarkari Job Offer: Apply Online for Latest Government Jobs 2023 | Download Admit Cards" />
  <meta property="og:description" content="Explore the latest government job opportunities with Sarkari Job Offer in 2021. Sarkarijobffer delivers timely updates on official job notifications, online forms, admit cards, and results. Stay informed about government vacancies in SSSC CHSL, Banking, SSC, Army, Navy, Police, UPPSC, UPSSSC, SSC CGL, SSC Stenographer, Railway, UPSC, and more. Your one-stop destination for comprehensive and reliable information on various government exams and recruitment processes. Apply seamlessly for the latest Sarkari Naukri and embark on a fulfilling career in the public sector." />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="https://www.sarkarijoboffer.in/">
  <meta name="twitter:title" content="Sarkari Job Offer: Apply Online for Latest Government Jobs 2023 | Download Admit Cards">
  <meta name="twitter:description" content="Explore the latest government job opportunities with Sarkari Job Offer in 2021. Sarkarijobffer delivers timely updates on official job notifications, online forms, admit cards, and results. Stay informed about government vacancies in SSSC CHSL, Banking, SSC, Army, Navy, Police, UPPSC, UPSSSC, SSC CGL, SSC Stenographer, Railway, UPSC, and more. Your one-stop destination for comprehensive and reliable information on various government exams and recruitment processes. Apply seamlessly for the latest Sarkari Naukri and embark on a fulfilling career in the public sector.">
  <meta http-equiv="cache-control" content="no-cache" />
  <meta name="theme-color" content="rgb(22, 119, 158)" />
  <meta name="language" content="english" />
  <meta name="robots" content="index,follow">
  <meta name="google-site-verification" content="ev-ihRxs-vMZa5R-s-ZfB5Vitg-nB1-YMQJnXqDZW7s" />
  <link rel="shortcut icon" type="image/gif" href="../Img/favicon.ico"/>
  <!------------------------google-----Analytic---------------------------->
  <?php include_once "foot_head/analytic.php";?>
  <!------------------------google--------------------------------->
  <script data-ad-client="ca-pub-5180496463499295" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!---Fonticons-->
  <link rel="stylesheet" href="https://www.sarkarijoboffer.in/dist/css/" />
  <!------------------------style--css------------------------------->
  <link rel="stylesheet" href="https://www.sarkarijoboffer.in/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://www.sarkarijoboffer.in/dist/css/styles.min.css"/>
</head>
<body><?php include 'foot_head/header.php';?>
  <div class="main-body">
    <div class="container">
      <div class="row" id="acs">
        <div class="col-lg-12">
          <h1>Welcome to SarkariJobOffer.in</h1>
          <p>Sarkari Job Offer is your comprehensive source for the latest updates on jobs, admit cards, syllabus, and results. Dive into a wealth of career information where aspiring individuals can explore employment opportunities based on their chosen subjects, enabling them to plan their career paths with confidence. Stay informed, empowered, and ready for success with Sarkari Job Offer.</p>
        </div>
      </div>
      <!----------Live-------------------->
      <div class="row" id="styl-2sd">
        <div class="col-1 m-auto" id="styl-as">
          <span id="live-blink"><i class="fa fa-circle fa-fw text-danger blink"></i>Live</span>
        </div>
      </div>
      <!----------space-------------------->
           <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!----------space-------------------->
                <div class="row" id="brd-container">
                    <div class="col-lg-12 brd">
                        <div class="row">
                            <h2>Notifications</h2>
                            <div class="col-lg-12">
                                <li id="marq"><a href="https://t.me/sarkarijoboffer" target="_blank">Join Us On Telegram Channel</a></li>
                            </div>
                            <?php while ($ROW_155 = mysqli_fetch_array($RESULT)) {?>
                            <?php $status2 = $ROW_155['status2'];?>
                            <?php $url = $ROW_155['url'];?>
                            <?php $url2 = $ROW_155['url2'];?>
                            <!------------>
                            <div class="col-lg-12">
                                <marquee class="<?php echo $ROW_155['class']; ?>" behavior="alternate" scrollamount="5" direction="<?php echo $ROW_155['direction']; ?>" onMouseOver="this.stop()" onMouseOut="this.start()">
                                    <?php if ($status == '1') {?> <span id="gif" class="new">NEW</span>&nbsp;<span><a href="<?php if (!empty($url)) {echo $url;} else {echo '#';}?>" target="_blank"><?php echo $ROW_155['title']; ?></a></span>  <?php }?><?php if (($status == '1') && ($status2 == '1')) {echo '|| ';}?><?php if ($status2 == '1') {?><span id="gif" class="new">NEW</span>&nbsp;
                                    <span><a href="<?php if (!empty($url2)) {echo $url2;} else {echo '#';}?>" target="_blank"><?php echo $ROW_155['title2']; ?></a></span> <?php }?>
                                </marquee>
                            </div>
                            <?php }?>
                            <!------------>
                            <div class="col-lg-12">
                                <marquee class="marquee1" scrolldelay="5" target="_blank" style="text-shadow: 0 0 32px #fff;"> Bihar Police CSBC Forest Guard Result 2021 Declared || UPSC CMS Combined Medical Services Recruitment Apply Online 2021</marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!--------------here-to-add-any-new-content------------------->
      <div class="row" id="gsfodl">
        <div class="col-lg-12">
          <!--ads1 -->
          <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5180496463499295"
            crossorigin="anonymous"></script>
            <!-- 2021-ads8956 -->
            <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-5180496463499295"
            data-ad-slot="4609410452"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
           <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        </div>
      </div>
      <!--------------main------------------->
      <div class="row">
        <div class="col">
          <div class="row">
            <div class="col">
              <div class="row mbx">
                <div class="col-lg-12">
                  <div class="row .overflow">
                    <div class="col-lg-4 order-lg-3">
                      <table class="table-one lh">
                        <th>Latest Job</th>
                        <?php while ($res15 = mysqli_fetch_array($result15)) {?>
                          <tr>
                            <td><a id="hm_sdfg" href="newjob/<?php echo $res15['id']; ?>/<?php echo $string_with_dashes = str_replace(' ', '-', trim($res15['addpage'])); ?>" target="_blank"><?php echo $res15['post_name']; ?></a></td>
                          </tr>
                        <?php }?>
                        <tr class="viewmore">
                          <td><a href="latestjob">View More</a></td>
                        </tr>
                      </table>
                    </div>
                    <div class="col-lg-4 order-lg-2">
                      <table class="table-one lh">
                        <th> Admit card</th>
                        <?php while ($res1 = mysqli_fetch_array($admit_result)) {?>
                          <tr>
                            <td><a id="hm_sdfg" href="admitcard/<?php echo $res1['id']; ?>/<?php echo $string_with_dashes = str_replace(' ', '-', trim($res1['pagename_admit'])); ?>" target="_blank"><?php echo $res1['post_name_admit']; ?></a></td>
                          </tr>
                        <?php }?>
                        <tr class="viewmore">
                          <td><a href="admitcards">View More</a></td>
                        </tr>
                      </table>
                    </div>
                    <div class="col-lg-4 order-lg-1">
                      <table class="table-one lh">
                        <th>Results</th>
                        <?php while ($reshmres = mysqli_fetch_array($hmresult)) {?>
                          <tr>
                            <td><a id="hm_sdfg" href="result/<?php echo $reshmres['id']; ?>/<?php echo $string_with_dashes = str_replace(' ', '-', trim($reshmres['pagename_rslt'])); ?>" target="_blank"><?php echo $reshmres['post_name_rslt']; ?></a></td>
                          </tr>
                        <?php }?>
                        <tr class="viewmore">
                          <td><a href="results">View More</a></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="row overflow">
                  <div class="col-lg-4 order-lg-3">
                  <table class="table-one sh">
                    <th>Admission</th>
                    <?php while ($res3 = mysqli_fetch_array($admis_result)) {?>
                      <tr>
                        <td><a id="hm_sdfg" href="admission/<?php echo $res3['id']; ?>/<?php echo $string_with_dashes = str_replace(' ', '-', trim($res3['pagename_admiss'])); ?>" target="_blank"><?php echo $res3['post_name_admiss']; ?></a></td>
                      </tr>
                    <?php }?>
                    <tr class="viewmore">
                      <td><a href="admissions">View More</a></td>
                    </tr>
                  </table>
                </div>
                <div class="col-lg-4 order-lg-2">
                  <table class="table-one sh">
                    <th>Others</th>
                    <?php while ($res878 = mysqli_fetch_array($schlar_result)) {?>
                      <tr>
                        <td><a id="hm_sdfg" href="other/<?php echo $res878['id']; ?>/<?php echo $string_with_dashes = str_replace(' ', '-', trim($res878['pagename_schlr'])); ?>" target="_blank"><?php echo $res878['post_name_schlr']; ?></a></td>
                      </tr>
                    <?php }?>
                    <tr class="viewmore">
                      <td><a href="others">View More</a></td>
                    </tr>
                  </table>
                </div>
                <div class="col-lg-4 order-lg-1">
                  <table class="table-one sh">
                    <th>Syllabus</th>
                    <tr>
                      <?php while ($res223 = mysqli_fetch_array($hmsyllabus)) {?>
                        <td><a id="hm_sdfg" href="sylabus/<?php echo $res223['id']; ?>/<?php echo $string_with_dashes = str_replace(' ', '-', trim($res223['pagename_sylb'])); ?>" target="_blank"><?php echo $res223['post_name_sylb']; ?></a></td>
                    </tr>
                  <?php }?>
                  <tr class="viewmore">
                    <td><a href="syllabus">View More</a></td>
                  </tr>
                  </table>
                </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="gvjbbox">
                    <h3>Some Dream Government Jobs Of Aspirants In India</h3>
                    <ul>
                      <?php while ($res_dream = mysqli_fetch_array($dream_result)) {?>
                        <li><?php echo $res_dream['dream_jobs'] ?></li>
                      <?php }?>
                    </ul>
                  </div>
                </div>
                <!------------dicliamer-------------------->
                <div class="col-lg-12">
                  <?php include_once "foot_head/disclaimer.php";?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--------------Sidebar-begin----------------->
        <div class="col-lg-3 jbvcann">
          <div class="row">
            <div class="col-lg-12">
              <!--    -------------Ads--start--------->
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5180496463499295"
                     crossorigin="anonymous"></script>
                <!-- Sidebartop -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:250px;height:250px"
                     data-ad-client="ca-pub-5180496463499295"
                     data-ad-slot="6839016452"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
              <!-----ads-------end--------------------->
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsarkarijobofferofficial&tabs&width=300&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=663480581234396" width="300px" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
              <div class="jbvcant">
                <div class="gcse-search"></div>

                <div class="ckg">
                  <span class="fa fa-chevron-right"><a href="careerguide">Career Guide</a></span>
                </div>
                <h2>Important Links</h2>
                <?php while ($res150 = mysqli_fetch_array($rowlink)) {?>
                  <div class="implinksads"><span class="fa fa-chevron-right"></span><a href="<?php echo $res150['important_url'] ?>" target="_blank"><?php echo $res150['title']; ?></a></div>
                <?php }?>
              </div>
              <!--side_ads2 -->
              <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5180496463499295" crossorigin="anonymous"></script>
              <!-- ads-sidebar2 -->
              <ins class="adsbygoogle" style="display:inline-block;width:180px;height:686px" data-ad-client="ca-pub-5180496463499295" data-ad-slot="8797682534"></ins>
              <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
            </div>
          </div>
        </div>
        <!------------Sidebar-closed------------------------->
      </div>
    </div>
    <!----------------newsletter--------------->
    <div class="col" id="scroll">
      <?php include_once "function/newsfunction.php";?>
      <div class="newsletterbox">
        <i class="fas fa-envelope"></i>
        <form class="newsletter" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
          <h2>Newsletter</h2>
          <span>Subscribe to get the letest job updates straight to your mailbox</span>
          <span><?php if (isset($_POST['send'])) { echo $msg;}?></span>
            <span id="validresult"></span>
          <input id="subemail" class="input" type="email" name="email" placeholder="Enter Your Email" required>
          <input class="sbt" type="submit" name="send" onsubmit="return validate();" value="SUBSCRIBE">
        </form>
      </div>
    </div>
  </div>
  </div>
  <!-------------------footer-------------------------->
  <?php include 'foot_head/footer.php';?>
  <?php ob_flush();?>
  <!---------------SCRIPTS-------------------->
  <script async src="https://cse.google.com/cse.js?cx=082f0852d43c3baa2"></script>
  <script src="https://sarkarijoboffer.in/dist/js/index.min.js"></script>
  <!-------------------------->
</body>
</html>