const el = document


function prepopulateForm(a) {
    el.querySelector("#nama_client").value = a.nama_client;
    el.querySelector("#email_client").value = a.email_client;
    el.querySelector("#jenis_order").value = a.jenis_order;
    el.querySelector("#tgl_order").value = a.tgl_order;
    el.querySelector("#sumber_order").value = a.sumber_order;
    el.querySelector("#domain_tujuan").value = a.domain_tujuan;
    el.querySelector("#permalink").value = a.permalink;
    el.querySelector("#price").value = a.price;
    el.querySelector("#status_order").value = a.status_order;
    el.querySelector("#tgl_bayar").value = a.tgl_bayar;
    el.querySelector("#id_transaksi").value = a.id_transaksi;
    el.querySelector("#invoice_link").value = a.invoice_link;
    el.querySelector("#acc_paypal_client").value = a.acc_paypal_client;
    el.querySelector("#owner_domain").value = a.owner_domain;
    el.querySelector("#admin").value = a.admin;
    el.querySelector("#glad").value = a.glad;
    el.querySelector("#note").value = a.note;
}

export default prepopulateForm;
