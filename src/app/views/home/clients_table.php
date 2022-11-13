<div class="table-responsive mb-4" id="client-table-container">
    <table class="table table-hover table-striped table-bordered client-table">

        <thead class="align-top">
            <tr>
                <th scope="col">No</th>
                <th scope="col" class="col-nama-klien">Nama Klien</th>
                <th scope="col" class="col-email-klien">Email Klien</th>
                <th scope="col" class="col-jenis-order">Jenis Order</th>
                <th scope="col" class="col-tgl-order">Tanggal Order</th>
                <th scope="col" class="col-sumber-order">Sumber Order</th>
                <th scope="col" class="col-domain-tujuan">Domain Tujuan</th>
                <th scope="col" class="col-permalink">Permalink</th>
                <th scope="col" class="col-harga">Harga (USD)</th>
                <th scope="col" class="col-status-order">Status Order</th>
                <th scope="col" class="col-tgl-bayar">Tanggal Bayar</th>
                <th scope="col" class="col-id-transaksi">ID Transaksi</th>
                <th scope="col" class="col-invoice-link">Invoice Link</th>
                <th scope="col" class="col-akun-paypal-klien">Akun PayPal Klien</th>
                <th scope="col" class="col-owner-domain">Owner Domain</th>
                <th scope="col" class="col-admin">Admin</th>
                <th scope="col" class="col-glad">Glad</th>
                <th scope="col" class="col-note">Note</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>

    <?php
    $no = ( isset($data["clients"]["indexAwal"]) ) ? $no = $data["clients"]["indexAwal"] + 1 : $no = 1;
    foreach ($data["clients"]["klien"] as $client): ?>

            <tr>
                <th scope="row"><?= $no ?></th>
                <td class="col-nama-klien"><?= $client["nama_client"] ?></td>
                <td class="col-email-klien"><?= $client["email_client"] ?></td>
                <td class="col-jenis-order"><?= $client["jenis_order"] ?></td>
                <td class="col-tgl-order"><?= $client["tgl_order"] ?></td>
                <td class="col-sumber-order"><?= $client["sumber_order"] ?></td>
                <td class="col-domain-tujuan"><?= $client[
                    "domain_tujuan"
                ] ?></td>
                <td class="col-permalink"><?= $client["permalink"] ?></td>
                <td class="col-harga"><?= $client["price"] ?></td>
                <td class="col-status-order"><?= $client["status_order"] ?></td>
                <td class="col-tgl-bayar"><?= $client["tgl_bayar"] ?></td>
                <td class="col-id-transaksi"><?= $client["id_transaksi"] ?></td>
                <td class="col-invoice-link"><?= $client["invoice_link"] ?></td>
                <td class="col-akun-paypal-klien"><?= $client[
                    "acc_paypal_client"
                ] ?></td>
                <td class="col-owner-domain"><?= $client["owner_domain"] ?></td>
                <td class="col-admin"><?= $client["admin"] ?></td>
                <td class="col-glad"><?= $client["glad"] ?></td>
                <td class="col-note m"><?= $client["note"] ?></td>
                <td>
                    <div class="d-grid gap-2">
                        <a href="<?= BASEURL ?>/clients/detail/
<?= $client["id"] ?>"
                        class="btn btn-primary btn-sm"
                        role="button">Detail</a>
                        <button
                            class="btn btn-primary btn-sm btnEditDataKlien"
                            role="button"
                            data-bs-toggle="modal"
                            data-bs-target="#modalDataKlien"
                            data-id-klien="<?= $client["id"] ?>">
                            Edit
                        </button>

                        <a href="<?= BASEURL ?>/clients/hapus/
<?= $client["id"] ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');"
                            role="button">Hapus</a>

                    </div>
                </td>
            </tr>

    <?php $no++;endforeach;
    ?>
    </table>
</div>

