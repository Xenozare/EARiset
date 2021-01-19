<?php
session_unset();
session_destroy();
?>

<script>
	window.location = "login.php";
</script>

<?php
exit();
?>