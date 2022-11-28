export default function storeFilterCheckbox () {
    const d = document;
    const allFilterCb = d.querySelectorAll("[name=filter]");
    const toggleAllFilters = d.querySelector("#filter-toggle-semua");
    const checkedFilters = {}
    const filterState = JSON.parse(sessionStorage.getItem("filterState"));

    const loadCbFromSessionStorage = () => {
        if (filterState === null) return;

        allFilterCb.forEach((cb) => {
            cb.checked = filterState[cb.getAttribute("id")];
        });
    }

    const saveCbToSessionStorage = () => {
        allFilterCb.forEach((cb) => {
            checkedFilters[cb.getAttribute("id")] = cb.checked;
            sessionStorage.setItem("filterState", JSON.stringify(checkedFilters));
        });
    }

    allFilterCb.forEach((cb) => {
        cb.addEventListener("click", () => saveCbToSessionStorage() );
    });

    toggleAllFilters.addEventListener("click", () => saveCbToSessionStorage());

    loadCbFromSessionStorage();

}

