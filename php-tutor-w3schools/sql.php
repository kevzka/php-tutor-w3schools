<!-- <?php
$db = mysqli_connect("localhost", "root", "", "test");
$query = mysqli_query($db, "SELECT * FROM list");
// Mengecek apakah ada data yang dikembalikan oleh query

?>

<table border="1">
    <tr>
        <th>
            id
        </th>
        <th>
            username
        </th>
        <th>
            password
        </th>
        <th>
            crud
        </th>
        
    </tr>
    <?php
    if (mysqli_num_rows($query) > 0) {
        // Looping melalui tiap row
        while ($row = mysqli_fetch_assoc($query)) {
            // Inisialisasi tiap kolom
            $kolom1 = $row['id'];
            $kolom2 = $row['username'];
            $kolom3 = $row['password'];
            // Dan seterusnya jika ada kolom lain

            // Tampilkan data tiap row
            echo "
            <tr>
            <td>
            $kolom1
            </td>
            <td>
            $kolom2
            </td>
            <td>
            $kolom3
            </td>
            <td>
            <p><a href=\"#\">edit</a>||<a href=\"#\">remove</a></p>
            </td>
            </tr>
            ";
        }
    } else {
        echo "Tidak ada data yang ditemukan.";
    }
    ?>
</table> -->