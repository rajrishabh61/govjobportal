<?php

include_once("configure/config.php");
include_once("configure/userconfig.php");


$status=1;
$sql = "SELECT * FROM info_detail  WHERE status=? ORDER BY id DESC LIMIT 13";
$stmt = $mysqli->prepare($sql); 
$stmt->bind_param("s", $status);
$stmt->execute();
$result15 = $stmt->get_result();

$status=1;
$sql1 = "SELECT * FROM admitcard  WHERE status=? ORDER BY id DESC LIMIT 13";
$stmt1 = $mysqli->prepare($sql1); 
$stmt1->bind_param("s", $status);
$stmt1->execute();
$admit_result = $stmt1->get_result();

$status=1;
$sql2 = "SELECT * FROM scholarship WHERE status=? ORDER BY id DESC LIMIT 5";
$stmt2 = $mysqli->prepare($sql2); 
$stmt2->bind_param("s", $status);
$stmt2->execute();
$schlar_result = $stmt2->get_result();

$status=1;
$sql3 = "SELECT * FROM admission WHERE status=? ORDER BY id DESC LIMIT 5";
$stmt3 = $mysqli->prepare($sql3); 
$stmt3->bind_param("s", $status);
$stmt3->execute();
$admis_result = $stmt3->get_result();

$status=1;
$sql4 = "SELECT * FROM home_gov WHERE status=? ORDER BY id DESC ";
$stmt4 = $mysqli->prepare($sql4); 
$stmt4->bind_param("s", $status);
$stmt4->execute();
$dream_result = $stmt4->get_result();

$status=1;
$sql5 = "SELECT * FROM home_links WHERE status=? ORDER BY id DESC ";
$stmt5 = $mysqli->prepare($sql5); 
$stmt5->bind_param("s", $status);
$stmt5->execute();
$rowlink = $stmt5->get_result();

$status=1;
$sql6 = "SELECT * FROM result_home WHERE status=? ORDER BY id DESC LIMIT 13";
$stmt6 = $mysqli->prepare($sql6); 
$stmt6->bind_param("s", $status);
$stmt6->execute();
$hmresult = $stmt6->get_result();

$status=1;
$sql7 = "SELECT * FROM syllabus WHERE status=? ORDER BY id DESC LIMIT 5";
$stmt7 = $mysqli->prepare($sql7); 
$stmt7->bind_param("s", $status);
$stmt7->execute();
$hmsyllabus = $stmt7->get_result();


$status=1;
$N_SQL = "SELECT * FROM announcement WHERE status=? ORDER BY id DESC LIMIT 3";
$STATEMENT = $mysqli->prepare($N_SQL); 
$STATEMENT->bind_param("i",$status);
$STATEMENT->execute();
$RESULT = $STATEMENT->get_result();

?>