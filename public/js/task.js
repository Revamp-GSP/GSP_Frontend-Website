document.addEventListener("DOMContentLoaded", function () {
    const toggleButtons = document.querySelectorAll(".toggle-button");

    toggleButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const target = document.getElementById(
                this.getAttribute("data-target")
            );
            if (
                target.style.display === "block" ||
                target.style.display === ""
            ) {
                target.style.display = "none";
            } else {
                target.style.display = "block";
            }
            adjustPageHeight();
        });
    });

    function adjustPageHeight() {
        const html = document.documentElement;
        const body = document.body;
        html.style.height = "auto";
        body.style.height = "auto";
        const height = html.scrollHeight;
        html.style.height = height + "px";
        body.style.height = height + "px";
    }
});
