function toggleAllCheckboxes(mainCb, cbArray) {
    mainCb.addEventListener("click", function () {
        if (mainCb.checked) {
            cbArray.forEach(function (cb) {
                cb.checked = true;
            });
        } else {
            cbArray.forEach(function (cb) {
                cb.checked = false;
            });
        }
    });
}

export default toggleAllCheckboxes;
