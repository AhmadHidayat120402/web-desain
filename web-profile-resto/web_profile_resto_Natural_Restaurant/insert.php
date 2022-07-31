<?php
// if (isset($Name) || isset($email) || isset($kritikdansaran)) {
$Name = $_POST['Name'];
$email = $_POST['email'];
$kritikdansaran = $_POST['kritikdansaran'];

//Database connection

$conn = new mysqli('localhost', 'root', '', 'db_restaurant');
if ($conn->connect_error) {
  die('gagal koneksi : ' . $conn->connect_error);
} else {
  $stmt = $conn->prepare("insert into tb_contact(Name, email, kritikdansaran)
   values(?,?,?)");
  $stmt->bind_param("sss", $Name, $email, $kritikdansaran);
  $stmt->execute();
  echo "<script>alert('Data Berhasil Dikirim !')
  document.location.href='dataMasukan.php';
  </script>";

  $stmt->close();
  $conn->close();
}
