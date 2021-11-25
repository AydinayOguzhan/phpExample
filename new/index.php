<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="add.php?id=2"><button>Ekle</button></a>
    <table>
        <tr>
            <th>id</th>
            <th>question</th>
            <th>answer</th>
        </tr>
        <?php
        require_once("connection.php");

        if ($conFaq) {
            $query = mysqli_query($conFaq, "SELECT * FROM faq");
            if (mysqli_num_rows($query) > 0) {
                while ($rows = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <td><?php echo $rows["id"] ?></td>
                        <td><?php echo $rows["question"] ?></td>
                        <td><?php echo $rows["answer"] ?></td>
                        <td>
                            <a href="delete.php?id=<?php echo $rows["id"]?>"><button>Sil</button></a>
                        </td>
                    </tr>
        <?php
                }
            } else {
                echo "<h1>Veri Bulunamadı</h1>";
            }
        } else {
            echo "<h1>Bağlantı Başarısız</h1>";
        }
        ?>
    </table>
</body>

</html>