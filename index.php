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
            <h2>Daftar Produk</h2>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama produk</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Produk</td>
                        <td>Stok</td>
                        <td>harga</td>
                        <td>
                            <a href="/toko-app/edit-produk.php" class="btn btn-primary btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm btn-delete" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="123">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus produk ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <form action="edit-produk.php" method="post">
                        <input id="produk-id" type="hidden" name="id" value="1" />
                        <button type="submit" name="hapus" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
    <script>
        const deleteBtn = document.querySelectorAll(".btn-delete");
        const deleteModal = document.querySelector("#deleteModal");
        const produkId = document.querySelector("#produk-id");
        deleteBtn.forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                produkId.setAttribute('value', id);
            });
        });
    </script>
</body>

</html>