<?php
include "Database.php";
include "Classhandle.php";

$data = new DatabaseConnection();
$classhandle = new Classhandle($data);

if (isset($_POST['submit'])) {
    $classhandle->addData($_POST['Produk_Id'], $_POST['Produk_Nama'], $_POST['Jumlah_Stok'], $_POST['Supplies_id'], $_POST['Persediaan']);
}

if (isset($_POST['hapus'])) {
    $classhandle->removeData($_POST['hapus']);
}

$info = $classhandle->getData();
$data->closeConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="style.css">
    <title>Uas Pemweb</title>
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="Galeri.css"> 
    <title>Main Page</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Persediaan Stok Produk Galeri Itera</h1>
            <img src="Logo_ITERA.png" alt="Galeri Icon" class="gambar">
        </div>

        <div class="content">
            <h2>Silahkan Isi Data Produk</h2>

            <form method="post">
                <label for="Produk_Id">Id Produk:</label>
                <input type="text" id="Produk_Id" name="Produk_Id" required><br>

                <label for="Produk_Nama">Nama Produk:</label>
                <input type="text" id="Produk_Nama" name="Produk_Nama" required><br>

                <label for="Jumlah_Stok">Jumlah Stok:</label>
                <input type="text" id="Jumlah_Stok" name="Jumlah_Stok" required><br>

                <label for="Supplies_id">Id Supplies:</label>
                <input type="text" id="Supplies_id" name="Supplies_id" required><br>

                <label for="Persediaan">Persediaan:</label>
                <input type="radio" id="available" name="Persediaan" value="available">
                <label for="available">available</label>
                <input type="radio" id="sold" name="Persediaan" value="sold">
                <label for="sold">sold</label><br>


                <input type="submit" name="submit" value="Submit">
            </form>

            <!-- Data Deletion Form -->
            <form method="post">
                <label for="hapus">Hapus Data (berdasarkan Produk_Id):</label>
                <input type="text" id="hapus" name="hapus" required>
                <button type="submit">Hapus</button>
            </form>

            <table id="dataTable" border="1">
                <tr class="tabel">
                    <th>Produk_Id</th>
                    <th>Produk_Nama</th>
                    <th>Jumlah_Stok</th>
                    <th>Supplies_id</th>
                    <th>Persediaan</th>
                </tr>
                <?php
                foreach ($info as $row) {
                    echo "
                    <tr>
                        <td>{$row['Produk_Id']}</td>
                        <td>{$row['Produk_Nama']}</td>
                        <td>{$row['Jumlah_Stok']}</td>
                        <td>{$row['Supplies_id']}</td>
                        <td>{$row['Persediaan']}</td>
                    
                    </tr>";
                }
                ?>
            </table>

        </div>
        <div class="footer">
            <p class="footer-text">Institut Teknologi Sumatera</p>
        </div>
    </div>
</body>

</html>

    <script src="beta.js"></script>
</body>
</html>