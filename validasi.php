<?php
if(isset($_POST['btnLogin'])){
    include 'Koneksi/koneksi.php';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $role = $_POST['role'];


  $query = "SELECT * from login where username ='$username' and password='$password' and role='$role'";
  $result = mysqli_query($con,$query);


  if(mysqli_num_rows($result)>0){
    if($role == "Dosen"){
      echo "<script>window.location='homedosen.php'</script>";
    }
    else{
      echo "<script>window.location='home.php'</script>";
    }
  }

  else{
    echo "<script>alert('Username, password atau role salah')</script>";
    echo "<script>window.location='login.php'</script>";
  }
}
?>