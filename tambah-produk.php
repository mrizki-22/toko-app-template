<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Toko app</title>
</head>

<body>
    <div class="d-flex justify-content-between">
        <div>
            <?php
            include_once("sidebar.php");
            ?>
        </div>
        <div class="table-section container p-4">
            <h2>Tambah Produk</h2>
            <div class="mt-5">
                <form action="tambah-produk.php" method="post">
                    <div class="d-flex align-items-center w-75 justify-content-between">
                        <label for="produk">Nama Produk: </label>
                        <input id="produk" type="text" class="form-control w-75 ms-2" aria-describedby="basic-addon1" required name="nama">
                    </div>
                    <div class="d-flex align-items-center w-75 justify-content-between">
                        <label for="stok">Stok: </label>
                        <input id="stok" type="number" class="form-control w-75 ms-2" aria-describedby="basic-addon1" required name="stok">
                    </div>
                    <div class="d-flex align-items-center w-75 justify-content-between">
                        <label for="harga">Harga: </label>
                        <input id="harga" type="number" class="form-control w-75 ms-2" aria-describedby="basic-addon1" required name="harga">
                    </div>
                    <div class="d-flex w-75 mt-5 justify-content-end">
                        <button class="btn btn-primary" type="submit" name="tambah">Tambah</input>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>