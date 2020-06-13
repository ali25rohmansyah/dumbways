<?php
include_once("config.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
    <div class="container mt-4">
      <a class="btn btn-primary mb-4 btn-sm btn-block" href="index.php" role="button">Kembali</a>
      <div class="card mb-3">
      <?php  
        $id = @$_GET['id'];
        $detail = mysqli_query($con, "SELECT * FROM news WHERE id= $id");

        while($data = mysqli_fetch_array($detail)) { ?>
        <img src="images/<?= $data['image']?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?= $data['title']?></h5>
          <p class="card-text"><?= $data['deskripsi'] ?></p>
          <a class="btn btn-sm float-right btn-danger mb-3 ml-3" href="delete_news.php?id=<?=$data['id'] ?>" onclick="return confirm('Yakin ingin meghapus berita ?')"><b>Delete</b></a>
          <a class="btn btn-sm float-right btn-success mb-3" href="edit_news.php?id=<?=$data['id'] ?>"><b>Edit</b></a>
        </div>
      <?php } ?>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>