    <head><meta name=”robots” content=”noindex,nofollow”></head>
    <!--------Navigation---------->
    <nav>
        <div class="ham"><i id="bars" class="fas fa-bars"></i><i id="timess" class="fas fa-times"></i> </div>
        <div class="logo-container"><a href="..\adminsubpages\admindashboard.php"><img src="../../Img/adminlogo.png"></a></div>
        <div class="visitorname">
            <ul>
                <li>Hello <?php echo $_SESSION["username"];?><i class="fa fa-chevron-down"></i>
                <ul >
                    <li><a href="..\..\adminpage\adminsubpages/logout.php">Logout</a></li>
                </ul>
            </li>
            </ul>
        </div>
    </nav>
    <!---------sidebar------------>
   
    <div class="sidebar">
        <div class="text"><a href="https://sarkarijoboffer.in/dashboard">DASHBOARD</a></div>
        <ul class="mainul">
            <li><a href="#" class="feat-btn"><span id="iconsli" class="fa fa-house-user" style="color: #fff; padding-right: 5px;"></span>Home<span id="chevron" class="fa fa-chevron-down first"></span></a>
                <ul class="feat-show">
                    <li><a href="..\adminsubpages\adminhome">Annoncement</a></li>
                    <li><a href="..\adminsubpages\infoimplink">ImportantLink</a></li>
                </ul>
            </li>
            <li><a href="#" class="serv-btn"><span id="iconsli" class="fa fa-fire-alt"></span>Sub Pages <span id="chevron" class="fa fa-chevron-down second"></span></a>
                <ul class="serv-show">
                    <li><a href="..\adminsubpages\adminhome">Latest Job</a></li>
                    <li><a href="..\adminsubpages\adminscholarship">Others</a></li>
                    <li><a href="..\adminsubpages\adminadmission">Admission</a></li>
                    <li><a href="..\adminsubpages\homegov">Govjob Info</a></li>
                    <li><a href="..\adminsubpages\adminsyllabus">Syllabus</a></li>
                    <li><a href="..\adminsubpages\admincareer">CareerGuide</a></li>
                    <li><a href="..\adminsubpages\stategv_jb">StategovJob</a></li>
                    <li><a href="..\adminsubpages\adminresult">Result</a></li>
                </ul>
            </li>
            <li><a href="newsletter"><span  id="iconsli" class="far fa-envelope"></span>Newsletter</a></li>
            <li><a href="#" class="three-btn"><span id="iconsli" class="fas fa-briefcase"></span>AddJobInfo<span id="chevron" class="fa fa-chevron-down third"></span></a>
                <ul class="three-show">
                    <li><a href="https://sarkarijoboffer.in/infodetail">LatestJobDetail</a></li>
                    <li><a href="https://sarkarijoboffer.in/infoadmit">AdmitCardDetail</a></li>
                    <li><a href="https://sarkarijoboffer.in/infoscholar">OthersDetail</a></li>
                    <li><a href="https://sarkarijoboffer.in/infoadmission">AdmissionDetail</a></li>
                    <li><a href="https://sarkarijoboffer.in/infostgv">StateGovDetail</a></li>
                    <li><a href="https://sarkarijoboffer.in/infosylb">SyllabusDetail</a></li>
                    <li><a href="https://sarkarijoboffer.in/inforslt">ResultDetail</a></li>
                </ul>
            </li>
            <li><a href="#"><span id="iconsli" class="fas fa-phone"></span>Cantacts</a></li>
            <?php
            if($_SESSION["user_role"] == '2'){
                
           ?>
           <li><a href="#" class="four-btn"><span id="iconsli" class="fas fa-user-secret"></span>VisitorsDetail<span id="chevron" class="fa fa-chevron-down fourth"></span></a>
                <ul class="four-show">
                    <li><a href="..\adminsubpages\adminsyllabus">BlankPage</a></li>
                    <li><a href="..\adminsubpages\admincareer">BlankPage</a></li>
                    <li><a href="..\adminsubpages\stategv_jb">BlankPage</a></li>
                    <li><a href="..\adminsubpages\adminresult">BlankPage</a></li>
                </ul>
            </li>
            <li><a href="..\..\adminpage\adminsubpages\adminusersdetail"><span id="iconsli" class="fas fa-users"></span>Employee</a></li>
            <?php
               }
            ?>
        </ul>
    </div>
    
    
    <!-------------------->
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>
    <script>
    setInterval(function(){
        check_user();
    },2000);
        function check_user(){
            jQuery.ajax({
                url:'autologout.php',
                type:'post',
                data:'type=ajax',
                success:function(result){
                    if(result=='logout'){
                        window.location.href='../../adminpage/adminsubpages/logout.php';
                    }
                }
            })
        }
    </script>
