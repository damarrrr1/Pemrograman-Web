<?php
include 'koneksi.php';

$id = $_GET['id_mhs'];
$mahasiswa = mysqli_query($koneksi, "select * from mahasiswa where id_mhs='$id'");
$row = mysqli_fetch_array($mahasiswa);

$jurusan = ['TEKNIK INFORMATIKA', 'TEKNIK ELEKTRO', 'REKAMEDIS'];

function active_radio_button($value, $input)
{
    $result = $value == $input ? 'checked' : '';
    return $result;
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Talent</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            text-align: center;
            border-bottom: 2px solid #000;
            padding: 10px;
            margin-top: 15px;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
        }

        table td {
            padding: 10px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            background-color: #f44336;
            color: white;
            padding: 10px 15px;
            border-radius: 4px;
            margin-left: 10px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Form Edit</h1>
    </header>

    <form method="post" action="edit.php">
        <input type="hidden" value="<?php echo $row['id_mhs']; ?>" name="id_mhs">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" value="<?php echo $row['nim']; ?>" name="nim"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin']) ?>>Laki laki
                    <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin']) ?>>Perempuan
                </td>
            </tr>
            <tr>
                <td>JURUSAN</td>
                <td>
                    <select name="jurusan">
                        <?php
                        foreach ($jurusan as $j) {
                            echo "<option value='$j'";
                            echo $row['jurusan'] == $j ? 'selected="selected"' : '';
                            echo ">$j</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input value="<?php echo $row['alamat']; ?>" type="text" name="alamat"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                    <a href="admin.php">Kembali</a>
                </td>
            </tr>
        </table>
    </form>

    <footer>
        <p>&copy; Titan Damarjati 2023</p>
    </footer>
</body>

</html>
