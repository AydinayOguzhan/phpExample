<?php 
    require_once("connection.php");
    $questionId = $_GET["id"];

    if ($conFaq) {
        if ($questionId !== "") {
            $query = mysqli_query($conFaq, "DELETE FROM faq where id='".$questionId."'");
            if ($query === true) {
                header("Location: index.php");
            }else{
                echo "İşlem başarısız";
            }
        }else{
            echo "Geçersiz id";
        }   
    }else{
        echo "Bağlantı başarısız";
    }
?>