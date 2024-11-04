<?php
$db = mysqli_connect("localhost", "root", "", "test");
$query = mysqli_query($db, "SELECT * FROM list");
// Mengecek apakah ada data yang dikembalikan oleh query
$username = $_POST["remove"];
$sql = "DELETE FROM list WHERE username = '$username';";
echo $sql;

// if (mysqli_query($db, $sql)) {
//     header('location:testy.php')
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($db);
// }
?>