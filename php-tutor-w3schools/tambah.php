<?php
$db = mysqli_connect("localhost", "root", "", "test");
$query = mysqli_query($db, "SELECT * FROM list");
// Mengecek apakah ada data yang dikembalikan oleh query
echo "hai";
// $db = mysqli_connect("localhost", "root", "", "test");
$username = $_POST["username"];
$password = $_POST["password"];
echo "$username $password";
$sql = "INSERT INTO list (username, password) VALUES ('$username', '$password')";

if (mysqli_query($db, $sql)) {
    header('location:testy.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
?>