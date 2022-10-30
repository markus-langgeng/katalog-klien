<div class="main">
    <div class="container">
        <h1>HALAMAN HOMEEEEEEEE</h1>
        <p>Buat front end nya di sini (src/app/views/home/index.php)</p>
        <p>Utk hlm login, ada di http://localhost/katalog-klien/public/login</p>
        <p>Utk nulis css, js, dan gambar, ada di /katalog-klien/public/</p>

        <hr>
        <br>
        <h2>Data Klien</h2>

        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">

                <thead class="align-top">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Klien</th>
                        <th scope="col">Jenis Order</th>
                        <th scope="col">Tgl Order</th>
                        <th scope="col">Status Order</th>
                        <th scope="col">Sumber Order</th>
                        <th scope="col">Domain Tujuan</th>
                        <th scope="col">Price (USD)</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

            <?php
            $no = 1;
            foreach ($data["clients"] as $client):
                ?>

                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $client["nama_client"] ?></td>
                        <td><?= $client["jenis_order"] ?></td>
                        <td><?= $client["tgl_order"] ?></td>
                        <td><?= $client["status_order"] ?></td>
                        <td><?= $client["sumber_order"] ?></td>
                        <td><?= $client["domain_tujuan"] ?></td>
                        <td><?= $client["price"] ?></td>
                        <td class="d-grid gap-2 d-md-block">
                            <button type="button" class="btn btn-primary btn-sm">
                                Detail
                            </button>
                            <button type="button" class="btn btn-primary btn-sm">
                                Edit
                            </button>
                            <button type="button" class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </td>
                    </tr>

            <?php $no++;endforeach;
            ?>
            </table>
        </div>


        <br>

        <h2>Data Semua Klien</h2>

        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">

                <thead class="align-top">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Klien</th>
                        <th scope="col">Email Klien</th>
                        <th scope="col">Jenis Order</th>
                        <th scope="col">Tgl Order</th>
                        <th scope="col">Sumber Order</th>
                        <th scope="col">Domain Tujuan</th>
                        <th scope="col">Permalink</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status Order</th>
                        <th scope="col">Tgl Bayar</th>
                        <th scope="col">ID Transaksi</th>
                        <th scope="col">Invoice Link</th>
                        <th scope="col">Akun PayPal Klien</th>
                        <th scope="col">Owner Domain</th>
                        <th scope="col">Admin</th>
                        <th scope="col">Glad</th>
                        <th scope="col">Note</th>
                    </tr>
                </thead>

            <?php
            $no = 1;
            foreach ($data["clients"] as $client):
                ?>

                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $client["nama_client"] ?></td>
                        <td><?= $client["email_client"] ?></td>
                        <td><?= $client["jenis_order"] ?></td>
                        <td><?= $client["tgl_order"] ?></td>
                        <td><?= $client["sumber_order"] ?></td>
                        <td><?= $client["domain_tujuan"] ?></td>
                        <td><?= $client["permalink"] ?></td>
                        <td><?= $client["price"] ?></td>
                        <td><?= $client["status_order"] ?></td>
                        <td><?= $client["tgl_bayar"] ?></td>
                        <td><?= $client["id_transaksi"] ?></td>
                        <td><?= $client["invoice_link"] ?></td>
                        <td><?= $client["acc_paypal_client"] ?></td>
                        <td><?= $client["owner_domain"] ?></td>
                        <td><?= $client["admin"] ?></td>
                        <td><?= $client["glad"] ?></td>
                        <td style="min-width:15rem"> <?= $client["note"] ?></td>
                    </tr>

            <?php $no++;endforeach;
            ?>
            </table>
        </div>

        <br>


    </div>
</div>
