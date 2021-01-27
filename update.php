<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>APPLICATION BIBLIOTHEQUE</title>
    <link rel="stylesheet" href="style.css" type='text/css'>
</head>
    <nav>
        <h1> CRUD MySQLi</h1>
        <ul>
            <li><a class='linkNav' href="index.php">Home</a></li>
            <li><a class='linkNav' href="formulaire.php">Insert</a></li>
        </ul>
    </nav>
<body>
    <h2>Update form</h2>
    <table class="tableForm">
        <form method="post">
            <tr><td><label>Title</label></td></tr>
            <tr><td><input type='text' name='title'></td></tr>
            
            <tr><td><label>Author</label></td></tr>
            <tr><td><input type='text' name='author'></td></tr>

            <tr><td><label>Publisher</label></td></tr>
            <tr><td><input type='text' name='publisher'></td></tr>
            
            <tr><td><button type='submit' value='save' name='submit'>Save</button></td></tr>
        </form>
    </table>
    <?php
        
        $servername = "localhost";
        $username='root';
        $password='';
        $dbname="M2i_PHP_MYSQL";

        $conn=mysqli_connect($servername, $username, $password, $dbname);

        if(isset($_POST['submit'])){
            $author = htmlspecialchars(trim($_POST['author']));
            $title = htmlspecialchars(trim($_POST['title']));
            $publisher = htmlspecialchars(trim($_POST['publisher']));

            if (!empty($_POST['author'])&& !empty($_POST['title'])&& !empty($_POST['publisher'])){
                $sql="UPDATE bibliotheque SET book_title ='".$title."', book_author ='".$author."', book_publisher='".$publisher."' WHERE id_book=".$_GET['id'];
                mysqli_query($conn, $sql);

                echo "<p>Le livre a été modifié avec succès</p>";
            }else {
                echo "<p class='error'>Veuillez remplir tous les champs</p>";
            }   
        }
    ?>
</body>

</html>

