<?php include_once "config.php";

    mysqli_query($con, "DELETE FROM news WHERE id = '$_GET[id]'") or die (mysqli_error($con));
    echo "<script>window.location='index.php';</script>";
?>
