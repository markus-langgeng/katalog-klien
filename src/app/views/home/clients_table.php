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
                <td>
                    <div class="d-grid gap-2 d-xxl-block ">
                        <button type="button" class="btn btn-primary btn-sm">
                            Detail
                        </button>
                        <button type="button" class="btn btn-primary btn-sm">
                            Edit
                        </button>
                        <button type="button" class="btn btn-danger btn-sm">
                            Hapus
                        </button>
                    </div>
                </td>
            </tr>

    <?php
        $no++;
        endforeach;
    ?>
    </table>
</div>

