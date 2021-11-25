<?php 


// echo "hello world \n <br>";
// $adi="Oğuzhan";
// $soyadi="Aydınay";

// define("constant","this is a constant");
// echo constant."<br>";

// $array = array("this", "is", "an", "array");

// foreach ($array as $key => $value) {
//     # code...
//     echo $value."\n";
//     echo $key."\n";
// }

// echo "<br>";

// function method($variable){
//     echo $variable;
// }

// method($adi);

// for ($i=0; $i < 5; $i++) { 
//     # code...
//     echo $adi."\n".$soyadi."\n";
//     echo "$i kere çalıştırıldı <br>";
// }


// $a = "123456";
// if (strlen($a) < 5) {
//     # code...
//     echo "Değişkenin uzunluğu ".strlen($a);
// }else if(strlen($a) == 5){
//     echo "Değişkenin uzunluğu ".strlen($a);
// }else{
//     echo "Değişkenin uzunluğu ".strlen($a);
// }

// echo substr($a,4);

// echo strstr($a,"5");

//explode();

// interface ExampleInterface{
//     public function exampleMethod();
// }

// class ExampleClass implements ExampleInterface{
//     public function exampleMethod(){
//         echo "this is works";
//     }
// }

// $class = new ExampleClass();

// $class->exampleMethod();

// include "business.php";
// echo $deneme;

require("connection.php");


if($baglan){

    $sorgu = mysqli_query($baglan,"SELECT * FROM musteriler");
    // if (mysqli_num_rows($sorgu) > 0) {
    //     $row = mysqli_fetch_row($sorgu);
    //     echo $row[0];
    // }else
    //     echo "veri yok";

    // if (mysqli_num_rows($sorgu) > 0) {
    //     $row = $sorgu->fetch_array(MYSQLI_ASSOC);
    //     echo $row["musteri_adi"];
    // }else
    //     echo "veri yok";
        
    if (mysqli_num_rows($sorgu) > 0) {
        while($row=mysqli_fetch_assoc($sorgu)){
            // echo "id: ".$row["id"]." Müşteri Adı: ".$row["musteri_adi"]." Müşteri Soyadı: ".$row["musteri_soyadi"]
            //     ." Müşteri Hesap Numarası: ".$row["musteri_hesap_no"]."<br>";
            $array = array(
                "id" => $row["id"],
                "musteri_adi" => $row["musteri_adi"],
                "musteri_soyadi" => $row["musteri_soyadi"],
                "musteri_hesap_no" => $row["musteri_hesap_no"]
            );
            echo $array["musteri_adi"];
        }
        mysqli_close($baglan);
    }else
        echo "veri yok";


}else
    echo "veritabanına bağlanmadı";


?>