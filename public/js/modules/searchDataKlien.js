import toggleColumns from "./toggleColumns.js";

const searchBtn = document.querySelector("#tombolCari");
const clientTable = document.querySelector("#client-table-container");

const xhr = new XMLHttpRequest();

function searchDataKlien() {
    searchBtn.addEventListener("click", function () {
        let keyword = document.querySelector("#keyword").value;

        const url = "http://localhost/katalog-klien/public/clients/cari";

        xhr.open("POST", url, true);
        xhr.onreadystatechange = () => {
            if (xhr.readyState != 4 || xhr.status != 200) return;
            let res = xhr.responseText;
            console.log(res);
            clientTable.innerHTML = res;
            toggleColumns();
            console.log(res);
        };

        xhr.setRequestHeader(
            "Content-Type",
            "application/x-www-form-urlencoded"
        );
        xhr.send("keyword=" + keyword);
    });
}

export default searchDataKlien;
