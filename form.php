<?php
$host = "localhost";
$name = "admin";
$pass = "1234";
$database = "eariset";

$conn = mysqli_connect($host, $name, $pass, $database);

if (!$conn) {
    return die("Connection failed: " . mysqli_connect_error());
}
$query = "SELECT * FROM research WHERE research_id=(SELECT max(research_id) FROM research)";
$id = mysqli_query($conn,$query);

$dataperson = mysqli_fetch_assoc($id);

$person = $dataperson['research_id']+1;

if (isset($_POST['btnsubmit'])){
    $publisher = 
    $title = $_POST['judul'];
    $detail = $_POST['detail'];
    $sql = "INSERT INTO research (research_id, Research_name, Description, Publisher, Status, last_updated) VALUES ('$person','$title','$detail', 10001,'Accepted',now());";
    if (mysqli_query($conn,$sql)){
        echo ("<script>
          window.alert('Data Berhasil Ditambahkan');
          window.location.href= 'homedosen.php';
          </script>");
    }
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data Diri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <?php 
  include 'navdosen.php';
    ?>
    <div class="page-wrap">
<div class= "container">
    <div class= "row">
        <div class= "col-md-12">
            <h1 align = "center">Research Project</h1>
        </div>
    </div>

    <form action="form.php" method="post">
    <div class="form-group">
    <label for="researchid"><h3>Research ID</h3></label>
    <input type="text" class="form-control" id="researchid" readonly placeholder="<?php echo $person?>">
  </div>
  <div class="form-group">
    <label for="researchtitle"><h3>Research Title</h3></label>
    <input type="text" class="form-control" id="researchtitle" placeholder="Research Title here" name="judul">
  </div>
  <div class="form-group">
    <label for="detail"><h3>Details</h3></label>
    <textarea class="form-control" id="detail" rows="10" style="overflow: auto;" name="detail"></textarea>
  </div>
  <input type="submit" class="btn btn-primary" name="btnsubmit">
</form>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>