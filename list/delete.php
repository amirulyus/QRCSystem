<?php
require('../Register/db.php');

// Check connection
if (isset($_GET['id_matrik'])){
    mysqli_query($conn,"DELETE FROM details_members WHERE id_matrik='$_GET[id_matrik]'");

    echo "Data berjaya dipadam";
    echo "<meta http-equiv=refresh content=2;URL='index.php'>";
}
?>