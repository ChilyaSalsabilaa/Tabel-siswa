<?php
    require('connect_db.php');
?>
<!DOCTYPE Html>
<html>
    <head>
        <title>TAMBAH SISWA</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <figure class="text-center">
            <blockquote class="blockquote">
                <p>FORMULIR DATA SISWA.</p>
            </blockquote>
        <figcaption class="blockquote-footer">
                Isilah data berikut dengan benar! <cite title="Source Title"> & sesuai dengan perintahnya</cite>
        </figcaption>
</figure>

    </head>
    <body>
        <?php
            if(@$_POST['submit']){

                function validasi(){
                    $check = true;

                    //validasi form
                    if(@$_POST['nama'] == NULL){
                        $check = false;
                    }

                    return $check;
                }
                

                if(validasi() == true) {
                    $sql = "INSERT INTO siswaa (nama,alamat) VALUES ('".$_POST['nama']."','".$_POST['alamat']."''".$_POST['umur']."')";
                    $result = pg_query($connect, $sql);

                    if($result){
                        echo '<div class="alert alert-success">Tambah data siswa berhasil.</div>';
                    }
                } else {
                    echo '<div class="alert alert-danger">Pastikan data yang diisi sudah lengkap!.</div>';
                }
            }
        ?>

        <div class="container"> 
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                        <label for="form_nama" class="form-label">Nama Siswa</label>
                        <input class="form-control" id="form_nama" type="text" name="nama" placeholder="Masukan Nama..." value="<?php echo (@$_POST['nama']) ? $_POST['nama']:""; ?>" require><br>
                       
                        <label for="form_alamat" class="form-label">Alamat Siswa</label>
                        <input class="form-control" id="form_alamat" type="text" name="alamat" placeholder="Masukan Alamat..." value="<?php echo (@$_POST['alamat']) ? $_POST['alamat']:""; ?>" require><br>
 
                        <label for="form_umur" class="form-label">Umur Siswa</label>
                        <input class="form-control" id="form_umur" type="text" name="umur" placeholder="Masukan Umur..." value="<?php echo (@$_POST['umur']) ? $_POST['umur']:""; ?>" require><br>

                        <select class="form-select form-select-sm" aria-label="Small select example">
                            <option selected>Kelas Siswa</option>
                            <option value="1"> X RPL 1 </option>
                            <option value="2">X RPL 2</option>
                            <option value="3">X RPL 3</option>
                            <option value="3">X RPL 4</option>
                            <option value="3">X RPL 5</option>
                            <option value="3">X RPL 6</option>
                            <option value="3">X RPL 7</option>
                            <option value="3">X RPL 8</option>
                        </select>

                        <input class="btn btn-success" type="submit" name="submit" value="SIMPAN">
                        <a class="btn btn-primary" href="<?php echo $base_url.'/belajar_xrpl3/tampil_siswa.php'; ?>">Kembali</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>