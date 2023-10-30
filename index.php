<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemograman3.com</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            text-align: center;
            margin: 0 auto;
            max-width: 800px;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
        }

        header h1 {
            margin: 0;
        }

        .contain {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        a {
            text-decoration: none;
        }

        .box {
            background-color: #3498db;
            color: white;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s;
            flex: 1;
            min-width: 200px;
        }

        .box:hover {
            background-color: #e74c3c;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>MENU PEMOGRAMAN 3</h1>
        </header>
        <div class="contain">
            <a href="tampil_barang.php">
                <div class="box">BARANG</div>
            </a>

            <a href="tampil_kategori.php">
                <div class="box">KATEGORI</div>
            </a>

            <a href="tampil_member.php">
                <div class="box">MEMBER</div>
            </a>

            <a href="tampil_penjualan.php">
                <div class="box">PENJUALAN</div>
            </a>

            <a href="tampil_transaksi.php">
                <div class="box">TRANSAKSI</div>
            </a>

            <a href="tampil_user.php">
                <div class="box">USER</div>
            </a>

            <a href="view_report.php">
                <div class="box">VIEW REPORT</div>
            </a>
        </div>
        <footer>
            Created by Iqbal
        </footer>
    </div>
</body>

</html>