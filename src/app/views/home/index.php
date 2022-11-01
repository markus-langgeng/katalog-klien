<main>
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
            <button class="btn btn-primary col-2 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambahkan Data</button>
        </div>

        <?php require_once "clients_table.php" ?>

        <br>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="judulmodal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="judulmodal">Data Klien</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
             <form action="" method="">

             <div class="form-group">
                <label for="no" class="form-label">No</label>
                <input type="number" class="form-control" placeholder="Choose Number" id="no" name="no">
            </div>

            <div class="form-group">
                <label for="nama" class="form-label">Nama Klien</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email Klien</label>
                <input type="email" class="form-control" placeholder="namemail@example.com" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="jenisorder">Jenis Order</label>
                <input type="text" class="form-control" id="jenisorder" name="jenisorder">
            </div>

            <div class="form-group">
                <label for="tanggal" class="form-label">Tanggal Order</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>

            <div class="form-group">
                <label for="sumberorder" class="form-label">Sumber Order</label>
                <input type="text" class="form-control" id="sumberorder" name="sumberorder">
            </div>

            <div class="form-group">
                <label for="domaintujuan" class="form-label">Domain Tujuan</label>
                <input type="text" class="form-control" placeholder="www.example.com" id="domaintujuan" name="domaintujuan">
            </div>

            <div class="form-group">
                <label for="permalink" class="form-label">Permalink</label>
                <input type="text" class="form-control" id="permalink" name="permalink">
            </div>

            <div class="form-group">
                <label for="price" class="form-label">Harga</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>

            <div class="form-group">
                <label for="statusorder" class="form-label">Status Orderan</label>
                <input type="text" class="form-control" id="statusorder" name="statusorder">
            </div>

            <div class="form-group">
                <label for="tanggal" class="form-label">Tanggal Bayar</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>

            <div class="form-group">
                <label for="idtransaksi" class="form-label">ID Transaksi</label>
                <input type="text" class="form-control" id="idtransaksi" name="idtransaksi">
            </div>

            <div class="form-group">
                <label for="invoicelink" class="form-label">Link Invoice</label>
                <input type="text" class="form-control" id="invoicelink" name="invoicelink">
            </div>

            <div class="form-group">
                <label for="accpaypalclient" class="form-label">Akun Paypal Klien</label>
                <input type="text" class="form-control" placeholder="name@paypalexample.com" id="accpaypalclient" name="accpaypalclient">
            </div>

            <div class="form-group">
                <label for="ownerdomain" class="form-label">Pemilik Domain</label>
                <input type="text" class="form-control" id="ownerdomain" name="ownerdomain">
            </div>

            <div class="form-group">
                <label for="admindomain" class="form-label">Admin Domain</label>
                <input type="text" class="form-control" id="admindomain" name="admindomain">
            </div>

            <div class="form-group">
                <label for="note" class="form-label">Catatan</label>
                <input type="text" class="form-control" id="note" name="note">
            </div>

            <div class="form-group">
                <label for="glad" class="form-label">Glad</label>
                <input type="text" class="form-control" id="glad" name="glad">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary">Masukkan Data</button>
            </form>
          </div>
        </div>
      </div>
    </div>

</main>
