<?php 
isset($_POST['submit']) ? $submit = $_POST['submit'] : $submit = '';
$nama = $_POST['name'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$message = $_POST['message'];

header("Location:https://api.whatsapp.com/send?phone=6285238543351&text=Hallo%2C%20Bundaaa%21%0AWelcome%20to%20We%20King%20Care%F0%9F%92%96%0ASilahkan%20melengkapi%20format%20pendaftaran%20%3B%0A%0ANama%20%3A%20".$nama."%0AUmur%20%3A%20".$umur."%20Tahun%0AAlamat%20%3A%20".$alamat."%0AEmail%20%3A%20".$email."%0AKeluhan%20%3A%20".$message."%0APaket%20%3A%20TestPaket%0AMetode%20Pembayaran%20%3A%0A%28ATM%20BSI%2FBRI%2FMandiri%29%0A%0ANB%20%3A%0A%2A%20Mohon%20tidak%20menelfon%20ke%20no.%20WA%20atau%20voice%20call%0A%2A%20Pendaftaran%20dapat%20dilakukan%201%20%28satu%29%20hari%20sebelum%20tanggal%20booking%0A%2A%20Untuk%20jam%20pendaftaran%20via%20wa%20mulai%20jam%2008.00%20-16.00%20Wita.");
?>