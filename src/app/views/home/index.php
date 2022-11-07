<main>
    <div class="container">

        <div class="row mt-3">
            <?php Flasher::flash(); ?>
        </div>

        <div class="row mb-3">
            <h1 class="col">Data Klien</h1>
        </div>

        <div class="row mb-3">
            <div class="my-3">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo">
                                Check list kolom yang ingin ditampilkan
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php require_once "check_list.php"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-13 d-flex flex-wrap gap-2">
                <div class="col-lg-6 d-flex">
                    <button
                        id="btnTambahDataKlien"
                        class="btn btn-primary d-inline-block align-self-end"
                        data-bs-toggle="modal"
                        data-bs-target="#modalDataKlien">
                        Tambahkan Klien
                    </button>
                </div>

                <form class="col-md-3 ms-auto" action="<?= BASEURL ?>/Clients/cari" method="post">

                    <div class="input-group">
                        <input type="text"
                            class="form-control"
                            placeholder="Cari Data Klien"
                            name="keyword"
                            id="keyword"
                            autocomplete="off">

                        <button class="btn btn-primary"
                            type="submit"
                            id="tombolCari">
                            Cari
                        </button>
                    </div>

                </form>
            </div>
        </div>


        <?php require_once "clients_table.php"; ?>

        <br>

    </div>

    <div class="modal fade" id="modalDataKlien" tabindex="-1"
        aria-labelledby="judulModal"
        aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="judulModalKlien">
                        Tambah Data Klien
                    </h1>
                <button type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>

                <form action="<?= BASEURL ?>/clients/tambah"
                    method="post"
                    id="form_data_klien">

                    <div class="modal-body">
                            <div class="form-group">

                            <div class="form-group visually-hidden">
                                <input type="hidden" class="form-control"
                                    id="id_client"
                                    name="id_client">
                            </div>

                                <label for="nama_client" class="form-label">
                                    Nama Klien
                                </label>
                                <input type="text" class="form-control"
                                    id="nama_client"
                                    name="nama_client">
                            </div>

                            <div class="form-group">
                                <label for="email_client" class="form-label">
                                    Email Klien
                                </label>
                                <input type="email" class="form-control"
                                    placeholder="namemail@example.com"
                                    id="email_client"
                                    name="email_client">
                            </div>

                            <div class="form-group">
                                <label for="jenis_order">Jenis Order</label>
                                <input type="text" class="form-control"
                                    id="jenis_order"
                                    name="jenis_order">
                            </div>

                            <div class="form-group">
                                <label for="tgl_order" class="form-label">
                                    Tanggal Order
                                </label>
                                <input type="date" class="form-control"
                                    id="tgl_order"
                                    name="tgl_order">
                            </div>

                            <div class="form-group">
                                <label for="sumber_order" class="form-label">
                                    Sumber Order
                                </label>
                                <input type="text" class="form-control"
                                    id="sumber_order"
                                    name="sumber_order">
                            </div>

                            <div class="form-group">
                                <label for="domain_tujuan" class="form-label">
                                    Domain Tujuan
                                </label>
                                <input type="text" class="form-control"
                                    placeholder="www.example.com"
                                    id="domain_tujuan"
                                    name="domain_tujuan">
                            </div>

                            <div class="form-group">
                                <label for="permalink" class="form-label">
                                    Permalink
                                </label>
                                <input type="text" class="form-control"
                                    id="permalink"
                                    name="permalink">
                            </div>

                            <div class="form-group">
                                <label for="price" class="form-label">Harga</label>
                                <input type="text" class="form-control"
                                    id="price"
                                    name="price">
                            </div>

                            <div class="form-group">
                                <label for="status_order" class="form-label">
                                    Status Orderan
                                </label>
                                <input type="text" class="form-control"
                                    id="status_order"
                                    name="status_order">
                            </div>

                            <div class="form-group">
                                <label for="tgl_bayar" class="form-label">
                                    Tanggal Bayar
                                </label>
                                <input type="date" class="form-control"
                                    id="tgl_bayar"
                                    name="tgl_bayar">
                            </div>

                            <div class="form-group">
                                <label for="id_transaksi" class="form-label">
                                    ID Transaksi
                                </label>
                                <input type="text" class="form-control"
                                    id="id_transaksi"
                                    name="id_transaksi">
                            </div>

                            <div class="form-group">
                                <label for="invoice_link" class="form-label">
                                    Link Invoice
                                </label>
                                <input type="text" class="form-control"
                                    id="invoice_link"
                                    name="invoice_link">
                            </div>

                            <div class="form-group">
                                <label for="acc_paypal_client" class="form-label">
                                    Akun Paypal Klien
                                </label>
                                <input type="text" class="form-control"
                                    placeholder="name@paypalexample.com"
                                    id="acc_paypal_client"
                                    name="acc_paypal_client">
                            </div>

                            <div class="form-group">
                                <label for="owner_domain" class="form-label">
                                    Pemilik Domain
                                </label>
                                <input type="text" class="form-control"
                                    id="owner_domain"
                                    name="owner_domain">
                            </div>

                            <div class="form-group">
                                <label for="admin" class="form-label">Admin Domain</label>
                                <input type="text" class="form-control"
                                    id="admin"
                                    name="admin">
                            </div>

                            <div class="form-group">
                                <label for="glad" class="form-label">GLad</label>
                                <input type="text" class="form-control"
                                    id="glad"
                                    name="glad">
                            </div>

                            <div class="form-group">
                                <label for="note" class="form-label">Catatan</label>
                                <input type="text" class="form-control"
                                    id="note"
                                    name="note">
                            </div>
                    </div>

                    <div class="modal-footer">
                            <button type="button"
                                class="btn btn-danger"
                                data-bs-dismiss="modal">
                                Tutup
                            </button>

                            <button type="submit"
                                id="btnSubmitFormDataKlien"
                                class="btn btn-primary">
                                Tambahkan Data
                            </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</main>
