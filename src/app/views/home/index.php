<div class="main">
    <div class="container">

        <div class="row mt-3">
            <?php Flasher::flash(); ?>
        </div>

        <h1>HALAMAN HOMEEEEEEEE</h1>
        <p>Buat front end nya di sini (src/app/views/home/index.php)</p>
        <p>Utk hlm login, ada di http://localhost/katalog-klien/public/login</p>
        <p>Utk nulis css, js, dan gambar, ada di /katalog-klien/public/</p>

        <hr>
        <br>

        <div class="row mb-2">
            <h2 class="col">Data Klien</h2>
            <button class="btn btn-primary col-2 me-3">Tambahkan Klien</button>
        </div>

        <?php require_once "clients_table.php" ?>

        <br>

    </div>
</div>

