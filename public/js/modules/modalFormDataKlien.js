import prepopulateForm from "./prepopulateForm.js";

const editBtn = document.querySelectorAll(".btnEditDataKlien");
const addBtn = document.querySelector("#btnTambahDataKlien");
const submitBtn = document.querySelector("#btnSubmitFormDataKlien");
const judulModal = document.querySelector("#judulModalKlien");
const formDataKlien = document.querySelector("#form_data_klien");

const xhr = new XMLHttpRequest();

function modalFormDataKlien() {

    // Tambah Data
    addBtn.addEventListener("click", function() {
        judulModal.innerHTML = "Tambah Data Klien";
        submitBtn.innerHTML = "Tambah Data";
    });

    // Edit Data
    for (let i = 0; i < editBtn.length; i++) {
        editBtn[i].addEventListener("click", function () {
            formDataKlien.setAttribute("action", "http://localhost/katalog-klien/public/clients/edit");
            console.log(formDataKlien);

            let id = this.getAttribute("data-id-klien");
            const url = "http://localhost/katalog-klien/public/clients/edit";

            judulModal.innerHTML = "Edit Data Klien"
            submitBtn.innerHTML = "Edit Data";

            // Ajax
            xhr.open("POST", url, true);
            xhr.onreadystatechange = () => {
                if (xhr.readyState != 4 || xhr.status != 200) return;
                let response = JSON.parse(xhr.responseText);
                console.log(response);
                console.log(response.id);

                prepopulateForm(response);
                /* TODO :
                    buat function utk pre-populate form input dgn data dari db
                */
            }
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send("id="+id);
        });
    }
}

export default modalFormDataKlien;
