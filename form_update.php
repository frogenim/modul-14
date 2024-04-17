<?php
//form edit atau update
    include "koneksi.php";
    $nis = $_GET['nis'];
    $query = "SELECT * FROM tb_ekskul WHERE nis = '$nis' ";
    $hasil = mysqli_query($koneksi,$query);
    $data = mysqli_fetch_array($hasil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Edit</title>
</head>
<body>
    <div class="container mt-5">
        <form action="proses_update.php" method="post">
            <table class="table">
                <tr>
                    <td class="text-start"><b>NIS</b></td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="nis" id="nis" value="<?php echo $data['nis']; ?>"></td>
                </tr>
                <tr>
                    <td class="text-start"><b>Nama</b></td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data['nama']; ?>"></td>
                </tr>
                <tr>
                    <td class="text-start"><b>Kelas</b></td>
                    <td>:</td>
                    <td>
                        <select class="form-select" name="kelas" id="kelas" value="<?php echo $data['kelas']; ?>">
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-start"><b>Tanggal Lahir</b></td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="ttl" id="ttl" value="<?php echo $data['ttl']; ?>"></td>
                </tr>
                <tr>
                    <td class="text-start"><b>Alamat</b></td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td class="text-start"><b>Kota</b></td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="kota" id="kota" value="<?php echo $data['kota']; ?>"></td>
                </tr>
                <tr>
                    <td class="text-start"><b>Jenis Kelamin</b></td>
                    <td>:</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" value="L">
                            <label class="form-check-label">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" value="P">
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-start"><b>Hobby</b></td>
                    <td>:</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="hobi[]" value="Membaca"><label class="form-check-label">Membaca</label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="hobi[]" value="Olahraga"><label class="form-check-label">Olahraga</label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="hobi[]" value="Menyanyi"><label class="form-check-label">Menyanyi</label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="hobi[]" value="Menari"><label class="form-check-label">Menari</label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="hobi[]" value="Traveling"><label class="form-check-label">Traveling</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-start"><b>Pilihan Ekskul</b></td>
                    <td>:</td>
                    <td>
                        <select class="form-select" name="ekskul[]" id="ekskul" size="6" multiple>
                            <option value="Pramuka">Pramuka</option>
                            <option value="Basket">Basket</option>
                            <option value="Volly">Volly</option>
                            <option value="Band">Band</option>
                            <option value="Seni Tari">Seni Tari</option>
                            <option value="Robotic">Robotic</option>
                            <option value="Bulu Tangkis">Bulu Tangkis</option>
                            <option value="Broadcasting">Broadcasting</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="grid gap-3">
                            <input class="btn btn-primary" type="submit" value="Submit"><input class="btn btn-secondary" type="reset" value="Reset">
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>