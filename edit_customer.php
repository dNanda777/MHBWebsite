<?php
    include "koneksi.php";
    $id = $_GET['idcustomer'];
    $ambilData = mysqli_query($koneksi, "SELECT * FROM customer WHERE idcustomer='$id'");
    $data=mysqli_fetch_array($ambilData);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Edit Data Customer
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">

                    <div class="form-group">
                        <label for="nama">Nama Customer</label>
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control col-md-9" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                        <label for="telp">Telepon</label>
                        <input type="number" name="telp" value="<?php echo $data['telp'] ?>" class="form-control col-md-9" placeholder="Masukkan Telepon">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" class="form-control col-md-9" placeholder="Masukkan Alamat">
                    </div>

                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input type="text" name="kota" value="<?php echo $data['kota'] ?>" class="form-control col-md-9" placeholder="Masukkan Kota">
                    </div>

                    <div class="form-group">
                        <label for="nama">Kodepos</label>
                        <input type="number" name="kodepos" value="<?php echo $data['kodepos'] ?>" class="form-control col-md-9" placeholder="Masukkan Kodepos">
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>
                </form>

            </div>
        </div>
    </div>


</body>
</html>

<?php
        if(isset($_POST['simpan']))
        {
            $nama       = $_POST['nama'];
            $telp       = $_POST['telp'];
            $alamat     = $_POST['alamat'];
            $kota       = $_POST['kota'];
            $kodepos    = $_POST['kodepos'];

            mysqli_query($koneksi, "UPDATE customer 
            SET nama='$nama', telp='$telp', alamat='$alamat', kota='$kota', kodepos='$kodepos'
            WHERE idcustomer='$id'") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang DiUpdate.... </h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-penjualan/data_customer.php'>";
        }
?>