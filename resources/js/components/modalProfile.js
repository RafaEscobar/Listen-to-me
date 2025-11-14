document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("toggleDropdown");
    const menu = document.getElementById("dropdownMenu");

    if (!btn || !menu) return;

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });

    document.addEventListener("click", (e) => {
        if (!btn.contains(e.target) && !menu.contains(e.target)) {
            menu.classList.add("hidden");
        }
    });
});
