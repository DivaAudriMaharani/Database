<html>
<head>
  <title>Data</title>
  <link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>

  <div class="container">
    <h1><center>DATA SISWA</center></h1>
    <p><center><b>KELAS XI RPL 4</b></center></p>
    <table class="tabel" align="center">
  <tr>
    <th>Id</th>
    <th>Username</th>
    <th>Password</th>
    <th>Level</th>
    <th>Fullname</th>
    <th>Aksi</th>
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
    ?>

    </tr>
      <td><?php echo $baris_data['Id']; ?></td>
      <td><?php echo $baris_data['Username']; ?></td>
      <td><?php echo $baris_data['Password']; ?></td>
      <td><?php echo $baris_data['Level']; ?></td>
      <td><?php echo $baris_data['Full Name']; ?></td>

      <td>
      <a class="ubah" href="ubah.php?Id=<?php echo $baris_data['Id']; ?>">Edit</a> |
      <a class="hapus" href="delete.php?Id=<?php echo $baris_data['Id']; ?>">Hapus</a>
      </td>

    </tr>'
  <?php } ?>
</body>
</html>