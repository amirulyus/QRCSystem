<?php
require('../Register/db.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>QRC System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <style>
  table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        h2 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #d4d5f5;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
           /* text-align: center;*/
        }
 
        td {
            font-weight: lighter;
        }
        </style>
</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav">
  <li class="nav-item">
      <a class="nav-link" href="../index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../praktisqr2/index.php">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../list/index.php">List</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../qrcodecam/index.php">Cam Scanner</a>
    </li>
  </ul>
</nav>
<style>
img
    </style>
</head>
<body>
<div class="form">
<h2>Detail Individu</h2>
<table width="25%" border="1" style="border-collapse:collapse;">
<thead>
<?php
$count=1;
$_GET= ["id_matrik"];
$sql = "SELECT * FROM details_members ORDER BY id_matrik DESC";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<tr><th><strong>QR Codes</strong></th>
<td  align="center"><?php echo "<img src='../Register/imageqr/".$row['imageqr']."' height='180' width='180'>"; ?></td>
</tr>
<tr><th><strong>No Matrik</strong></th>
<td><?php echo $row["id_matrik"]; ?></td></tr>
<tr><th><strong>Name</strong></th>
<td><?php echo $row["fullname"]; ?></td></tr>
<tr><th><strong>Department</strong></th>
<td><?php echo $row["department"]; ?></td></tr>
<tr><th><strong>Level</strong></th>
<td><?php echo $row["level"]; ?></td></tr>
<tr><th><strong>branch</strong></th>
<td><?php echo $row["branch"]; ?></td></tr>

</thead>
<tbody>
<?php $count++; } ?>
</tbody>
</table><br>
<center><a href="http://localhost/QRCSystem/list/index.php" class="btn btn-primary">Back</a>&nbsp;&nbsp;<button onclick="window.print();" class="btn btn-danger">Print</button></center>
</div>
</body>
</html>