<h1> Hapus Mahasiswa </h1>

<?php 

    error_reporting(0);
    include 'koneksi.php';
    $db = new Database();
    $con = $db->Connect();

    if(isset($_GET['hapus'])){

        $npm = $_GET['npm'];
        $query = mysqli_query($con, "DELETE FROM tb_mahasiswa WHERE npm='$npm'");
        echo "<script>alert('Hapus Success');document.location.href='index.php'</script>";

    }

?>

<form action="" method="POST">

    <table border="1px solid black">
        <tr>
            <td>NPM</td>
            <td>Nama</td>
            <td>Aksi</td>
        </tr>

        <?php

            $query=mysqli_query($con, "SELECT * FROM tb_mahasiswa");
            while($data=mysqli_fetch_array($query)){

        ?>  
            <tr>
                <td><input type="text" name="npm" value="<?php echo $data['npm'] ?>" disabled></td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>" disabled></td>
                <td><a href="?hapus&npm=<?php echo $data['npm'] ?>" onclick="return confirm('Yakin Hapus?')">Hapus</a></td>
            </tr>
        <?php  } ?>

    </table>

</form>