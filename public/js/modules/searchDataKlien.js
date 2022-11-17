import toggleColumns from "./toggleColumns.js";
import toggleAllCheckboxes from "./toggleAllCheckboxes.js";

const d = document;

const searchBtn = d.querySelector("#tombolCari");
const searchInput = d.querySelector("#keyword");
const chkAll = d.querySelector("#filter-toggle-semua");
const clientTable = d.querySelector("#client-table");
const bsPagination = d.querySelector("[aria-label='Page navigation']");

const filterCol = d.querySelectorAll("[name=filter]");

const xhr = new XMLHttpRequest();

function searchDataKlien() {
    toggleAllCheckboxes(chkAll, filterCol);

    function searchWithAjax() {
        let keyword = searchInput.value;
        let cbFilterArr = [];

        // jangan tampilkan pagination saat melakukan pencarian
        // karena link yang dituju masih sama seperti sblm melakukan pencarian
        // pagination yg link"-nya sesuai data yg dicari masih belum didukung :v
        if (keyword.length === 0) {
            bsPagination.style.display = "block";
        } else {
            bsPagination.style.display = "none";
        }

        filterCol.forEach(function (cb) {
            if (cb.checked == true) {
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
