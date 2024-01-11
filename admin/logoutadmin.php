<?php
	session_start();
	session_destroy();
	header("location:login1admin.php");
?>