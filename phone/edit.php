<?php
if(isset($_POST['submit-btn'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "software_dev";
    $conn = mysqli_connect($servername, $username, $password, $database_name);


    $firstname = $_POST['first'];
    $lastname = $_POST['last'];
    $email = $_POST['email'];
    $phone_id = $_POST['phone_id'];

    $sql = "UPDATE phone SET first = '{$firstname}', last = '{$lastname}', email = '{$email}' WHERE id='{$phone_id}'";

    mysqli_query($conn, $sql);
}


?>

<!doctype html>
<html lang="en">
<head>

</head>
<body>
<form action="edit.php" method="POST">
    <input type="text" placeholder="first-name" name="first">
    <input type="text" placeholder="last-name" name="last">
    <input type="text" placeholder="email" name="email">
    <input type="hidden" name="phone_id" value="<?php echo $_GET['id']?>">
    <input type="submit" name="submit-btn">
    <br>
    <a href="all.php">See all contacts</a>

</form>
</body>
</html>
