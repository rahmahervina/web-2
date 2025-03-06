<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .harga-container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background: linear-gradient(145deg, #FFB6C1,rgba(255, 248, 225, 0.72));
        }
        .harga-container h4 {
            margin-bottom: 20px;
        }
        .harga-container ul {
            list-style-type: none;
            padding: 0;
        }
        .harga-container ul li {
            margin-bottom: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body style="font-size: 18px;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="">
                    <fieldset class="border border-dark text-black p-3 rounded" style="background-color: MistyRose;">
                        <legend class="float-none w-auto px-3 fw-bold h3">Form Belanja</legend>
                        <div class="form-group row">
                            <label for="namacus" class="col-4 col-form-label">Nama Customer</label> 
                            <div class="col-8">
                                <input id="namacus" name="namacus" placeholder="*Rahma Hervina" type="text" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4">Pilih Produk</label> 
                            <div class="col-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="produk" id="tomat" value="TOMAT" required>
                                    <label class="form-check-label" for="tomat">Tomat</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="produk" id="cabai" value="CABAI">
                                    <label class="form-check-label" for="cabai">Cabai</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="produk" id="bawangmerah" value="BAWANG_MERAH">
                                    <label class="form-check-label" for="bawangmerah">Bawang Merah</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="produk" id="bawangputih" value="BAWANG_PUTIH">
                                    <label class="form-check-label" for="bawangputih">Bawang Putih</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                            <div class="col-8">
                                <input id="jumlah" name="jumlah" type="number" required class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-maroon">Submit</button>
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
                    </fieldset>
                </form>
                
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Ensure you have the prices array
                    $ar_produk = [
                        'TOMAT' => 15000,
                        'CABAI' => 35000,
                        'BAWANG_MERAH' => 28000,
                        'BAWANG_PUTIH' => 22000
                    ];

                    // Process form
                    $nama_customer = $_POST['namacus'];
                    $produk = $_POST['produk'];
                    $jumlah = $_POST['jumlah'];

                    $harga_produk = $ar_produk[$produk];
                    $total_belanja = $harga_produk * $jumlah;

                    // Display output
                    echo "<h1>Detail Belanja</h1>";
                    echo "<p>Nama Customer: $nama_customer</p>";
                    echo "<p>Produk Pilihan: $produk</p>";
                    echo "<p>Harga per Kg: Rp " . number_format($harga_produk, 0, ',', '.') . "</p>";
                    echo "<p>Jumlah: $jumlah</p>";
                    echo "<p>Total Belanja: Rp " . number_format($total_belanja, 0, ',', '.') . "</p>";
                }
                ?>
            </div>

            <div class="col-md-6">
                <br>
                <div class="harga-container">
                    <h4 class="text-center">Daftar Harga ༄ ˖˚</h4>
                    <ul>
                        <li><strong>Tomat</strong>: Rp. 15.000</li>
                        <li><strong>Cabai</strong>: Rp. 35.000</li>
                        <li><strong>Bawang Merah</strong>: Rp. 28.000</li>
                        <li><strong>Bawang Putih</strong>: Rp. 22.000</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>