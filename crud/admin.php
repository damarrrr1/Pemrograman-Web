<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Talent</title>
    <style>
        
        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }


        body {
            margin: 0;
            padding-right: 15px;
            padding-left: 15px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        nav {
            width: 100%;
            
            color: #fff;
            text-align: center;
            margin-right: 40px;
            margin-left: 40px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around;
            
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            margin-bottom: 15px;
            
        }

        table, th, td {
            border: 2px solid black;
        }

        th {
            padding: 8px;
            text-align: center;
        }

        td {
            padding: 8px;
            text-align: left;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        h1 {
            text-align: center; 
            border-bottom: 2px solid #000; 
            padding-bottom: 10px; 
            margin-top: 15px;
        }

        footer {
            margin-top: auto;
            text-align: center;
            background-color: #f4f4f4;
            padding: 10px;
        }
    </style>
</head>
<body>
<h1>Sistem Informasi Mahasiswa</h1>
<nav>
        <ul>
            <li><a href="form-input.php">Home</a></li>
            <li><a href="index.php">Mahasiswa</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>
    </nav>
<h2>List Mahasiswa</h2>
<table border="1">
    <tr><th>NO</th><th>NIM</th><th>NAMA</th><th>GENDER</th><th>JURUSAN</th><th>ALAMAT</th><th>ACTION</th>
</tr>
<?php
include 'koneksi.php';
$mahasiswa=mysqli_query($koneksi, "SELECT * from mahasiswa ");
$no=1;
foreach ($mahasiswa as $row){
    $jenis_kelamin=$row['jenis_kelamin']=='p'?'Perempuan':'Laki laki';
    echo "<tr>
    <td>$no</td>
    <td>".$row['nim']."</td>
    <td>".$row['nama']."</td>
    <td>".$jenis_kelamin."</td>
    <td>".$row['jurusan']."</td>
    <td>".$row['alamat']."</td>
    <td><a href='form-edit.php?id_mhs=$row[id_mhs]'>Edit</a>
    <a href='delete.php?id_mhs=$row[id_mhs]'>Delete</a>
    </td>
    </tr>";
    $no++;
}
?>
</table>
<form method="post" action="simpan.php">
        <table>
            <tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" name="nim"></td></tr>
            <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
            <tr><td>JENIS KELAMIN</td><td>
                <input type="radio" name="jenis_kelamin" value="L">Laki laki
                <input type="radio" name="jenis_kelamin" value="P">Perempuan
            </td></tr>
            <tr><td>JURUSAN</td><td>
                <select name="jurusan">
                    <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                    <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                    <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                </select>
            </td>
        </tr>
        <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
        <tr><td colspan="2"><button type="sumbit" value="simpan">SIMPAN</button></td></tr>
        </table>    
    </form>

<footer>
        <p>&copy; <?php ?> Titan Damarjati 2023</p>
    </footer>
    
</body>
</html>
