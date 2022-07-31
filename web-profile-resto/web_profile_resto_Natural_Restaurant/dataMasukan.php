<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Masukan Pelanggan</title>

  <style>
    .button {
      text-decoration: none;
      color: white;
      display: block;
      width: 200px;
      padding: 5px 5px;
      margin: 10px;
      font-size: 24px;
      text-align: center;
      border-radius: 15px;
    }

    .no-1 {
      background-color: #198754;

    }

    .no-1:hover {
      background-color: greenyellow;
    }

    body {
      background-color: #e2edff;
      padding: 0;

    }

    th {
      color: white;
    }

    td:hover {
      background: #198754;
    }

    tr:hover {
      background-color: #198754;
    }
  </style>
</head>

<body>
  <a href="contact.php" class="button no-1">Contact Us</a>

  <table border="1" cellspacing="0" cellpadding="10" align="center">
    <caption>
      <h1>Data Masukan Pelanggan</h1>
    </caption>
    <tr bgcolor="#198754">
      <th>No</th>
      <th>Nama</th>
      <th>email</th>
      <th>kritik dan saran</th>
    </tr>
    <?php
    $no = 1;
    $conn = mysqli_connect('localhost', 'root', '', 'db_restaurant');
    $ambildata = mysqli_query($conn, "SELECT * FROM tb_contact");
    while ($tampil = mysqli_fetch_array($ambildata)) {
      echo "
    <tr> 
      <td>$no</td>
      <td>$tampil[Name]</td>
      <td>$tampil[email]</td>
      <td>$tampil[kritikdansaran]</td>
      </tr>";

      $no++;
    }
    ?>
  </table>

</body>

</html>