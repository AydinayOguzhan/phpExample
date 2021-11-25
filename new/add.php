<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // echo $_GET["id"];
    ?>

    <form action="addFaq.php" method="POST">
        <input name="question" placeholder="question" autofocus />
        <input name="answer" placeholder="answer" />
        <button type="submit">Ekle</button>
    </form>


</body>

</html>