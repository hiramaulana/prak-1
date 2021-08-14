<h1> Input Mahasiswa </h1>

<?php 

    include 'koneksi.php';
    $db = new Database();
    $con = $db->Connect();

    if(isset($_POST['proses'])){

        $query = mysqli_query($con, "INSERT INTO tb_mahasiswa VALUES('".$_POST['npm']."','".$_POST['nama']."')");
        echo "<script>alert('Submit Success');document.location.href='index.php'</script>";

    }


?>

<form action="" method="POST">

    <input type="text" name="npm">
    <input type="text" name="nama">
    <input type="submit" name="proses" value="Simpan">

</form>