import modalFormDataKlien from "./modules/modalFormDataKlien.js";
import toggleColumns from "./modules/toggleColumns.js";
import searchDataKlien from "./modules/searchDataKlien.js";

if (document.querySelector(".home-page")) {
    modalFormDataKlien();
    toggleColumns();
    searchDataKlien();
}

const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);
