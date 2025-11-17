document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.getElementById("theme-toggle");
    if (!toggle) return;

    // Load saved theme or respect system preference
    const savedTheme = localStorage.getItem("theme");
    const systemDark = window.matchMedia(
        "(prefers-color-scheme: dark)"
    ).matches;

    let currentTheme = "light";
    if (savedTheme === "dark" || (!savedTheme && systemDark)) {
        currentTheme = "dark";
    }

    // Apply theme
    document.documentElement.setAttribute("data-theme", currentTheme);
    toggle.checked = currentTheme === "dark";

    // Toggle on click
    toggle.addEventListener("change", () => {
        const newTheme = toggle.checked ? "dark" : "light";
        document.documentElement.setAttribute("data-theme", newTheme);
        localStorage.setItem("theme", newTheme);
    });
});