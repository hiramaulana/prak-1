<h1> Update Mahasiswa </h1>

<?php 

    error_reporting(0);
    include 'koneksi.php';
    $db = new Database();
    $con = $db->Connect();

    if(isset($_POST['update'])){

        $nama = $_POST['nama'];
        $npm = $_GET['npm'];
        $query = mysqli_query($con, "UPDATE tb_mahasiswa SET nama='$nama' WHERE npm='$npm'");
        echo "<script>alert('Update Success');document.location.href='index.php'</script>";

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

                if($_GET['npm'] == $data['npm']){
                    $disabled = "";
                    $hidden = "hidden";
                    $hidden1 = "";
                }else{
                    $disabled = "disabled";
                    $hidden = "";
                    $hidden1 = "hidden";
                }

        ?>  
            <tr>
                <td><input type="text" name="npm" value="<?php echo $data['npm'] ?>" disabled></td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>" <?php echo $disabled ?>></td>
                <td <?php echo $hidden ?>><a href="?npm=<?php echo $data['npm'] ?>">Update</a></td>
                <td <?php echo $hidden1 ?>><input type="submit" name="update" value="Simpan"></td>
            </tr>
        <?php  } ?>

    </table>

</form>