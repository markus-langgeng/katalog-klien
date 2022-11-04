<div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">

        <thead class="align-top">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Klien</th>
                <th scope="col">Jenis Order</th>
                <th scope="col">Tanggal Order</th>
                <th scope="col">Status Order</th>
                <th scope="col">Sumber Order</th>
                <th scope="col">Domain Tujuan</th>
                <th scope="col">Harga (USD)</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>

    <?php
    $no = 1;
    foreach ($data["clients"] as $client): ?>

            <tr>
                <th scope="row"><?= $no ?></th>
                <td><?= $client["nama_client"] ?></td>
                <td><?= $client["jenis_order"] ?></td>
                <td><?= $client["tgl_order"] ?></td>
                <td><?= $client["status_order"] ?></td>
                <td><?= $client["sumber_order"] ?></td>
                <td><?= $client["domain_tujuan"] ?></td>
                <td><?= $client["price"] ?></td>
                <td>
                    <div class="d-grid gap-2 d-xxl-block ">
                        <a href="<?= BASEURL ?>/clients/detail/<?= $client[
    "id"
] ?>"
                            class="btn btn-primary btn-sm"
                            role="button">
                            Detail
                        </a>
                        <a href="<?= BASEURL ?>/clients/edit/<?= $client[
    "id"
] ?>"
                            class="btn btn-primary btn-sm"
                            role="button">
                            Edit

                            <a href="<?= BASEURL ?>/clients/hapus/<?= $client[
    "id"
] ?>" 
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');"role="button">
                            Hapus
                        </a>
                    </div>
                </td>
            </tr>

    <?php $no++;endforeach;
    ?>
    </table>
</div>

