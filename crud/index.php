<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Talent</title>
    <style>
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
        </ul>
    </nav>
<h2>List Mahasiswa</h2>
<table border="1">
    <tr><th>NO</th><th>NIM</th><th>NAMA</th><th>GENDER</th><th>JURUSAN</th><th>ALAMAT</th>
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
    </tr>";
    $no++;
}
?>
</table>
<footer>
        <p>&copy; <?php ?> Titan Damarjati 2023</p>
    </footer>
    
</body>
</html>
