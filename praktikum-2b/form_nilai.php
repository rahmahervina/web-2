<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="font-size: 18px;">
    <form action="nilai_mahasiswa.php" method="POST" class="container mt-5">
    <fieldset class="border border-dark p-3 rounded" style="background-color: pink;">
    <legend class="float-none w-auto px-3 fw-bold h3">Form Nilai Mahasiswa</legend>
    <div class="form-group row">
        <label for="nim" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-adn"></i>
              </div>
            </div>
            <input id="nama" name="nama" placeholder="*Nama Mahasiswa" type="text" class="form-control" required="required" maxlength="50" minlength="3">
          </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
        <div class="col-8">
            <select id="matkul" name="matkul" class="custom-select" required="required">
                <option value="DDP">Dasar Dasar Pemrograman</option>
                <option value="BD1">Basis Data</option>
                <option value="WEB1">Pemrograman Web</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
        <div class="col-8">
            <input id="nilai_uts" name="nilai_uts" type="number" class="form-control" required="required" />
        </div>
    </div>
    <div class="form-group row">
        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
        <div class="col-8">
            <input id="nilai_uas" name="nilai_uas" type="number" class="form-control" required="required" />
        </div>
    </div>
    <div class="form-group row">
        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
        <div class="col-8">
            <input id="nilai_tugas" name="nilai_tugas" type="number" class="form-control" required="required" />
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-4 col-8">
            <button type="submit" name="proses" class="btn btn-maroon">Simpan</button>
        </div>
    </div>

    <style>
    /* Maroon button color */
    .btn-maroon {
        background-color: #800000;
        color: white;
    }
    .btn-maroon:hover {
        background-color: #660000;
        color: white;
    }
    </style>
    </fielsed>
    </legend>
    </form>
</body>
</html>