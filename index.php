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
    <?php
        $servername = "localhost";
        $username='root';
        $password='';
        $dbname="M2i_PHP_MYSQL";

        $conn=new mysqli($servername, $username, $password, $dbname);

        $query = 'select * from bibliotheque';
        $result = $conn->query($query);
    ?>

    <div><h2>Books list</h2></div>
    <table id='table'>
        <tr class='trTable'>
            <th>No.</th>
            <th>Author</th>
            <th>Title</th>
            <th>Publisher</th>
            <th colspan=2>Action</th>
        </tr>
       
        <?php
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr class='trTable'>";
                echo "<td>".$row["id_book"]. "</td><td>" . $row["book_author"]. "</td><td> " . $row["book_title"]. "</td><td>" . $row["book_publisher"]."</td><td>". "<a class='linkTable' href='delete.php?id=".$row['id_book']."'>Delete</a><a class='linkTable' href='update.php?id=".$row['id_book']."'>Update</a></td>";
                echo "</tr>";
        }
        ?>
       
      
    </table>


</body>

</html>
