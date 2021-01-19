<?php
if(isset($_POST['btnLogin'])){
    include 'Koneksi/koneksi.php';
  $username = $_POST['username'];
  $password = $_POST['password'];


  $query = "SELECT * from login where username ='$username' and password='$password'";
  $result = mysqli_query($con,$query);


  if(mysqli_num_rows($result)>0){
    $_SESSION['user']=$_POST['username'];
    echo "<script>window.location='home.php'</script>";
  }

  else{
    echo "<script>alert('Username atau password salah')</script>";
    echo "<script>window.location='login.php'</script>";
  }
}
?>