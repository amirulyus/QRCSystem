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
 
        td {
            background-color: #d4d5f5;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
        </style>



<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav">
  <li class="nav-item">
      <a class="nav-link" href="../index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../Register/index.php">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../list/index.php">List</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../qrcodecam/index.php">Cam Scanner</a>
    </li>
  </ul>
</nav>

</head>
<body>
<div class="form">
<centre><h2>View Records</h2></centre>
<button onclick="window.print();" class="btn btn-danger">Print</button>
<table width="90%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Bil</strong></th>
<th><strong>No Matrik</strong></th>
<th><strong>Name</strong></th>
<th><strong>Department</strong></th>
<th><strong>Level</strong></th>
<th><strong>branch</strong></th>
<th><strong>QR Codes</strong></th>
<th><strong>Action</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sql = "SELECT * FROM details_members ORDER BY id_matrik DESC";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["id_matrik"]; ?></td>
<td align="center"><?php echo $row["fullname"]; ?></td>
<td align="center"><?php echo $row["department"]; ?></td>
<td align="center"><?php echo $row["level"]; ?></td>
<td align="center"><?php echo $row["branch"]; ?></td>
<td align="center"><?php echo "<img src='../Register/imageqr/".$row['imageqr']."' height='100' width='100'>"; ?></td>
<!--<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>-->
<td align="center">
<a href="delete.php?id_matrik=<?php echo $row["id_matrik"]; ?>" class="btn btn-danger">Delete</a>&nbsp;&nbsp;
<a href="view_id.php?student_id=<?php echo $row["id_matrik"]; ?>" class="btn btn-warning">View</a>
<a href="print_all.php?student_id=<?php echo $row["id_matrik"]; ?>" class="btn btn-primary">View All</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>