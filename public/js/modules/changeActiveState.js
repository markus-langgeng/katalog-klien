const navLinks = document.querySelectorAll(".nav-link");

function changeActiveState() {

    console.log(navLinks);
    navLinks.forEach(function (link) {
        let activeLink = document.querySelector(".nav-link.active");

        link.addEventListener("click", function () {
            activeLink.classList.remove("active");
            activeLink.removeAttribute("aria-current");
            link.classList.add("active");
            link.setAttribute("aria-current", "page");
        });
    });

}

export default changeActiveState;
