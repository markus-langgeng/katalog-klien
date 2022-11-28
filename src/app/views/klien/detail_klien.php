<?php LoginSession::checkLoginSession($data["judul"]); ?>
<main class="detail-klien">
    <div class="container">

        <div class="row my-3">
            <h1>Detail Data Klien</h1>
        </div>

        <div class="table-responsive">
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
                    <th scope="row">Jenis Order</th>
                    <td><?= $data["detail_klien"]["jenis_order"] ?></td>
                </tr>

                <tr>
                    <th scope="row">Tanggal Order </th>
                    <td><?= $data["detail_klien"]["tgl_order"] ?></td>
                </tr>

                <tr>
                    <th scope="row">Sumber Order</th>
                    <td><?= $data["detail_klien"]["sumber_order"] ?></td>
                </tr>

                <tr>
                    <th scope="row">Domain Tujuan</th>
                    <td class="col-domain-tujuan">
                        <?= nl2br($data["detail_klien"]["domain_tujuan"], true) ?>
                    </td>
                </tr>

                <tr>
                    <th scope="row">Permalink</th>
                    <td class="col-permalink">
                        <?= nl2br($data["detail_klien"]["permalink"], true) ?>
                    </td>
                </tr>

                <tr>
                    <th scope="row">Harga</th>
                    <td><?= $data["detail_klien"]["price"] ?></td>
                </tr>

                <tr>
                    <th scope="row">Status Orderan</th>
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
                    <th scope="row">Link Invoice</th>
                    <td class="col-invoice-link">
                        <?= nl2br($data["detail_klien"]["invoice_link"]) ?>
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
                    <th scope="row">Admin Domain</th>
                    <td><?= $data["detail_klien"]["admin"] ?></td>
                </tr>

                <tr>
                    <th scope="row">Glad</th>
                    <td><?= $data["detail_klien"]["glad"] ?></td>
                </tr>

                <tr>
                    <th scope="row">Catatan</th>
                    <td><?= $data["detail_klien"]["note"] ?></td>
                </tr>
            </table>
        </div>

        <div class="container-fluid d-flex gap-2 mb-4">
            <a href="<?= BASEURL ?>" class="btn btn-secondary ms-auto">Kembali</a>
        </div>

    </div>
</main>
