<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Laundry - Pemrograman Web Dasar </title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>
<body style="background: #f0f0f0">


<?php include 'header.php'; ?>

<div class="container">
    <br /><br /><br />
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Edit Pelanggan</h4>
            </div>
            <div class="panel-body">

                <?php
                include '../koneksi.php';

                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE idPelanggan='$id'");
                while ($d = mysqli_fetch_array($data)) { ?>
                    <form method="post" action="pelanggan_update.php">
                        <div class="form-group">
                            <label>Nama</label>
                            <!-- form id pelanggan yang di edit, untuk di kirim ke file aksi -->
                            <input type="hidden" name="id" value="<?php echo $d['idPelanggan']; ?>">
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama.."<?php echo $d['namaPelanggan']; ?>">
                        </div>
                        <div class="form-group">
                            <label>HP</label>
                            <input type="number" class="form-control" name="hp" placeholder="Masukkan no.hp.." value="<?php echo $d['hpPelanggan']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat.." value="<?php echo $d['alamatPelanggan']; ?>">
                        </div>
                        <br />
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>

</body>

</html>