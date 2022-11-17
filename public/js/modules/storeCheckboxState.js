import toggleColumns from "./toggleColumns.js";

const allCheckBoxes = document.querySelectorAll(
    ".column-checkboxes [type=checkbox]"
);
const toggleAllCols = document.querySelector("#checklist-toggle-semua");
const checkedColumns = {};
const checkboxState = JSON.parse(localStorage.getItem("checkboxState"));

function storeCheckboxState() {
    function loadCbFromLocalStorage() {
        if (checkboxState === null) {
            return;
        }

        allCheckBoxes.forEach(function (cb) {
            cb.checked = checkboxState[cb.getAttribute("id")];
            toggleColumns();
        });
    }

    function saveCbToLocalStorage() {
        allCheckBoxes.forEach(function (cb) {
            checkedColumns[cb.getAttribute("id")] = cb.checked;
            localStorage.setItem(
                "checkboxState",
                JSON.stringify(checkedColumns)
            );
        });
    }

    allCheckBoxes.forEach(function (cb) {
        cb.addEventListener("click", function () {
            saveCbToLocalStorage();
        });
    });

    toggleAllCols.addEventListener("click", function () {
        saveCbToLocalStorage();
    });

    loadCbFromLocalStorage();
}

export default storeCheckboxState;
