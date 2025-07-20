<?php include_once "../fetch/indexbranch.php"; ?>
<?php include_once "../adminPanel/track.php"; ?>
<!--<?php include_once "../adminPanel/data/visitor_data.php"; ?>-->
<?php include_once "../adminPanel/uniquevisitor.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sarkarijoboffer | Latest Job 2022 | Sarkari Naukari Vacancy 2022</title>
  <meta name="description" content=" Apply Online Banking,SSC,UPSC,Railway Exam. Fill all government exam application form online ">
  <meta name="keywords" content="Apply Online Exam,Fill form,latest job ,sarkarijoboffer.in, Government Job,सरकारी जॉब ऑफर ,सरकारी नौकरी, Sarkari Exam Results, Admit Card, Scholarship">
  <link rel="canonical" href="https://sarkarijoboffer.in/latestjob">
  <meta property="og:url" content="https://sarkarijoboffer.in/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="sarkarijoboffer | Latest Gov Job 2021 | Sarkari Naukari Vacancy 2021" />
  <meta property="og:description" content="Apply Online Banking,SSC,UPSC,Railway Exam. Fill all government exam application form online" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="https://sarkarijoboffer.in/">
  <meta name="twitter:title" content="sarkarijoboffer | Latest Gov Job 2021 | Sarkari Naukari Vacancy 2021">
  <meta name="twitter:description" content="Apply Online Banking,SSC,UPSC,Railway Exam. Fill all government exam application form online">
  <meta http-equiv="cache-control" content="no-cache" />
  <meta name="theme-color" content="rgb(22, 119, 158)" />
  <meta name="language" content="english" />
  <meta name="robots" content="index,follow">
  <meta name="google-site-verification" content="ev-ihRxs-vMZa5R-s-ZfB5Vitg-nB1-YMQJnXqDZW7s" />
  <link rel="shortcut icon" type="image/gif" href="../Img/favicon.ico">
  <!------------------------google-----Analytic---------------------------->
  <?php include_once "../foot_head/analytic.php"; ?>
  <!------------------------google--------------------------------->
  <script data-ad-client="ca-pub-5180496463499295" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!---Fonticons-->
  <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/fontawesome-v5.15.1-.min.css" />
  <!------------------------style--css------------------------------->
  <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/styles.min.css" />
</head>
<body>
  <?php include_once "../foot_head/header.php"; ?>
  <div class="main-body">
    <div class="container" id="mbxbranch-marginset">
      <div class="row">
        <div class="col-lg-12" id="ads-top">
          <!--ads2 -->
          <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5180496463499295"
          crossorigin="anonymous"></script>
          <!-- horzontal123456 -->
          <ins class="adsbygoogle"
              style="display:block"
              data-ad-client="ca-pub-5180496463499295"
              data-ad-slot="6399018748"
              data-ad-format="auto"
              data-full-width-responsive="true"></ins>
          <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
        <div class="col-lg-8 mbxbranch">
          <table class="table-two">
            <th>Latest Job</th>
            <?php while ($res15 = mysqli_fetch_array($result15)) { ?>
              <tr>
                <td><a id="lstjb_ahref" href="newjob/<?php echo $res15['id']; ?>/<?php echo $string_with_dashes = str_replace(' ', '-', trim($res15['addpage'])); ?>" target="_blank"><?php echo $res15['post_name']; ?></a></td>
              </tr>
            <?php } ?>
          </table>
          <div class="col-lg-12">
            <?php include_once "../foot_head/disclaimer.php"; ?>
          </div>
        </div>
        <!-------------sidebar---------------->
        <div class="col-lg-4 jbvcan">
          <div class="jbvcant">
            <div class="row">
              <?php include_once "../foot_head/ads.php"; ?>
            </div>
            <!--------------->
            <div class="row olrfsfg">
              <div class="col-lg rdifgj">
                <!--ads-sidebar2 -->
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5180496463499295"
                   crossorigin="anonymous"></script>
                  <!-- menu-sidebar87552 -->
                  <ins class="adsbygoogle"
                      style="display:inline-block;width:210px;height:700px"
                      data-ad-client="ca-pub-5180496463499295"
                      data-ad-slot="1884418035"></ins>
                  <script>
                      (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
              </div>
            </div>
            <!--------------->
          </div>
        </div>
      </div>
    </div>
    <?php include_once "../foot_head/footer.php"; ?>
    <script src="../dist/js/index.min.js"></script>
</body>
</html>