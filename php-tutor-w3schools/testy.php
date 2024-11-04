<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #submitButton {
            position: relative;
            color: transparent;
            /* Sembunyikan teks `value` */
        }

        #submitButton::after {
            content: 'Klik Saya';
            /* Gantikan teks yang tampil */
            position: absolute;
            top: 0;
            left: 0;
            color: black;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Login Sekolah</h1>
    </div>
    
    <form method="post" action="tambah.php" class="login">
        <img src="smk.jpg" alt="" class="telkom">
        <h1 class="smktelkom"><b>SMK TELKOM</b></h1>
        <p class="username">username</p>
        <input type="text" name="username">
        <p class="password">password</p>
        <input type="password" name="password">
        <br>
        <input type="submit" value="login">
        <br>
        <br>
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
        $db = mysqli_connect("localhost", "root", "", "test");
        $query = mysqli_query($db, "SELECT * FROM list");
        $i = 0;
        if (mysqli_num_rows($query) > 0) {
            // Looping melalui tiap row
            while ($row = mysqli_fetch_assoc($query)) {
                $i++;
                // Inisialisasi tiap kolom
                $kolom1 = $row['id'];
                $kolom2 = $row['username'];
                $kolom3 = $row['password'];
                // Dan seterusnya jika ada kolom lain

                // Tampilkan data tiap row
                echo "
            <tr>
            <td>
            $i
            </td>
            <td>
            $kolom2
            </td>
            <td>
            $kolom3
            </td>
            <td>
            <form method=\"POST\" action=\"remove.php\">
        <button type=\"submit\" name=\"edit\" value=\"$kolom2\">Edit</button>
        <button type=\"submit\" name=\"remove\" value=\"$kolom2\">Remove</button>
    </form>
            </td>
            </tr>
            ";
            }
        } else {
            echo "Tidak ada data yang ditemukan.";
        }
        ?>
    </table>
    </form>
</body>

</html>