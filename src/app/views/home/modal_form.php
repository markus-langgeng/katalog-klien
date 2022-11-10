    <div class="modal fade" id="modalDataKlien" tabindex="-1"
        aria-labelledby="judulModal"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        aria-hidden="true">

        <div class="modal-dialog
            modal-dialog-centered
            modal-dialog-scrollable modal-xl">
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

                    <div class="modal-body">
                        <form action="<?= BASEURL ?>/clients/tambah"
                            method="post"
                            id="form_data_klien">

                            <div class="form-group">
                                <div class="form-group visually-hidden">
                                    <input type="hidden" class="form-control"
                                        id="id_client"
                                        name="id_client">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nama_client"
                                    class="col-form-label col-sm-2">
                                    Nama Klien
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        id="nama_client"
                                        name="nama_client">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email_client"
                                    class="col-form-label col-sm-2">
                                    Email Klien
                                </label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control"
                                        placeholder="namemail@example.com"
                                        id="email_client"
                                        name="email_client">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jenis_order" class="col-form-label col-sm-2">Jenis Order</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        id="jenis_order"
                                        name="jenis_order">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="tgl_order" class="col-form-label col-sm-2">
                                    Tanggal Order
                                </label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control"
                                        id="tgl_order"
                                        name="tgl_order">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="sumber_order" class="col-form-label col-sm-2">
                                    Sumber Order
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        id="sumber_order"
                                        name="sumber_order">
                                    </div>
                            </div>

                            <div class="row mb-3">
                                <label for="domain_tujuan" class="col-form-label col-sm-2">
                                    Domain Tujuan
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        placeholder="www.example.com"
                                        id="domain_tujuan"
                                        name="domain_tujuan">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="permalink" class="col-form-label col-sm-2">
                                    Permalink
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        id="permalink"
                                        name="permalink">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="price" class="col-form-label col-sm-2">Harga</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control"
                                        id="price"
                                        name="price">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="status_order" class="col-form-label col-sm-2">
                                    Status Orderan
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        id="status_order"
                                        name="status_order">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="tgl_bayar" class="col-form-label col-sm-2">
                                    Tanggal Bayar
                                </label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control"
                                        id="tgl_bayar"
                                        name="tgl_bayar">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="id_transaksi" class="col-form-label col-sm-2">
                                    ID Transaksi
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        id="id_transaksi"
                                        name="id_transaksi">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="invoice_link" class="col-form-label col-sm-2">
                                    Link Invoice
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        id="invoice_link"
                                        name="invoice_link">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="acc_paypal_client" class="col-form-label col-sm-2">
                                    Akun Paypal Klien
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        placeholder="name@paypalexample.com"
                                        id="acc_paypal_client"
                                        name="acc_paypal_client">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="owner_domain" class="col-form-label col-sm-2">
                                    Pemilik Domain
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        id="owner_domain"
                                        name="owner_domain">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="admin" class="col-form-label col-sm-2">Admin Domain</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        id="admin"
                                        name="admin">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="glad" class="col-form-label col-sm-2">Glad</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        id="glad"
                                        name="glad">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="note" class="col-form-label col-sm-2">Catatan</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control"
                                        id="note"
                                        name="note">
                                    </textarea>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                            <button type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal">
                                Tutup
                            </button>

                            <button type="submit"
                                form="form_data_klien"
                                id="btnSubmitFormDataKlien"
                                class="btn btn-primary">
                                Tambahkan Data
                            </button>
                    </div>

            </div>
        </div>
    </div>

