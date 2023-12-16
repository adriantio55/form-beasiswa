<?php
   echo '
   <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-3">
        <div class="row d-flex">
            <div></div>
            <div class="flex-grow-1">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomer HP</th>
                <th scope="col">Semester</th>
                <th scope="col">IPK Terakhir</th>
                <th scope="col">Beasiswa</th>
                <th scope="col">Status Ajuan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>'.$_REQUEST['nama'].'</td>
                <td>'.$_REQUEST['email'].'</td>
                <td>'.$_REQUEST['alamat'].'</td>
                <td>'.$_REQUEST['hp'].'</td>
                <td>'.$_REQUEST['semester'].'</td>
                <td>'.$_REQUEST['ipk'].'</td>
                <td>'.$_REQUEST['beasiswa'].'</td>
                <td>Belum di verifikasi</td>
                </tr>
                <tr>
            </tbody>
            </table>
            </div>
            <div class="row d-flex">
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
   ';
?>