<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>APPLICATION BIBLIOTHEQUE</title>
    <link rel="stylesheet" href="style.css" type="text/css">   
</head>
<body>
    <nav>
        <h1> CRUD MySQLi</h1>
        <ul>
            <li><a class='linkNav' href="index.php">Home</a></li>
            <li><a class='linkNav' href="formulaire.php">Insert</a></li>
        </ul>
    </nav>
    <div><h2>Insert Book</h2></div>
    <table class="tableForm">
        <form method="post">
        
            <tr><td><label>Title</label></td></tr><tr><td><input type='text' name='title'></td></tr>
            
            <tr><td><label>Author</label></td></tr>
            <tr><td><input type='text' name='author'></td></tr>

            <tr><td><label>Publisher</label></td></tr>
            <tr><td><input type='text' name='publisher'></td></tr>
            <tr>
            <td><button type='submit' value='save' name='submit'>Save</button></td>
            </tr>
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
            //echo "author";
            if (!empty($_POST['author'])&& !empty($_POST['title'])&& !empty($_POST['publisher'])){
                $sql = "INSERT INTO bibliotheque (book_author, book_title, book_publisher) VALUES ('$author', '$title', '$publisher')";
                mysqli_query($conn, $sql);
                echo "<p>Le livre a été enregistré avec succès</p>";
            }else {
                echo "<p class='error'>Veuillez remplir tous les champs</p>";
            }   
        }
        
    ?>

</body>

</html>
