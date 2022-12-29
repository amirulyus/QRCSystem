<?php

// error_reporting(1);
$mysqli = mysqli_connect("127.0.0.1", "root", "", "qr_convo");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$student_id = $_GET['student_id'];

// echo "student_id: " . $student_id;

$sql = "SELECT id_matrik, fullname, department, level, branch FROM details_members WHERE id_matrik = '$student_id'";
// echo $sql;
$result = mysqli_query($mysqli, $sql);
if (mysqli_num_rows($result) > 0) {
    // echo "data wujud";
    $data = mysqli_fetch_array($result);
    echo $data[0] . "|" . $data[1] . "|" . $data[2] . "|" . $data[3] . "|" . $data[4];
} else {
    echo "data tidak wujud";
}
// $result->free_result();



// query untuk baca member details based on student id
