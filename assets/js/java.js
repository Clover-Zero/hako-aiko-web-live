window.onload = function () {
    let burger = document.getElementById("burger");

    burger.addEventListener("keydown", (event) => {
        let key = event.code;
        if (key == "Escape") {
            burger.removeAttribute("open");
        }
    });
};

function openNav() {
    document.getElementById("myNav").style.display = "block";
}

function closeNav() {
    document.getElementById("myNav").style.display = "none";
}