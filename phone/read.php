<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "software_dev";
$conn = mysqli_connect($servername, $username, $password, $database_name);

$task_id = $_GET['id'];
$sql = "SELECT * FROM phone WHERE id='{$task_id}'";

$results = mysqli_query($conn, $sql);

?>
<!doctype html>
<html lang="en">
    <head>

    </head>
    <body>
        <?php while($array = mysqli_fetch_assoc($results)) : ?>
            <p>ID: <?php echo $array['id']; ?></p>
            <h2>TITLE: <?php echo $array['first'] . $array['last'];?></h2>
            <h3>DETAILS: <?php echo $array['email'];?></h3>
        <?php endwhile;?>

    <a href="all.php">See all contacts</a>
    </body>
</html>