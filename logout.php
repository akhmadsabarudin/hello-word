<?
session_start();
session_destroy();
echo"<script>window.alert('Anda Telah Keluar Dari sisterm [LOGOUT}')</script>";
include"admin.php";
?>