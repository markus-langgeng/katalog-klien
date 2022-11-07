            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 column-checkboxes">

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-nama-klien" checked>
                    <label class="form-check-label" for="col-nama-klien">
                        Nama Klien
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-email-klien" checked>
                    <label class="form-check-label" for="col-email-klien">
                        Email Klien
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-jenis-order" checked>
                    <label class="form-check-label" for="col-jenis-order">
                        Jenis Order
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-tgl-order" checked>
                    <label class="form-check-label" for="col-tgl-order">
                        Tanggal Order
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-sumber-order">
                    <label class="form-check-label" for="col-sumber-order">
                        Sumber Order
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-domain-tujuan" checked>
                    <label class="form-check-label" for="col-domain-tujuan">
                        Domain Tujuan
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-permalink">
                    <label class="form-check-label" for="col-permalink">
                        Permalink
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-harga" checked>
                    <label class="form-check-label" for="col-harga">
                        Harga
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-status-order" checked>
allCheckBoxes.forEach(function(cb) {
    let cellClass = cb.getAttribute("id");
    let cells = d.querySelectorAll(`.client-table .${cellClass}`);

    // evaluasi saat data pertama kali dimuat checkbox
    // mana yang dicentang dan yang tidak
    if(cb.checked == true) {
        displayBlock(cells);
    } else {
        displayNone(cells);
    }

    // menambahkan eventListener supaya ada reaksi ketika
    // checkbox dicentang dan dikosongkan
    cb.addEventListener("click", function() {
        if(cb.checked == true) {
            displayBlock(cells);
        } else {
            displayNone(cells);
        }
    });
});

function displayBlock(cells) {
    cells.forEach(function(cell) {
        cell.style.display = "table-cell";
    });
}

function displayNone(cells) {
    cells.forEach(function(cell) {
        cell.style.display = "none";
    });
}
                    <label class="form-check-label" for="col-status-order">
                        Status Order
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-tgl-bayar">
                    <label class="form-check-label" for="col-tgl-bayar">
                        Tanggal Bayar
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-id-transaksi">
                    <label class="form-check-label" for="col-id-transaksi">
                        ID Transaksi
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-invoice-link">
                    <label class="form-check-label" for="col-invoice-link">
                        Invoice Link
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-akun-paypal-klien">
                    <label class="form-check-label" for="col-akun-paypal-klien">
                        Akun PayPal Klien
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-owner-domain">
                    <label class="form-check-label" for="col-owner-domain">
                        Owner Domain
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-admin">
                    <label class="form-check-label" for="col-admin">
                        Admin
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-glad">
                    <label class="form-check-label" for="col-glad">
                        Glad
                    </label>
                </div>

                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="col-note">
                    <label class="form-check-label" for="col-note">
                        Note
                    </label>
                </div>

            </div>
