<?php
    require('connect_db.php');

    //get data sebelum diupdate
    function get_data($con, $id){
        $query = "SELECT * FROM siswa WHERE id=".$id;
        $result = pg_query($con, $query) or die('Error message: ' . pg_last_error());
        $row = pg_fetch_assoc($result);
        return $row;
    }
?>
<!DOCTYPE Html>
<html>
    <head>
        <title>UBAH SISWA</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <?php
            //proses update data
            if(@$_POST['submit']){

                function validasi(){
                    $check = 0;

                    //validasi form
                    if(@$_POST['nama'] = NULL){
                        $check += 1;
                    }
                    return $check;
                }
                

                if(validasi() == 0) {
                    $query = "UPDATE siswa SET nama='".$_POST['nama']."' WHERE id=".$_POST['id'];
                    $result = pg_query($connect, $query);

                    if($result){
                        header("location:$base_url./belajar_xrpl3/tampil_siswa.php");
                    }
                } else {
                    echo '<div class="alert alert-danger">Pastikan data yang diisi sudah lengkap!.</div>';
                }
            } else {
                //ambil data sebelum di edit
                if(@$_GET['id']){
                    $siswa = get_data($connect, $_GET['id']);
                } else {
                    header("location:$base_url./belajar_xrpl3/tampil_siswa.php");
                }
            }
        ?>

        <div class="container"> 
            <h2>Ubah Siswa</h2>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <label for="form_nama" class="form-label">Nama Siswa</label>
                        <input type="hidden" name="id" value="<?php echo (@$siswa['id']) ? $siswa['id']:""; ?>"><br>
                        <input class="form-control" id="form_nama" type="text" name="nama" placeholder="Masukan Nama..." value="<?php echo (@$siswa['nama']) ? $siswa['nama']:""; ?>" require><br>
                        <input class="btn btn-success" type="submit" name="submit" value="SIMPAN">
                        <a class="btn btn-primary" href="<?php echo $base_url.'/belajar_xrpl3/tampil_siswa.php'; ?>">Kembali</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>