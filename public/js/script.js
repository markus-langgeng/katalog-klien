import modalFormDataKlien from "./modules/modalFormDataKlien.js";
import toggleColumns from "./modules/toggleColumns.js";
import searchDataKlien from "./modules/searchDataKlien.js";
import storeCheckboxState from "./modules/storeCheckboxState.js";
import changeActiveState from "./modules/changeActiveState.js";
import storeFilterCheckbox from "./modules/storeFilterCheckbox.js";
import linkify from "./modules/linkify.js";

if (document.querySelector(".home-page")) {
    changeActiveState();
    modalFormDataKlien();
    toggleColumns();
    searchDataKlien();
    storeCheckboxState();
    changeActiveState();
    storeFilterCheckbox();
}
if (document.querySelector(".home-page") || document.querySelector(".detail-klien")) {
    linkify();
}

const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

// let editor = new MediumEditor('.editable')

// let editor = new MediumEditor('.editable', {
//     anchor: {
//         linkValidation: true,
//         targetCheckbox: true,
//         targetCheckboxText: 'Open in new window'
//     },
//     autoLink : true,
// })

// console.log(editor.elements[0].innerHTML)
// let output = document.querySelector(".output")
//
// output.innerHTML = editor.elements[0].innerHTML
