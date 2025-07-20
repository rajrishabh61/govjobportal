<?php
include_once("../configure/config.php");
include_once("../configure/userconfig.php");
// $result15=mysqli_query($mysqli, "SELECT* from info_detail ORDER  by id DESC ");
// $admit_result=mysqli_query($mysqli, "SELECT * from admitcard ORDER  by id  DESC ");
// $hmresult=mysqli_query($mysqli, "SELECT* from result_home ORDER  by id DESC ");
// $hmsyllabus=mysqli_query($mysqli, "SELECT* from syllabus ORDER  by id DESC ");
// $schlar_result=mysqli_query($mysqli, "SELECT* from scholarship ORDER  by id DESC ");
// $admis_result=mysqli_query($mysqli, "SELECT* from admission ORDER  by id DESC");

$status=1;
$sql = "SELECT * FROM info_detail  WHERE status=? ORDER BY id DESC";
$stmt = $mysqli->prepare($sql); 
$stmt->bind_param("s", $status);
$stmt->execute();
$result15 = $stmt->get_result();

$status=1;
$sql1 = "SELECT * FROM admitcard  WHERE status=? ORDER BY id DESC";
$stmt1 = $mysqli->prepare($sql1); 
$stmt1->bind_param("s", $status);
$stmt1->execute();
$admit_result = $stmt1->get_result();

$status=1;
$sql2 = "SELECT * FROM scholarship WHERE status=? ORDER BY id DESC";
$stmt2 = $mysqli->prepare($sql2); 
$stmt2->bind_param("s", $status);
$stmt2->execute();
$schlar_result = $stmt2->get_result();

$status=1;
$sql3 = "SELECT * FROM admission WHERE status=? ORDER BY id DESC";
$stmt3 = $mysqli->prepare($sql3); 
$stmt3->bind_param("s", $status);
$stmt3->execute();
$admis_result = $stmt3->get_result();

$status=1;
$sql6 = "SELECT * FROM result_home WHERE status=? ORDER BY id DESC";
$stmt6 = $mysqli->prepare($sql6); 
$stmt6->bind_param("s", $status);
$stmt6->execute();
$hmresult = $stmt6->get_result();

$status=1;
$sql7 = "SELECT * FROM syllabus WHERE status=? ORDER BY id DESC ";
$stmt7 = $mysqli->prepare($sql7); 
$stmt7->bind_param("s", $status);
$stmt7->execute();
$hmsyllabus = $stmt7->get_result();
?>