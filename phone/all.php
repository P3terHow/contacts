<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "software_dev";
    $conn = mysqli_connect($servername, $username, $password, $database_name);

    $sql = "SELECT * FROM phone";

    $results = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">
    <head>

    </head>
    <body>

        <h3><a href="create.php"> Create a new profile </a><h3/>

        <?php while($array = mysqli_fetch_assoc($results)): ?>
            <a href ="read.php?id=<?php echo $array['id'];?>"><?php echo $array['id'] . ":" . $array['first'] . " " . $array['last'];?></a>
            <p><a href="delete.php?id=<?php echo $array['id'];?>">Delete</a></p>
            <p><a href="edit.php?id=<?php echo $array['id'];?> ">Edit</a></p>
            <br>
            <hr>
        <?php endwhile; ?>
    </body>
</html>