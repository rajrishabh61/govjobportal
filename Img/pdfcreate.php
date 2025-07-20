<?php include_once ("../configure/config.php");?>
<?php include_once ("header2.php");?>
<?php
if(isset($_GET['action']) && $_GET['action'] == 'active' && isset($_GET['id']) && !empty($_GET['id'])){
$id = mysqli_real_escape_string($mysqli,$_GET['id']);
$status=1;
$sql1 = "UPDATE createpdf SET status=? WHERE id=?";
$stmt1 = $mysqli->prepare($sql1);
$stmt1->bind_param('ss',$status,$id);
$stmt1->execute();
header('Location: '.$_SERVER['PHP_SELF']);
die;
}
if(isset($_GET['action']) && $_GET['action'] == 'deactive' && isset($_GET['id']) && !empty($_GET['id'])){
  $id = mysqli_real_escape_string($mysqli,$_GET['id']);
  $status=-1;
  $sql2 = "UPDATE createpdf SET status=? WHERE id=?";
  $stmt2 = $mysqli->prepare($sql2);
  $stmt2->bind_param('ss',$status,$id);
  $stmt2->execute();
  header('Location: '.$_SERVER['PHP_SELF']);
  die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="rgb(22, 119, 158)"/>
    <meta name="robots" content="index,follow">
    <link rel="shortcut icon" type="image/gif" href="../Img/favicon.ico" >
    <?php require_once 'head.php';?>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 55px;
  height: 24px;
  padding:0;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
  vertical-align: middle;
}

.slider:before {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(29px);
  -ms-transform: translateX(29px);
  transform: translateX(29px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
 #add-notif label{
padding:5px;
margin:0;
color:#000;
font-weight:600;
}
#add-notif input{
padding:5px;
margin:10px 2px;
height:35px;
cursor:text;
} 
#data-3 table td,#data-3 table th,#data-3 table th,
#data-4 table td,#data-4 table th,#data-4 table th,
#data-2 table td,#data-2 table th,#data-2 table th{
border:2px solid #fff;
border-radius:7px; 
}
#data-3 table,#data-3 table tr,#data-3 table th,#data-3 table td,
#data-4 table,#data-4 table tr,#data-4 table th,#data-4 table td,
#data-2 table,#data-2 table tr,#data-2 table th,#data-2 table td{
padding:10px;
margin:1px;
border:2px solid #ccc;
font-family:'Poppins',sans-serif;
 
}
#data-3 table td,
#data-4 table td,
#data-2 table td{
    font-weight:400;
}
#data-3 table th,
#data-4 table th{
  width:150px;
}
#data-3 table th,
#data-3 table td,
#data-4 table th,
#data-4 table td,
#data-2 table th,
#data-2 table td{
font-size:0.8rem;
}
#data-4 table tr td input,
#data-3 table tr td input{
  cursor: text;
  padding:10px; 
}
#pagig{
padding:15px;
}
.pagination li{
box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15);
}
#data-3 table tr td input,
#data-4 table tr td input{
  padding:15px;
  border:2px solid #ccc;
}
.cke_dialog
{
    z-index: 10055 !important;
}
@media screen and (max-width:991px){
    .modal-xl{
        min-width:80%;
    }
}
@media screen and (max-width:486px){
  .modal-xl{
        min-width:98%;
    }
  .switch {
  position: relative;
  display: inline-block;
  width: 35px;
  height: 15px;
  padding:0;
}
.slider:before {
  position: absolute;
  content: "";
  height: 8px;
  width: 8px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}
input:checked + .slider:before {
  -webkit-transform: translateX(22px);
  -ms-transform: translateX(22px);
  transform: translateX(22px);
}
#data-3 table th,
#data-3 table td,
#data-2 table th,
#data-2 table td{
font-size:0.5rem; 
}
#data-2 table td img{
  width:16px;
}
#pagig{
padding:15px;
font-size:.7rem;
}
.pagination li{
box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15);
} 
#data-4 table tr th{
  width:50px;
}
#data-4 table tr th,
#data-3 table tr th,
#data-3 table tr td input,
#data-4 table tr td input{
  font-size:9.7px;
} 
#data-3 table tr th, 
#data-4 table tr th{
  display:none;
}
}
.info{
    display:flex;
    justify-content:center;
}
.infoth{
    text-align:center;  
}
.info button{
    color:#fff;
    padding:1px 3px;
    border:none;
    border-radius:4px;
    position:relative;
    background-color:#012443;
    width:70px;
    text-align:center;
    outline:none;
}
#alert{
    background-color:rgba(0, 0, 0, 0.68);
    text-align:center;
    transform: translate(50px,22px);
    color:#fff;
    position:absolute; 
    width:100px;
    border-radius:4px;
}
</style>
<body>
<?php include_once 'adminhead.php'; ?>
<div id="mbody">
    <div class="container-fluid" >
        <div class="row">
            <div class="col">
                <div class="row" >
                    <div class="col">
                        <div class="row zx">
                            <div class="col-md-12" style="margin: 1px 0;">
                                <table class="table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col" style="text-align:left;">Create PDF</th>
                                        <th scope="col" style="text-align: right;">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop-1"><i class="fas fa-plus"></i> Add More</button>
                                        </th>
                                      </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-md-12" id="fetch" style="background-color: #fff;box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15);">
                                <div class="row justify-content-center"style="padding:5px;">
                                <table class="table table-striped dx" >
                                    <thead style="background-color:#002366;color:#fff;">
                                        <tr>
                                            <th class="idth" scope="col">ID</th>
                                            <th class="postth" scope="col">File Name</th>
                                            <th class="infoth" scope="col">Copy</th>
                                            <th class="actionth" scope="col">ACTION</th>
                                            <th class="statusth" scope="col" style="text-align:center;">STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody id="data-1">
                                    <?php $limit = 6;
                                    if(isset($_GET['page'])){
                                        $page = $_GET['page'];
                                    }else{
                                        $page = 1;
                                    }
                                    $offset= ($page -1) * $limit;
                                    ?>
                                    <?php $result=mysqli_query($mysqli, "SELECT * FROM createpdf ORDER BY id DESC LIMIT {$offset},{$limit} ");?>
                                    <?php if(mysqli_num_rows($result)>0){ ?>
                                      
                                    <?php while($row=mysqli_fetch_array($result)){ ?>
                                    <tr>
                                    <th class="id" scope="row"><?php echo $row['id']; ?></th>
                                    <td class="post" id="text1"><?php echo 'https://'.$_SERVER['SERVER_NAME'].'/'.$row['filename']; ?></td>
                                    <td class="info" style="text-align:center;"><span id="alert" style="display:none;">Text Copied!</span><button onclick="copy('text1')"><i class="far fa-copy"></i></button></td>
                                    <td class="action1"><a><i  type="button" data-id="<?php echo $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop-3" class="far fa-edit edit1"></i></a>&nbsp;&nbsp;<a><i id="view1"  data-id="<?php echo $row['id']; ?>" type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop-2"  class="fas fa-eye view1"></i></a>&nbsp;&nbsp;<a style="color:#000;" class="delete-confirm" href="delete/createpdfdelete.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash"></i></a></td>
                                    <td class="status" style="text-align:center;"><button class="btn1 light" style="border-radius:4px;text-align:center;" ><?php if($row['status']==1){?>
                                      <a class="deactive-confirm" href="?action=deactive&id=<?php echo $row['id'];?>"><i style="color:#000;" class="fas fa-thumbs-up"></i></a>
                                      <?php }else{
                                        ?>
                                      <a class="active-confirm" href="?action=active&id=<?php echo $row['id'];?>"><i style="color:#000;" class="fas fa-thumbs-down"></i></a>
                                        <?php
                                      }?></button></td>
                                    </tr>
                                    <?php } ?>
                                    <?php }else{echo 'Records Not Found!';} ?>
                                    </tbody>
                                  </table>
                                </div>
                            </div>
                            <div class="row justify-content-end" id="pagig">
                                <div class="col-md-12">
                                <?php $sqL=mysqli_query($mysqli, "SELECT * FROM createpdf");?>
                                <?php if(mysqli_num_rows($sqL) > 0){?>
                                <?php $total_record = mysqli_num_rows($sqL);
                                 $total_page = ceil($total_record/$limit);?>
                                <ul class="pagination justify-content-end">
                                <?php if($page > 1){
                                    echo '<li class="page-item "><a class="page-link" href="?page='.($page - 1).'" tabindex="-1" aria-disabled="true">Previous</a></li>';
                                } ?>
                                <?php for($i = 1; $i <= $total_page; $i++){ 
                                    if($i == $page){
                                        $active = "active";
                                    }else{
                                        $active = "";
                                    }
                                    ?>
                                    <li class="page-item <?php echo $active; ?>"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                    <?php }?>
                                    <?php if($total_page > $page){
                                    echo '<li class="page-item"><a class="page-link" href="?page='.($page + 1).'">Next</a></li>';
                                } ?>
                                </ul>
                                <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
<!--Add Latest Job Data Modal -->
<div class="modal fade" id="staticBackdrop-1" data-bs-backdrop="static" data-bs-keyboard="false"  aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
    <div class="modal-content" style="background-color: #F1F4FFFF;">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add PDF DATA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div><?php
      if(isset($_POST['submit'])){
    $filename_uncomp = $_POST['filename'];
    $filename="pdf/".$filename_uncomp.'_'.generateRandomString().".pdf";
    $completeData = $_POST['completeData'];
    $publisher_name=$_SESSION["username"];

    date_default_timezone_set('Asia/Kolkata');
    $publish_datetime = date("Y-m-d H:i:s");
    
    
       
//  $result15 = $mysqli->prepare("INSERT INTO createpdf(id,filename,publisher_name,publish_datetime) VALUES (?,?,?,?)");
//     $result15->bind_param("isss",$id,$filename,$publisher_name,$publish_datetime);
//     $result15->execute();
//      $result15->close();
 
   
     require('http://localhost:8080/job/admin/vendor/autoload.php');
     $html='';
     $mpdf=new \Mpdf\Mpdf();
    $html .= $completeData;
     $mpdf->WriteHTML($html);
     $file='pdf/'.$filename_uncomp.'.pdf';
     $mpdf->output($file,'F');
  
    if($result15){
           // header("location:http://localhost:8080/job/admin/pdfcreate.php");
                }else{
            echo "Failed";
 }
}
?>
      <form action="" method="POST">
          <div class="modal-body" id="data-4">
          <table class="table table-secondary">
            <tr>
              <th scope="row"><label for="filename" class="form-label">File Name</label></th>
              <td><input type="text" name="filename" class="form-control" id="filename" placeholder="File Name" required></td>
            </tr>
            <tr>
              <th scope="row"><label for="completeData" class="form-label">Data</label></th>
              <td><textarea type="text" name="completeData" class="form-control" id="completeData" placeholder="Data" required></textarea></td>
            </tr>
            <script>
              CKEDITOR.replace('completeData');
                </script>
          </table>
          </div>
        <div class="modal-footer">
          <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
  </div>
  </div>
</div>

 <!----------View--data----modal---------->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" style="background-color: #F1F4FFFF;">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">PDF Detail</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="data-2">
      <script>
     $(document).ready(function () {
        $(".view1").click(function () {
         var vid=$(this).data('id');
         $.ajax({
              url: "view/createpdfview.php",
              type: "POST",
              data:{vid:vid},
              success: function (response) {
                $("#data-2").html(response);
              }
              });
        });
      });
      </script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 <!----------Edit--data----modal-----#F1F4FFFF----->
 <div class="modal fade" id="staticBackdrop-3"  data-bs-backdrop="static" data-bs-keyboard="false"  aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
    <div class="modal-content" style="background-color: #F1F4FFFF;padding:10px;">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Others Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div id="data-3">
          <table class="table " style="background-color:#E8F0F2;padding:10px;">

          </table>
      </div>
    </div>
  </div>
</div>
 <!---SCRIPT---->
<script src="https://sarkarijoboffer.in/dist/js/sweetalert.min.js"></script>
  <script>
$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record  will be permanantly deleted!',
        icon: 'warning',
        dangerMode: true,
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
          swal({
          title: "Congratulation!",
          text: "You have successfully deleted!",
          icon: "success",
          button: "Yes!",
        });
        setTimeout(function () {
          window.location.href = url;
        },700);
        
        }else{
          swal({
          title: "oops!",
          text: "Deactivation Failed!",
          icon: "error",
          button: "Yes!",
        });
        }
    });
});
$('.active-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record  will be activated!',
        icon: 'warning',
        dangerMode: true,
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
          swal({
          title: "Congratulation!",
          text: "You have successfully Activated!",
          icon: "success",
          button: "Yes!",
        });
        setTimeout(function () {
          window.location.href = url;
    },700); 
        }else{
          swal({
          title: "oops!",
          text: "Deactivation canceled!",
          icon: "error",
          button: "Yes!",
        });
        }
    });
});
$('.deactive-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record  will be deactivated!',
        icon: 'warning',
        dangerMode: true,
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
          swal({
          title: "Congratulation!",
          text: "You have successfully deactivated!",
          icon: "success",
          button: "Yes!",
        });
        setTimeout(function () {
          window.location.href = url;
    },700); 
        }else{
          swal({
          title: "oops!",
          text: "Deactivation Failed!",
          icon: "error",
          button: "Yes!",
        });
        }
    });
});
</script>
<!---Edit--->
<script>
 
 $(document).ready(function () {
        $(document).on("click",".edit1",function () {
         $('#staticBackdrop-3').show();
          var eid = $(this).data('id');
          $.ajax({
              url: "edit/addmissionadminupdate.php",
              type: "POST",
              cache: false,
              data:{id:eid},
              success: function (data) {
                $("#data-3 table").html(data);
                
              }
              });
        });
        //save update Form
        $(document).on("click","#edit-submit",function () {
          for ( instance in CKEDITOR.instances )
        CKEDITOR.instances[instance].updateElement();

         var edId = $("#edit-id").val();
         var meta_titleU = $("#meta_titleU").val();
          var meta_descriptionU = $("#meta_descriptionU").val();
          var meta_keywordsU = $("#meta_keywordsU").val();
          var post_nameU = $("#post_nameU").val();
          var exampletimepickerU = $("#exampletimepickerU").val();
          var timepickerU = $("#timepickerU").val();
          var ExampletimepickerU = $("#ExampletimepickerU").val();
          var TimepickerU = $("#TimepickerU").val();
          var informationU = $("#informationU").val();
          var post_headingU = $("#post_headingU").val();
          var adimpdateU = $("#adimpdateU").val();
          var apply_feeU = $("#apply_feeU").val();
          var eligibilityU = $("#eligibilityU").val();
          var agelimitU = $("#agelimitU").val();
          var detail_admissU = $("#detail_admissU").val();
          var coursename_admissU = $("#coursename_admissU").val();
          var additionalU = $("#additionalU").val();
          var extra_linksU = $("#extra_linksU").val();
          var applylinkU = $("#applylinkU").val();
          var notificationU = $("#notificationU").val();
          var ofcl_linkU = $("#ofcl_linkU").val();
          var addpageU = $("#addpageU").val();
          $.ajax({
              url: "ajax/ajax-createpdf.php",
              type: "POST",
              data:{id:edId,meta_title:meta_titleU,meta_description:meta_descriptionU,meta_keywords:meta_keywordsU,post_name_admiss:post_nameU,post_date_admiss:exampletimepickerU,
                post_time_admiss:timepickerU,post_update_date_admiss:ExampletimepickerU,post_update_time_admiss:TimepickerU,information_admiss:informationU,head_admiss:post_headingU,impdate_admiss:adimpdateU,
                applyfee_admiss:apply_feeU,eligibility_admiss:eligibilityU,agelimit_admiss:agelimitU,detail_admiss:detail_admissU,coursename_admiss:coursename_admissU,additional:additionalU,extra_links:extra_linksU,applylink_admiss:applylinkU,notification:notificationU,
                offcllink_admiss:ofcl_linkU,pagename_admiss:addpageU},
              success: function (data) {
                swal({
          title: "Congratulation!",
          text: "You have successfully updated!",
          icon: "success",
          button: "Yes!",
        });
        setTimeout(function () {
          window.location.href = window.location.href;
    },700);
              }
              });
        });
        
 });
      </script>
  <!---bootsrap-js--->
<script src="https://sarkarijoboffer.in/dist/js/bootstrap.min.js"></script> 
<script src="https://sarkarijoboffer.in/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://sarkarijoboffer.in/dist/js/jquery-3.2.1.slim.min.js"></script>
<!---jQuery-->
<script src="https://sarkarijoboffer.in/dist/js/jquery-3.5.1.min.js"></script>
<!--time picker-->
<script src="https://sarkarijoboffer.in/dist/js/jquery-ui.js"></script>
<script src="https://sarkarijoboffer.in/dist/js/jquery.timepicker.min.js"></script>

<script type="text/javascript">
    function copy(copyId){
    let inputElement = document.createElement("input");
    inputElement.type = "text";
    let copyText = document.getElementById(copyId).innerHTML;
    inputElement.value = copyText;
    document.body.appendChild(inputElement);
    inputElement.select();
    document.execCommand('copy');
    document.body.removeChild(inputElement);
    
    document.getElementById("alert").style.display = "block";
    setTimeout(function(){
        document.getElementById("alert").style.display = "none";
    }, 1000);
}
</script>
 </body>
</html>
