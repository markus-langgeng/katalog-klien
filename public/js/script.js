import modalFormDataKlien from "./modules/modalFormDataKlien.js";
import toggleColumns from "./modules/toggleColumns.js";
import searchDataKlien from "./modules/searchDataKlien.js";
import storeCheckboxState from "./modules/storeCheckboxState.js";

if (document.querySelector(".home-page")) {
    modalFormDataKlien();
    toggleColumns();
    searchDataKlien();
    storeCheckboxState();
}

const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);
