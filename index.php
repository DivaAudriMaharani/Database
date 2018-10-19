<html>
<head>
  <title>Data</title>
  <link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>

  <div class="container">
    <h2><center>DATA PESERTA</center></h2>
    <table class="tabel" align="center">
  <tr>
    <th>Id</th>
    <th>Username</th>
    <th>Password</th>
    <th>Level</th>
    <th>Full Name</th>
  </tr>
  </div>
  <?php
  // 1. Lakukan include koneksi.php untuk membuat koneksi
  include('koneksi.php');
  // 2. Buat perintah SQL untuk menampilkan data
  $sql_tampil ="SELECT * FROM tableuser";
  // 3. Jalankan perintah diatas dengan fungsi mysqli_query
  $peserta=mysqli_query($conn,$sql_tampil);
  // 4. Lakukan fetch dengan result type MYSQL_ASSOC
  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
    echo'
    </tr>
      <td>'.$baris_data['Id'].'</td>
      <td>'.$baris_data['Username'].'</td>
      <td>'.$baris_data['Password'].'</td>
      <td>'.$baris_data['Level'].'</td>
      <td>'.$baris_data['Full Name'].'</td>
    </tr>';
  }
  ?>
</body>
</html>