<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Inputan Data</title>

    <style>
    h1 {
            text-align: center; 
            border-bottom: 2px solid #000; 
            padding-bottom: 10px; 
            margin-top: 15px;
            margin-right: 15px;
            margin-left: 15px;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #fff;
            text-align: center;
            
            margin-top: 15px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
        }
    
        h2 {
            animation: blink 2s linear infinite, scroll 10s linear infinite;
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }

        @keyframes scroll {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-50px);
            }
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

    </style>

</head>
<body>
<header>
        <h1>Sistem Informasi Mahasiswa</h1>
        <nav>
        <ul>
            <li><a href="form-input.php">Home</a></li>
            <li><a href="index.php">Mahasiswa</a></li>
            <li><a href="form-verif.php">Admin</a></li>
        </ul>
    </nav>
    </header>
    <h2>Selamat Datang di Sistem Informasi Mahasiswa</h2>

    <footer>
        <p>&copy; Titan Damarjati 2023</p>
    </footer>

    
</body>
</html>