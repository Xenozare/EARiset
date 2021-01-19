<?php
$host = "localhost";
$name = "admin";
$pass = "1234";
$database = "eariset";

$conn = mysqli_connect($host, $name, $pass, $database);

if (!$conn) {
    return die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM research_dosen";
$result = mysqli_query($conn,$sql);

$id = mysqli_query($conn,"SELECT * FROM research_mahasiswa");
$data = mysqli_fetch_array($id);
?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="icons/all.css">

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
  <?php 
  include 'nav.php';
    ?>
    <div class="page-wrap">
      <?php 
      while ($row = $result->fetch_assoc()) { 
        ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="card mb-3" style="max-width: 740px">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <div class="card-body">
                        <img src="img/pp.jpeg" alt="pp test" class="images" style="height: auto; width: 100%; max-height:270px;object-fit: contain">
                      </div>
                      </div>
                      <div class="col-md-8">
                      <div class="card-body">
                          <h5 class="card-title"><?php echo $row["Research_name"]; ?></h5>
                          <p class="card-text" style="overflow: hidden; max-height: 130px"><?php echo $row["Description"]; ?></p>
                          <p class="card-text"><small class="text-muted">Last Updated <?php echo $row["last_updated"]; ?></small></p>
                          <button type="button" class="btn btn-primary btn-sm">Join Research</button>

                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                      <?php 
      }
        ?>
            </div>
</div>
    </body>
</html>