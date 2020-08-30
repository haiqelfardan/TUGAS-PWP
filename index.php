<?php 
include('GuruClass.php');
include('PelajaranClass.php');
include('SiswaClass.php');

$guru = new Guru();
$data_guru = $guru->show();

$pelajaran = new Pelajaran();
$data_pelajaran = $pelajaran->show();

$siswa = new Siswa();
$data_siswa = $siswa->show();

?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data Siswa</h3>
            </div>
            <div class="card-body">
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($data_siswa as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nama_siswa']."</td>";
                        echo "<td>".$row['kelas']."</td>";
                        echo "<td>".$row['alamat']."</td>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Data Guru</h3>
            </div>
            <div class="card-body">
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($data_guru as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nama_guru']."</td>";
                        echo "<td>".$row['kelas']."</td>";
                        echo "<td>".$row['alamat']."</td>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Data Pelajaran</h3>
            </div>
            <div class="card-body">
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>No</th>
                        <th>Nama Pelajaran</th>
                        <th>Kelas</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($data_pelajaran as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nama_pelajaran']."</td>";
                        echo "<td>".$row['kelas']."</td>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>