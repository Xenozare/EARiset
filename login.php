<?php 
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
  </head>
  <body style="background-color: lightgray">
  <form action="validasi.php" method="POST">
  <div class="container"> 
    <h1 class="text-center mt-5 mb-5">Login</h1>
    <div class="container-fluid w-50 bg-info">
    <div class="row">
      <div class="col text-center">
        <img src="img/mainlogo.jpg" class="rounded-circle w-25 mt-3">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label class="text-dark mt-3">Username :</label>
        <input type="text" class="form form-control" placeholder="Masukkan username anda" name="username">
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <label class="text-dark">Password :</label>
        <input type="password" class="form form-control" placeholder="*******" name="password">
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
      <label class="text-dark">Role :</label>
      <select name="role">
        <option value="Dosen">Dosen</option>
        <option value="Mahasiswa">Mahasiswa</option>
  </select>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col text-center">
        <button type="submit" name="btnLogin" class="btn btn-success mb-5 mt-3 text-white">Login</button>
      </div>
    </div>
    </div>
  </div>
  </form>
  </body>
</html>