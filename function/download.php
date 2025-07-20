<?php
include_once("../configure/config.php");
$id = isset($_GET['id'])? $_GET['id'] : "";
    $sql456=$mysqli->prepare("SELECT * FROM syllabus where id= ?");
    $sql456->bindParam("i",$id);
    $sql456->execute();
    $res456=$sql456->fetch();

$file ='uploads/'.$res456->myfile;
if(!file_exists($file)){
  echo"Error ";
}else{
  
header('Content-type: application/pdf'); 
  
header('Content-Disposition: inline; filename="' .$file. '"'); 
  
header('Content-Transfer-Encoding: binary'); 
  
header('Accept-Ranges: bytes'); 
  
// Read the file 
@readfile($file);  
}
?>
check
<?php
if(!defined('MyConst')) {
    header("Location : https://sarkarijoboffer.in/accessdenied");
   die();
}
?>