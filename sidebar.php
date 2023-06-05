<?php
$url = $_SERVER['REQUEST_URI'];
?>

<div class="sidebar bg-dark text-white">
    <div class="p-3">
        <h2>Toko App</h2>
    </div>
    <div class="mt-5 d-flex flex-column">
        <a href="/toko-app/index.php" class="sidebar-item text-decoration-none text-white py-3 px-3 w-100 <?php echo ($url == "/toko-app/index.php" || $url == "/toko-app/") ?  "item-active" : "" ?>">List
            Produk</a>
        <a href="/toko-app/tambah-produk.php" class="sidebar-item text-decoration-none text-white py-3 px-3 w-100 <?php echo ($url == "/toko-app/tambah-produk.php") ?  "item-active" : "" ?> ">Tambah
            Produk</a>

    </div>
</div>