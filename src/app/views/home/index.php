<h1>HALAMAN HOMEEEEEEEE</h1>
<p>Buat front end nya di sini (src/app/views/home/index.php)</p>
<p>Utk hlm login, ada di http://localhost/katalog-klien/public/login</p>
<p>Utk nulis css, js, dan gambar, ada di /katalog-klien/public/</p>

<hr>
<br>

<h2>Daftar Klien-klien (Table)</h2>

<table style="border: 1px solid black; border-collapse:collapse;">

    <tr style="border: 1px solid black;">
        <th>No.</th>
        <th>Nama Klien</th>
        <th>Email Klien</th>
        <th>Jenis Order</th>
        <th>Tgl Order</th>
        <th>Sumber Order</th>
        <th>Domain Tujuan</th>
        <th>Permalink</th>
        <th>Price</th>
        <th>Status Order</th>
        <th>Tgl Bayar</th>
        <th>ID Transaksi</th>
        <th>Invoice Link</th>
        <th>Akun PayPal Klien</th>
        <th>Owner Domain</th>
        <th>Admin</th>
        <th>Glad</th>
        <th>Note</th>
    </tr>

<?php
    $no = 1;
foreach($data["clients"] as $client) :
    ?>
    <tr>
        <td><?= $no; ?></td>
        <td><?= $client["nama_client"]; ?></td>
        <td><?= $client["email_client"]; ?></td>
        <td><?= $client["jenis_order"]; ?></td>
        <td><?= $client["tgl_order"]; ?></td>
        <td><?= $client["sumber_order"]; ?></td>
        <td><?= $client["domain_tujuan"]; ?></td>
        <td><?= $client["permalink"]; ?></td>
        <td><?= $client["price"]; ?></td>
        <td><?= $client["status_order"]; ?></td>
        <td><?= $client["tgl_bayar"]; ?></td>
        <td><?= $client["id_transaksi"]; ?></td>
        <td><?= $client["invoice_link"]; ?></td>
        <td><?= $client["acc_paypal_client"]; ?></td>
        <td><?= $client["owner_domain"]; ?></td>
        <td><?= $client["admin"]; ?></td>
        <td><?= $client["glad"]; ?></td>
        <td><?= $client["note"]; ?></td>
    </tr>

<?php
        $no++;
endforeach;
?>
</table>
<br>

<h2>Daftar Klien-klien (List)</h2>
<?php foreach($data["clients"] as $client) : ?>
<br>
<ul>
    <li>Nama Klien : <?= $client["nama_client"]; ?> </li>
    <li>Email Klien : <?= $client["email_client"]; ?> </li>
    <li>Jenis Order : <?= $client["jenis_order"]; ?> </li>
    <li>Tgl Order : <?= $client["tgl_order"]; ?> </li>
    <li>Sumber Order : <?= $client["sumber_order"]; ?> </li>
    <li>Domain Tujuan : <?= $client["domain_tujuan"]; ?> </li>
    <li>Permalink : <?= $client["permalink"]; ?> </li>
    <li>Price : <?= $client["price"]; ?> </li>
    <li>Status Order : <?= $client["status_order"]; ?> </li>
    <li>Tgl Bayar : <?= $client["tgl_bayar"]; ?> </li>
    <li>ID Transaksi : <?= $client["id_transaksi"]; ?> </li>
    <li>Invoice Link : <?= $client["invoice_link"]; ?> </li>
    <li>Akun PayPal Klien : <?= $client["acc_paypal_client"]; ?> </li>
    <li>Owner Domain : <?= $client["owner_domain"]; ?> </li>
    <li>Admin : <?= $client["admin"]; ?> </li>
    <li>Glad : <?= $client["glad"]; ?> </li>
    <li>Note : <?= $client["note"]; ?> </li>
</ul>
<?php endforeach; ?>
