<?php $ipk = 3; ?>
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
        <h5 class="text-center mb-3">DAFTAR BEASISWA AKADEMIK</h5>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
         <form action="result.php" class="p-5" style="margin-top: -50px;" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Masukan Nama</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
                <div class="mb-3">
            <label>Masukan Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label>Masukan Alamat</label>
            <input type="alamat" class="form-control" name="alamat" required>
        </div>
                <div class="mb-3">
            <label>Nomer HP</label>
            <input type="number" class="form-control" name="hp" required>
        </div>
        <div class="mb-3">
            <label>Semester Saat Ini</label>
            <select class="form-select" name="semester" required> 
                <option value="">--Pilih Semester--</option>
                <?php for($i = 1; $i <= 8; $i++) {
                echo '<option value='.$i.'>'.$i.'</option>';
                } ?>
            </select>
        </div>
        <div class="mb-3">
            <label>IPK Terakhir</label>
            <input value="<?php echo "$ipk"; ?>" type="number" class="form-control" name="ipk" id="ipk" required>
        </div>
        <?php if($ipk < 3) { echo '
            <div class="mb-3">
            <label>Pilih Beasiswa</label>
            <select class="form-select" disabled>
                <option value="">--Pilih Beasiswa--</option>
                <option value="Akademik">Akademik</option>
                <option value="Non Akademik">Non Akademik</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Upload Berkas Syarat</label>
            <input type="file" class="form-control" disabled>
        </div>';} else {
            echo '
                        <div class="mb-3">
            <label>Pilih Beasiswa</label>
            <select class="form-select" name="beasiswa" required>
                <option value="">--Pilih Beasiswa--</option>
                <option value="Akademik">Akademik</option>
                <option value="Non Akademik">Non Akademik</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Upload Berkas Syarat</label>
            <input type="file" class="form-control" name="file" required>
        </div>
            ';
        } ?>
        <button type="submit" class="btn btn-primary w-100 mt-2">Submit</button>
        </form>
    </div>
        </div>
        <div class="col-2"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>