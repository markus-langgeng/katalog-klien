function linkify() {
    const domainTujuan = document.querySelectorAll("td.col-domain-tujuan");
    const permalink = document.querySelectorAll("td.col-permalink");
    const linkInvoice = document.querySelectorAll("td.col-invoice-link");

    const urlify = (arrOfElements) => {

        /* Array ini mengandung kumpulan string dari tiap cell yg isinya
         * adalah string input user yg dibungkus dengan ahref
         */
        let arrayUrlify = [];
        /* String di dlm tiap cell akan dipisahkan kemudian dibuat menjadi
         * array dan array-array tsb dimasukkan ke dlm array ini.
         */
        let linksInsideACell = [];
        let urlRegex =
            /(\b((https?|ftp|file):\/\/)[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|].*)/gim;
        let urlRegex2 =
            /(\b(www\.)[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|].*)/gim;

        const getInnerHTMLs = () => {
            arrOfElements.forEach((tdTable) => {
                linksInsideACell.push(tdTable.innerHTML.match(/\S+/g));
            });
        };

        const addAhrefs = () => { // berapa time-complexity nya? ;v, mohon maap klo kurang optimal
            // loop pertama
            linksInsideACell.forEach((tdTable) => {
                let tempArr = [];

                // klo cellnya kosong, kasih isi null
                if (tdTable === null) {
                    tempArr.push(null);
                    arrayUrlify.push(tempArr.join(" "));
                    return;
                }

                // loop kedua
                // klo cellnya ada isinya
                tdTable.forEach((text) => {
                    if (text.match(urlRegex) !== null) {
                        text = `<p style="margin-bottom:.3rem"><a target="_blank" href="${text}">${text}</a></p>`;
                        tempArr.push(text);
                    } else if (text.match(urlRegex2) !== null) {
                        text = `<p style="margin-bottom:.3rem"><a target="_blank" href="http://${text}">${text}</a></p>`;
                        tempArr.push(text);
                    } else {
                        console.log("doesn't match any", text);
                    }
                });

                arrayUrlify.push(tempArr.join(" "));
            });
        };

        const setInnerHTMLs = () => {
            arrOfElements.forEach((tdTable, i) => {
                if (arrayUrlify[i] != null) tdTable.innerHTML = arrayUrlify[i];
            });
        };

        getInnerHTMLs();
        addAhrefs();
        setInnerHTMLs();

        return arrayUrlify;
    };

    urlify(domainTujuan);
    urlify(permalink);
    urlify(linkInvoice);
}

export default linkify;
