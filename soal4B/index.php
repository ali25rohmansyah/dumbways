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

  <title>Dumbways News</title>
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#">Me-<span>dumb</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active mr-auto">
            <a class="nav-link" href="add_news.php">Add News</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Add User</a>
          </li> -->
        </ul>
      </div>
    </nav>

    <div class="page-body mt-3">
    <?php
        $sql_news = mysqli_query($con, "SELECT * FROM news") or die (mysqli_error($con));
        if (mysqli_num_rows($sql_news) > 0) {
          while($data = mysqli_fetch_array($sql_news)){?>
            <div class="card mb-3" style="max-width: 100%;">
              <div class="row no-gutters">
                <div class="col-md-3">
                  <img src="images/<?php echo $data['image'] ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $data['title'] ?></h5>
                    <p class="card-text"><?php echo $data['deskripsi'] ?></p>
                    <a class="btn btn-sm float-right bg-dark text-primary mb-3" href="detail_news.php?id=<?=$data['id'] ?>"><b>Detail</b></a>
                  </div>
                </div>
              </div>
            </div>
        <?php
          }
        }else{
          echo "Tidak ada berita baru";
        }
      ?>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>