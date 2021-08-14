<h1> Daftar Mahasiswa </h1>

<?php 

    include 'koneksi.php';
    $db = new Database();
    $con = $db->Connect();

    $query=mysqli_query($con, "SELECT * FROM tb_mahasiswa");
    while($data=mysqli_fetch_array($query)){
        echo $data['npm']."<br>";
        echo $data['nama']."<br>";
    }

?>