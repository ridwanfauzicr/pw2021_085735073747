 <?php
  require 'functions.php';

  //ambil id dari URL

  $id = $_GET['id'];

  //query mahasiswa berdasarkan id
  $m = query("SELECT * FROM mahasiswa WHERE id = $id");

  ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Detail</title>
 </head>

 <body>
   <h3>Detail Mahasiswa</h3>

   <ul>
     <li><img src="img/<?= $m['gambar']; ?>" width="50"></li>
     <li>Nrp : <?= $m['nrp']; ?></li>
     <li>Nama : <?= $m['nama']; ?></li>
     <li>Email : <?= $m['email']; ?></li>
     <li>Jurusan : <?= $m['jurusan']; ?></li>
     <li><a href="">ubah</a> | <a href="">hapus</a></li>
     <li><a href="latihan3.php">kembali ke daftar mahasiswa</a></li>
   </ul>
 </body>

 </html>