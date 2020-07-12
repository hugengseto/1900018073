<a href="form.html">Kembali ke form</a>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        body{
            background-image: url('https://maxipro.co.id/wp-content/uploads/2019/06/4-cara-paling-mudah-dalam-menjilid-buku-sendiri.jpg'); 
            background-size: cover;
        }
    </style>
</head>
<body>
    <?php 
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $eror = false;

    if(@$_POST['nama'] == ''){
        echo "Nama tidak boleh kosong</br>";
        $eror=true;
    }
    if(@$_POST['alamat'] == ''){
        echo "Alamat tidak boleh kosong</br>";
        $eror=true;
    }
    if(strlen (@$_POST['telp']) < 10){
        echo "No.Handphone tidak boleh kosong</br>";
        $eror=true;
    }
    if(empty(@$_POST['kelamin'])){
        echo "jenis kelamin tidak boleh kosong</br>";
        $eror=true;
    }
    if(@$_POST['sumbangan']==''){
        echo "jumlah sumbangan tidak boleh kosong";
        $eror=true;
    }
    if(!$eror){
        echo "Terima kasih data sudah valid</br>";
    }if (isset($_POST['nama']) && $_POST['nama']!='') {
        $nama = $_POST['nama'];
    }if (isset($_POST['alamat']) && $_POST['alamat'] != '') {
        $alamat = $_POST['alamat'];
    }if (isset($_POST['telp']) && $_POST['telp'] != '') {
        $telp = $_POST['telp'];
    }if (isset($_POST['kelamin']) && $_POST['kelamin'] != '') {
        $kelamin = $_POST['kelamin'];
    }if (isset($_POST['sumbangan']) && $_POST['sumbangan'] != '') {
        $sumbangan = $_POST['sumbangan'];
    }
 ?>
<?php  
    $fp = fopen("daftarSumbangan.txt", "a+");
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $kelamin = $_POST['kelamin'];
    $sumbangan = $_POST['sumbangan'];

    fputs($fp,"$nama|$alamat|$telp|$kelamin|$sumbangan\n");
    fclose($fp);

    echo "<a href=lihatdaftar.php>Lihat Daftar Sumbangan Buku Bekas/Layak Baca<a/><br>";

 ?>

</body>
</html>
