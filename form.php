<a href="form.html">Kembali ke form</a>
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
    if(@$_POST['agama'=='islam'||'kristen'||'hindu'||'buddha'||'konghucu']) {
        echo "Agama tidak boleh kosong</br>";
        $eror=true;
    }
    if(@$_POST['prest']=''){
    	echo "prestasi tidak boleh kosong, jika kosong ketik tidak ada prestasi</br>";
    	$eror=true;
    }
    if(!$eror){
        echo "Terima kasih data sudah valid</br>";
    }
 ?>