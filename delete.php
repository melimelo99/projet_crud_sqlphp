<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>APPLICATION BIBLIOTHEQUE</title>
    <link rel="stylesheet" href="style.css" type='text/css'>
</head>
<body>
    <?php
        $servername = "localhost";
        $username='root';
        $password='';
        $dbname="M2i_PHP_MYSQL";

        $conn=mysqli_connect($servername, $username, $password, $dbname);

        $sql="DELETE FROM bibliotheque WHERE id_book=".$_GET['id'];

        mysqli_query($conn, $sql);
        header('Location:index.php');


    ?>
</body>

</html>
