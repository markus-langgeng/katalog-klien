const el = document;

function clearForm() {
    el.querySelector("#id_client").value = "";
    el.querySelector("#nama_client").value = "";
    el.querySelector("#email_client").value = "";
    el.querySelector("#jenis_order").value = "";
    el.querySelector("#tgl_order").value = "";
    el.querySelector("#sumber_order").value = "";
    el.querySelector("#domain_tujuan").value = "";
    el.querySelector("#permalink").value = "";
    el.querySelector("#price").value = "";
    el.querySelector("#status_order").value = "";
    el.querySelector("#tgl_bayar").value = "";
    el.querySelector("#id_transaksi").value = "";
    el.querySelector("#invoice_link").value = "";
    el.querySelector("#acc_paypal_client").value = "";
    el.querySelector("#owner_domain").value = "";
    el.querySelector("#admin").value = "";
    el.querySelector("#glad").value = "";
    el.querySelector("#note").value = "";
}

export default clearForm;
