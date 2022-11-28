function linkify() {
    const domainTujuan = document.querySelectorAll("td.col-domain-tujuan")
    const permalink = document.querySelectorAll("td.col-permalink")
    const linkInvoice = document.querySelectorAll("td.col-invoice-link")

    const urlify = (text) => {
        let urlRegex =/(\b((https?|ftp|file):\/\/|(www\.))[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|].*)/ig;
        return text.replace(urlRegex, function(url) {
            return '<p style="margin-bottom:.5rem"><a target="_blank" href="' + url + '">' + url + '</a></p>';
        });
    }

    domainTujuan.forEach((col) => {
        col.innerHTML = urlify(col.innerHTML);
    });
    permalink.forEach((col) => {
        col.innerHTML = urlify(col.innerHTML);
    })
    linkInvoice.forEach((col) => {
        col.innerHTML = urlify(col.innerHTML);
    })
}

export default linkify;
