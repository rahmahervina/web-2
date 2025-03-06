<?php
// Check if the form was submitted
if (isset($_POST['proses'])) {
    // Get form values
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    // Calculate final grade
    $nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

    // Determine status (Lulus or Tidak Lulus)
    $status = ($nilai_akhir >= 55) ? 'Lulus' : 'Tidak Lulus';

    // Determine grade based on final score
    if ($nilai_akhir < 0 || $nilai_akhir > 100) {
        $grade = 'I'; // Invalid grade
    } elseif ($nilai_akhir >= 85) {
        $grade = 'A';
    } elseif ($nilai_akhir >= 70) {
        $grade = 'B';
    } elseif ($nilai_akhir >= 56) {
        $grade = 'C';
    } elseif ($nilai_akhir >= 36) {
        $grade = 'D';
    } else {
        $grade = 'E';
    }

    // Determine predicate using switch based on grade
    switch ($grade) {
        case 'A':
            $predikat = 'Sangat Memuaskan';
            break;
        case 'B':
            $predikat = 'Memuaskan';
            break;
        case 'C':
            $predikat = 'Cukup';
            break;
        case 'D':
            $predikat = 'Kurang';
            break;
        case 'E':
            $predikat = 'Sangat Kurang';
            break;
        default:
            $predikat = 'Tidak ada';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    /* Custom soft pink background */
    .bg-soft-pink {
      background-color: #ffe4e1;
    }
    .border-soft-pink {
      border-color: #ffe4e1 !important;
    }
    .text-soft-pink {
      color: #f5c6cb;
    }

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
</head>
<div class="mx-auto mt-5 border border-2 border-soft-pink p-3 bg-soft-pink text-dark rounded" style="width: 45%;">
    <h3>Hasil Nilai Mahasiswa</h3>
    <table class="table table-bordered border-soft-pink mt-3 text-dark w-75 mx-auto">
      <thead>
        <tr>
          <td><strong>Nama</strong></td>
          <td>:</td>
          <td><?= $nama_siswa; ?></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Mata Kuliah</strong></td>
          <td>:</td>
          <td><?= $mata_kuliah; ?></td>
        </tr>
        <tr>
          <td><strong>Nilai UTS</strong></td>
          <td>:</td>
          <td><?= $nilai_uts; ?></td>
        </tr>
        <tr>
          <td><strong>Nilai UAS</strong></td>
          <td>:</td>
          <td><?= $nilai_uas; ?></td>
        </tr>
        <tr>
          <td><strong>Nilai Tugas Praktikum</strong></td>
          <td>:</td>
          <td><?= $nilai_tugas; ?></td>
        </tr>
        <tr>
          <td><strong>Nilai Akhir</strong></td>
          <td>:</td>
          <td><?= number_format($nilai_akhir, 2, ',', '.'); ?></td>
        </tr>
        <tr>
          <td><strong>Status</strong></td>
          <td>:</td>
          <td><?= $status; ?></td>
        </tr>
        <tr>
          <td><strong>Grade</strong></td>
          <td>:</td>
          <td><?= $grade; ?></td>
        </tr>
        <tr>
          <td><strong>Predikat</strong></td>
          <td>:</td>
          <td><?= $predikat; ?></td>
        </tr>
      </tbody>
    </table>

    <div class="text-center my-3">
      <a href="form_nilai.php" class="btn btn-maroon">Kembali</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>