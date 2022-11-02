<main>
    <div class="container">

        <div class="row my-3">
            <h1>Detail Data Klien</h1>
        </div>

        <table class="table table-responsive table-hover table-bordered">
            <tr>
                <th scope="row">Nama Klien</th>
                <td><?= $data["detail_klien"]["nama_client"] ?></td>
            </tr>

            <tr>
                <th scope="row">Email Klien</th>
                <td><?= $data["detail_klien"]["email_client"] ?></td>
            </tr>

            <tr>
                <th scope="row">Tanggal Order</th>
                <td><?= $data["detail_klien"]["tgl_order"] ?></td>
            </tr>

            <tr>
                <th scope="row">Jenis Order</th>
                <td><?= $data["detail_klien"]["jenis_order"] ?></td>
            </tr>

            <tr>
                <th scope="row">Sumber Order</th>
                <td><?= $data["detail_klien"]["sumber_order"] ?></td>
            </tr>

            <tr>
                <th scope="row">Domain Tujuan</th>
                <td>
                    <a href="<?= $data["detail_klien"]["permalink"] ?>">
                        <?= $data["detail_klien"]["domain_tujuan"] ?>
                    </a>
                </td>
            </tr>

            <tr>
                <th scope="row">Peramalink</th>
                <td>
                    <a href="<?= $data["detail_klien"]["permalink"] ?>">
                        <?= $data["detail_klien"]["permalink"] ?>
                    </a>
                </td>
            </tr>

            <tr>
                <th scope="row">Harga</th>
                <td><?= $data["detail_klien"]["price"] ?></td>
            </tr>

            <tr>
                <th scope="row">Status Order</th>
                <td><?= $data["detail_klien"]["status_order"] ?></td>
            </tr>

            <tr>
                <th scope="row">Tanggal Bayar</th>
                <td><?= $data["detail_klien"]["tgl_bayar"] ?></td>
            </tr>

            <tr>
                <th scope="row">ID Transaksi</th>
                <td><?= $data["detail_klien"]["id_transaksi"] ?></td>
            </tr>

            <tr>
                <th scope="row">Invoice Link</th>
                <td>
                    <a href="<?= $data["detail_klien"]["invoice_link"] ?>">
                        <?= $data["detail_klien"]["invoice_link"] ?>
                    </a>
                </td>
            </tr>

            <tr>
                <th scope="row">Akun PayPal Klien</th>
                <td><?= $data["detail_klien"]["acc_paypal_client"] ?></td>
            </tr>

            <tr>
                <th scope="row">Owner Domain</th>
                <td><?= $data["detail_klien"]["owner_domain"] ?></td>
            </tr>

            <tr>
                <th scope="row">Admin</th>
                <td><?= $data["detail_klien"]["admin"] ?></td>
            </tr>

            <tr>
                <th scope="row">Glad</th>
                <td><?= $data["detail_klien"]["glad"] ?></td>
            </tr>

            <tr>
                <th scope="row">Catatan</th>
                <td>
                <textarea class="form-control"
                    aria-label="Disabled input example"
                    disabled><?= $data["detail_klien"]["note"] ?>
                    </textarea>
                </td>
            </tr>
        </table>

        <div class="container-fluid d-flex gap-2 mb-4">
            <a href="<?= BASEURL ?>" class="btn btn-secondary ms-auto">Kembali</a>
            <button class="btn btn-primary">Edit</button>
        </div>

    </div>
</main>
