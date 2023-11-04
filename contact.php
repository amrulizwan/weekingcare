<?php
if(isset($_POST['submit'])){
$nama = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

header("Location:https://api.whatsapp.com/send?phone=6282340616393&text=Halo%20kak%20saya%20".$nama."%20ingin%20bertanya%3F");
}
?>