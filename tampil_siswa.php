<?php
require('connect_db.php');
?>

<!DOCTYPE Html>
<html>
    <head>
        <title>TAMBAH SISWA</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <a class="btn btn-success" href="<?php echo $base_url.'/belajar_xrpl3/tambah_siswa.php'; ?>">Tambah Siswa</a>
            <br><br>
            <div class="row">
                <div class="col-md-12">
                <table class="table table-stripped table-bordered">
                    <tr>
                        <th>NAMA SISWA</th>
                        <th>ALAMAT SISWA</th>
                        <th>UMUR SISWA</th>
                        <th>KELAS SISWA</th>
                        <th>KETERANGAN SISWA</th>
                    </tr>

                <?php
                    $query = 'SELECT * FROM siswaa';
                    $result = pg_query($connect, $query) or die('Error message: ' . pg_last_error());

                    while ($row = pg_fetch_row($result)) {
                        echo '<tr>';
                        echo '<td>'.$row[0].'</td>';
                        echo '<td>'.$row[1].'</td>';
                        echo '<td>'.$row[2].'</td>';
                        echo '<td>'.$row[3].'</td>';
                        echo '<td><a href="'.$base_url.'/belajar_xrpl3/ubah_siswa.php?id='.$row[0].'">Ubah</a> | <a class="text-danger" href="'.$base_url.'/belajar_xrpl3/hapus_siswa.php?id='.$row[0].'">Hapus</a></td>';
                        echo '</tr>';
                    }
                ?>
                </div>
            </div>
        </div>
        
</table>
</body>
</html>