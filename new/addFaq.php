<?php 
    require_once("connection.php");

    if ($_POST) {
        $question = $_POST["question"];
        $answer = $_POST["answer"];

        if ($question == "" || $answer == "") {
            echo "Lütfen boş alan bırakmayınız";
        }else{
            if ($conFaq) {
                $query = mysqli_query($conFaq,"INSERT INTO faq(question,answer) 
                values('".$question."','".$answer."')");
                if ($query === true) {
                    header("Location: add.php");
                }else
                    echo "Ekleme işlemi başarısız";
                
            }else{
                echo "Bağlantı başarısız";
            }   
        }

    }else{
        echo "Bu bir post metodu değil";
    }
?>