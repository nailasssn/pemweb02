<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naila's Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container mt-4">
        <h3>Naila's Store</h3>
        <hr>
        
        <?php
        $harga_produk = [
            "tv" => 4200000,
            "kulkas" => 3100000,
            "mesin cuci" => 3800000
        ];
        ?>

        <form method="post" action="">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Customer</label> 
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                        </div> 
                        <input id="nama" name="nama" type="text" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label> 
                <div class="col-8">
                    <?php foreach ($harga_produk as $key => $value) : ?>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_<?= $key ?>" type="radio" class="custom-control-input" value="<?= $key ?>" required> 
                            <label for="produk_<?= $key ?>" class="custom-control-label"> <?= ucfirst($key) ?> </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                    <input id="jumlah" name="jumlah" type="number" class="form-control" min="1" required>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <hr>
        
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
            <?php
            $nama = $_POST['nama'];
            $produk = $_POST['produk'];
            $jumlah = (int)$_POST['jumlah'];
            
            if (isset($harga_produk[$produk])) {
                $total_harga = $harga_produk[$produk] * $jumlah;
            } else {
                $total_harga = 0;
            }
            ?>
            
            <h4>Hasil Pesanan Belanja</h4>
            <p><strong>Nama Customer:</strong> <?= htmlspecialchars($nama) ?></p>
            <p><strong>Produk:</strong> <?= ucfirst(htmlspecialchars($produk)) ?></p>
            <p><strong>Jumlah Pesanan:</strong> <?= $jumlah ?></p>
            <p><strong>Total:</strong> Rp<?= number_format($total_harga, 0, ',', '.') ?>,-</p>
        <?php endif; ?>
    </div>
</body>
</html>
