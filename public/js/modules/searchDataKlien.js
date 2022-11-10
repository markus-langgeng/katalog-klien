import toggleColumns from "./toggleColumns.js";
import toggleAllCheckboxes from "./toggleAllCheckboxes.js";

const d = document;

const searchBtn = d.querySelector("#tombolCari");
const searchInput = d.querySelector("#keyword");
const chkAll = d.querySelector("#filter-toggle-semua")
const clientTable = d.querySelector("#client-table-container");

const filterCol = d.querySelectorAll("[name=filter]");

const xhr = new XMLHttpRequest();

function searchDataKlien() {

    toggleAllCheckboxes(chkAll, filterCol);

    function searchWithAjax() {
        let keyword = document.querySelector("#keyword").value;
        let cbFilterArr = [];

        filterCol.forEach(function (cb) {
            if( cb.checked == true ) {
                cbFilterArr.push(cb.value);
            }
        });

        const url = "http://localhost/katalog-klien/public/clients/cari";

        xhr.open("POST", url, true);
        xhr.onreadystatechange = () => {
            if (xhr.readyState != 4 || xhr.status != 200) return;
            let res = xhr.responseText;
            clientTable.innerHTML = res;
            toggleColumns();
        };

        xhr.setRequestHeader(
            "Content-Type",
            "application/x-www-form-urlencoded"
        );
        xhr.send(`keyword=${keyword}&filter_array=${cbFilterArr}`);
    }

    searchBtn.addEventListener("click", function () {
        searchWithAjax();
    });

    searchInput.addEventListener("keyup", function () {
        searchWithAjax();
    });

}

export default searchDataKlien;
