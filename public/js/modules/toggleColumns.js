import toggleAllCheckboxes from "./toggleAllCheckboxes.js";

const d = document;
const allCheckBoxes = d.querySelectorAll(".column-checkboxes [type=checkbox]");
const toggleAllCols = d.querySelector("#checklist-toggle-semua");

function toggleColumns() {
    toggleAllCheckboxes(toggleAllCols, allCheckBoxes);

    function checkStateOfCheckboxes() {
        allCheckBoxes.forEach(function (cb) {
            let cellClass = cb.getAttribute("id");
            let cells = d.querySelectorAll(`.client-table .${cellClass}`);

            // evaluasi saat data pertama kali dimuat checkbox
            // mana yang dicentang dan yang tidak
            if (cb.checked == true) {
                displayBlock(cells);
            } else {
                displayNone(cells);
            }

            // menambahkan eventListener supaya ada reaksi ketika
            // checkbox dicentang dan dikosongkan
            cb.addEventListener("click", function () {
                if (cb.checked == true) {
                    displayBlock(cells);
                } else {
                    displayNone(cells);
                }
            });
        });
    }

    // panggil fungsi di awal hlm memuat pertama kali
    checkStateOfCheckboxes();
    toggleAllCols.addEventListener("click", checkStateOfCheckboxes);

    function displayBlock(cells) {
        cells.forEach(function (cell) {
            cell.style.display = "table-cell";
        });
    }

    function displayNone(cells) {
        cells.forEach(function (cell) {
            cell.style.display = "none";
        });
    }
}

export default toggleColumns;
