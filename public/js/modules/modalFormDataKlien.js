import prepopulateForm from "./prepopulateForm.js";
import clearForm from "./clearForm.js";

const addBtn = document.querySelector("#btnTambahDataKlien");
const submitBtn = document.querySelector("#btnSubmitFormDataKlien");
const judulModal = document.querySelector("#judulModalKlien");
const formDataKlien = document.querySelector("#form_data_klien");
const containerTabel = document.querySelector("#client-table-container");

const xhr = new XMLHttpRequest();

function modalFormDataKlien() {
    // Tambah Data
    addBtn.addEventListener("click", function () {
        judulModal.innerHTML = "Tambah Data Klien";
        submitBtn.innerHTML = "Tambah Data";
        clearForm();
    });

    containerTabel.addEventListener("click", (e) => {
        if (e.target.matches(".btnEditDataKlien")) {
            changeModalToEditForm(e.target);
        }
    });

    // Edit Data
    const changeModalToEditForm = (editBtn) => {
        let id = editBtn.getAttribute("data-id-klien");
        judulModal.innerHTML = "Edit Data Klien";
        submitBtn.innerHTML = "Edit Data";

        const urlAjax =
            "http://localhost/katalog-klien/public/clients/getDetailToUpdate";
        const urlActionForm =
            "http://localhost/katalog-klien/public/clients/edit";
        formDataKlien.setAttribute("action", urlActionForm);

        // Ajax
        xhr.open("POST", urlAjax, true);
        xhr.onreadystatechange = () => {
            if (xhr.readyState != 4 || xhr.status != 200) return;
            let response = JSON.parse(xhr.responseText);

            prepopulateForm(response);
        };
        xhr.setRequestHeader(
            "Content-Type",
            "application/x-www-form-urlencoded"
        );
        xhr.send("id=" + id);
    };
}

export default modalFormDataKlien;
