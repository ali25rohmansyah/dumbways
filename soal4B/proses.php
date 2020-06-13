<?php
include_once("config.php");

    if(isset($_POST['submit'])) {
        $title = $_POST['title'];
        $image = $_FILES['image']['name'];
        $deskripsi = $_POST['deskripsi'];

        $target = "images/".basename($image);

        mysqli_query($con, "INSERT INTO news (title, image, deskripsi) VALUES ('$title', '$image', '$deskripsi')") or die (mysqli_error($con));

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            echo "<script>window.location='index.php';</script>";

        }else{
            echo "Failed to upload image";
        }

    }

    if(isset($_POST['edit'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $image = $_FILES['image']['name'];
        $deskripsi = $_POST['deskripsi'];

        $target = "images/".basename($image);

        mysqli_query($con, "UPDATE news SET title = '$title', deskripsi = '$deskripsi' WHERE id = '$id'") or die (mysqli_error($con));

        // if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            echo "<script>window.location='index.php';</script>";

        // }else{
            echo "Failed to upload image";
        // }

    }

    if(isset($_POST['submitUser'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        mysqli_query($con, "INSERT INTO users (name, email) VALUES ('$name', '$email')") or die (mysqli_error($con));

        echo "<script>window.location='index.php';</script>";

    }

?>