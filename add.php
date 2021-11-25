<?php
require("connection.php");

if ($baglan) {
    if ($_POST) {   
        if ($_POST["adi"] && $_POST["soyadi"] && $_POST["hesap_no"]) {
            $adi = $_POST["adi"];
            $soyadi = $_POST["soyadi"];
            $musteri_hesap_no = $_POST["hesap_no"];
        }else {
            echo "lütfen bütün alanları doldurunuz";
        }
    }else {
        echo "Data yok";
    }
}else {
    echo "bağlantı başarısız";
}

$insert = mysqli_query($baglan, "INSERT INTO musteriler (musteri_adi, musteri_soyadi, musteri_hesap_no) 
    values('".$adi."', '".$soyadi."','".$musteri_hesap_no."')");

mysqli_close($baglan);
echo "kayıt başarılı";