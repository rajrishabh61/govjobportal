<?php include_once "../../configure/config.php"; ?>
<?php include_once "../../configure/userconfig.php"; ?>
<?php include_once "../../adminPanel/track.php"; ?>
<!--<?php include_once "../../adminPanel/data/visitor_data.php"; ?> -->
<?php include_once "../../adminPanel/uniquevisitor.php"; ?>
<?php
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($mysqli, $_GET['id']);
    $sql555 = "SELECT * FROM admission where id='$id'";
    $res555 = mysqli_query($mysqli, $sql555);
}
?>
<!DOCTYPE html>
<html lang="en">
<?php while ($row555 = mysqli_fetch_array($res555)) { 
  $article_post_image = $row555['article_image'];
  $meta_description=$row555['meta_description'];
  $meta_keywords=$row555['meta_keywords'];
  $meta_title=$row555['meta_title'];
  ?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php if(!empty($meta_title)){ echo $meta_title;}else{ echo $row555['post_name_admiss'];} ?></title>
        <meta name="description" content="<?php if(!empty($meta_description)){ echo $meta_description;}else{ echo $row555['post_name_admiss'];} ?>">
        <meta name="keywords" content="<?php if(!empty($meta_keywords)){ echo $meta_keywords;}else{ echo $row555['post_name_admiss'];} ?>">
        <link rel="canonical" href="<?php $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                                    echo $url; ?>">
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Article",
                "mainEntityOfPage": {
                    "@type": "WebPage",
                    "@id": "<?php $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                            echo $url; ?>"
                },
                "headline": "<?php if (!empty($row555['Schema_headline'])) {
                                    echo $row555['Schema_headline'];
                                } else {
                                    echo $row555['meta_title'];
                                } ?>",
                "description": "<?php if (!empty($row555['Schema_descp'])) {
                                    echo $row555['Schema_descp'];
                                } else {
                                    echo $row555['meta_description'];
                                } ?>",
                "image": "<?php if (!empty($row555['article_image'])) {
                                echo $row555['article_image'];
                            } ?>",
                "author": {
                    "@type": "Organization",
                    "name": "Sarkarijoboffer",
                    "url": "https://sarkarijoboffer.in/"
                },
                "publisher": {
                    "@type": "Organization",
                    "name": "sarkarijoboffer.in",
                    "logo": {
                        "@type": "ImageObject",
                        "url": "https://sarkarijoboffer.in/Img/logowhite.png"
                    }
                },
                "datePublished": "<?php if (!empty($row555['post_date_admiss'])) {
                                        echo $row555['post_date_admiss'];
                                    } ?>",
                "dateModified": "<?php if (!empty($row555['post_update_date_admiss'])) {
                                        echo $row555['post_update_date_admiss'];
                                    } ?> "
            }
        </script>
        <meta property="og:url" content="https://sarkarijoboffer.in/" />
        <meta property="og:image" content="https://sarkarijoboffer.in/Img/card.png" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php if(!empty($meta_title)){ echo $meta_title;}else{ echo $row555['post_name_admiss'];} ?>" />
        <meta property="og:description" content="<?php if(!empty($meta_description)){ echo $meta_description;}else{ echo $row555['post_name_admiss'];} ?>" />
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="https://sarkarijoboffer.in/">
        <meta name="twitter:title" content="<?php if(!empty($meta_title)){ echo $meta_title;}else{ echo $row555['post_name_admiss'];} ?>">
        <meta name="twitter:description" content="<?php if(!empty($meta_description)){ echo $meta_description;}else{ echo $row555['post_name_admiss'];} ?>">
        <meta http-equiv="cache-control" content="no-cache" />
        <meta name="theme-color" content="rgb(22, 119, 158)" />
        <meta name="robots" content="index,follow">
        <meta name="google-site-verification" content="ev-ihRxs-vMZa5R-s-ZfB5Vitg-nB1-YMQJnXqDZW7s" />
        <link rel="shortcut icon" type="image/gif" href="https://sarkarijoboffer.in/Img/favicon.ico">
        <!------------------------google-----Analytic---------------------------->
        <?php include_once "../../foot_head/analytic.php"; ?>
        <!------------------------google--------------------------------->
        <script data-ad-client="ca-pub-5180496463499295" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!---Fonticons-->
        <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/header.min.css" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://sarkarijoboffer.in/dist/css/bootstrap.min.css" />
        <!---Fonticons-->
        <link rel="stylesheet" href="https://sarkarijoboffer.in/fontawesome-v5.15.1-.min.css"/>
    </head>
    <body>
        <?php include_once "../../foot_head/header.php"; ?>
        <div class="main-body">
            <div class="container">
                <div class="row" style="padding-top: 10px;">
                     <!-- subads1 -->
                    <div class="col-lg-12" id="sub-ads-top">
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
                    <!-- subads1 -end-->
                    <!-------------------------Add------Anything------------------------->
                    <div class="col-lg-9" id="subbranch">
                        <div class="mmcb">
                            <table class="table" id="mmcb_table">
                                <tbody>
                                    <tr>
                                        <th scope="row" id="hd">Post name :</th>
                                        <td id="infohd">
                                            <h1><?php echo $row555['post_name_admiss']; ?></h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" id="hd">Post Date :</th>
                                        <td id="infohd"><?php echo $row555['post_date_admiss']; ?> || <?php
                                                                                                        $posttimeadmiss = $row555['post_time_admiss'];
                                                                                                        $postadmiss_T = date("g:i A", strtotime($posttimeadmiss));
                                                                                                        echo $postadmiss_T; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" id="hd">Information :</th>
                                        <td id="infohd"><?php echo $row555['information_admiss']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-----------table-2----------------->
                            <table class="table" id="mmcb_table2" style="text-align: center;">
                                <thead>
                                    <tr>
                                        <th scope="row" id="hd2">
                                            <h2><?php echo $row555['head_admiss']; ?></h2>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                            <!-----------table-3----------------->
                            <table class="table" id="mmcb_table3">
                                <thead>
                                    <tr>
                                        <th id="imp">Important Dates</th>
                                        <th id="imp">Application Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="border-left">
                                            <?php echo $row555['impdate_admiss']; ?>
                                        </td>
                                        <td id="border-right">
                                            <?php echo $row555['applyfee_admiss']; ?>
                                        </td>
                                    </tr>
                                    <!----------Eligibility-----&----Age Limit------------------->
                                    <thead>
                                        <tr>
                                            <th id="imp">Eligibility</th>
                                            <th id="imp">Age Limit</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td id="border-left"><?php echo $row555['eligibility_admiss']; ?></td>
                                        <td id="border-right">
                                            <?php echo $row555['agelimit_admiss']; ?>
                                        </td>
                                    </tr>
                                    <!---------Vacancy Details--&-----Post-Name------------------------>
                                    <thead>
                                        <tr>
                                            <th id="imp">Details</th>
                                            <th id="imp">course Name</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td id="border-left">
                                            <?php echo $row555['detail_admiss']; ?>
                                        </td>
                                        <td id="border-right">
                                            <?php echo $row555['coursename_admiss']; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--------vacant----area--for-content---------------->
                            <!----------Important-Links------------------->
                            <table class="table">
                                <tbody>
                                <td id="vimp" style="border-top: 0;padding:0px;margin:0px;">
                                  <div style="width: 100%;padding:5px;">
                                    <!-- ads---->
                                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5180496463499295"
                                      crossorigin="anonymous"></script>
                                  <!-- 13235 -->
                                  <ins class="adsbygoogle"
                                      style="display:inline-block;width:280px;height:250px"
                                      data-ad-client="ca-pub-5180496463499295"
                                      data-ad-slot="3625978763"></ins>
                                  <script>
                                      (adsbygoogle = window.adsbygoogle || []).push({});
                                  </script>
                                  </div>
                                            <div id="databs" style="margin:0px;padding:0px;width: 100%;overflow:auto;"><?php echo $row555['additional']; ?></div>
                                    </td>
                                    <tr>
                                        <th scope="row" id="imp" style="border-top: 0;">Important Links</th>
                                    </tr>
                                    <?php $extraLinks = $row555['extra_links']; ?>
                                    <?php if (!empty($extraLinks)) { ?>
                                        <?php echo "<tr >";
                                        echo "<th id='link' style='border-top: 0;border-bottom: 0;'>$extraLinks</th>";
                                        echo "</tr>"; ?>
                                    <?php } ?>
                                    <tr>
                                        <th id="link" style="border-top: 0;border-bottom: 0;"><a href="<?php echo $row555['offcllink_admiss']; ?>" target="_blank">Official Website</a></th>
                                    </tr>
                                    <tr>
                                        <th id="link" style="border-top: 0;"><a href="<?php echo $row555['applylink_admiss']; ?>" target="_blank">Click Here To Apply Online</a></th>
                                    </tr>
                                </tbody>
                            </table>
                        <?php } ?>
                        <!-------------disclaimer------------->
                        <div class="col-lg-12">
                            <?php include '../../foot_head/disclaimer.php'; ?>
                        </div>
                        </div>
                        <div class="col-lg-12  imageseo">
                            <div class="col-lg-12  imagecontent">
                                <?php if (!empty($article_post_image)) { ?>
                                    <img src='../../../upload/<?php echo $article_post_image ?>' alt="<?php echo $meta_title ?>" title="<?php echo $meta_title ?>">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!---------------Sidebar--------------------->
                    <div class="col-lg-3">
                        <div class="row">
                            <?php include_once "../../foot_head/ads.php"; ?>
                        </div>
                        <!--------------->
                        <div class="row" id="ads-side-row">
                          <div class="col-lg" id="ads-side-col">
                            <!-- ads-sidebar2 -->
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5180496463499295"
                              crossorigin="anonymous"></script>
                          <!-- menu-sidebar87552 -->
                          <ins class="adsbygoogle"
                              style="display:inline-block;width:250px;height:700px"
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
        <!-------------------footer-------------------------->
        <?php include_once "../../foot_head/footer.php"; ?>
    </body>
</html>