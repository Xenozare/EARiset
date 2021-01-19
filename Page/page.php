<?php
if($_GET){
  switch($_GET['page']){
    case 'HomePending':
      if(!file_exists('homepending.php'))
        die("Maaf, File tidak ditemukan");
      include 'homepending.php';
      break;
  }
}
?>