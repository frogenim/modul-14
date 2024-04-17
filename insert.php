<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
        }
        td, th {
            border: none;
        }
    </style>
</head>
<body>
    <form action="insert_proses.php" method="post">
        <div class="container md">
            <table class="table" width="50%" height="100%">
                <tr>
                    <th class="text-center"><font color="blue"><h2>Pendaftaran Ekstrakulikuler</h2></font></th>
                </tr>
                <tr>
                    <td><hr class="border border-black border-2 opacity-75"></td>
                </tr>
                <tr>
                    <table class="table">
                        <tr>
                            <td class="text-start"><b>NIS</b></td>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="nis" id="nis" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="text-start"><b>Nama</b></td>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="nama" id="nama"></td>
                        </tr>
                        <tr>
                            <td class="text-start"><b>Kelas</b></td>
                            <td>:</td>
                            <td>
                                <select class="form-select" name="kelas" id="kelas">
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-start"><b>Tanggal Lahir</b></td>
                            <td>:</td>
                            <td><input type="date" class="form-control" name="ttl" id="ttl"></td>
                        </tr>
                        <tr>
                            <td class="text-start"><b>Alamat</b></td>
                            <td>:</td>
                            <td><textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea></td>
                        </tr>
                        <tr>
                            <td class="text-start"><b>Kota</b></td>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="kota" id="kota"></td>
                        </tr>
                        <tr>
                            <td class="text-area"><b>Jenis Kelamin</b></td>
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
                                    <input type="checkbox" name="hobi[]" value="Membaca"><label for="form-check-label">Membaca</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="hobi[]" value="Olahraga"><label for="form-check-label">Olahraga</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="hobi[]" value="Menyanyi"><label for="form-check-label">Menyanyi</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="hobi[]" value="Menari"><label for="form-check-label">Menari</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="hobi[]" value="Traveling"><label for="form-check-label">Traveling</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-start"><b>Pilihan Eksul</b></td>
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
                    </table>
                    <tr>
                        <td class=""></td>
                        <td class="text-start">
                            <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
                            <button type="reset" class="btn btn-secondary" name="reset">Reset</button>
                        </td>
                    </tr>
                </tr>
            </table>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    </script>
</body>
</html>