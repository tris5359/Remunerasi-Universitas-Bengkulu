import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const fullscreenButton = document.getElementById("fullscreen-button");

fullscreenButton.addEventListener("click", toggleFullscreen);

function toggleFullscreen() {
    if (document.fullscreenElement) {
        // If already in fullscreen, exit fullscreen
        document.exitFullscreen();
    } else {
        // If not in fullscreen, request fullscreen
        document.documentElement.requestFullscreen();
    }
}

// start: Popper
const popperInstance = {};
document.querySelectorAll(".dropdown").forEach(function (item, index) {
    const popperId = "popper-" + index;
    const toggle = item.querySelector(".dropdown-toggle");
    const menu = item.querySelector(".dropdown-menu");
    menu.dataset.popperId = popperId;
    popperInstance[popperId] = Popper.createPopper(toggle, menu, {
        modifiers: [
            {
                name: "offset",
                options: {
                    offset: [0, 8],
                },
            },
            {
                name: "preventOverflow",
                options: {
                    padding: 24,
                },
            },
        ],
        placement: "bottom-end",
    });
});
document.addEventListener("click", function (e) {
    const toggle = e.target.closest(".dropdown-toggle");
    const menu = e.target.closest(".dropdown-menu");
    if (toggle) {
        const menuEl = toggle
            .closest(".dropdown")
            .querySelector(".dropdown-menu");
        const popperId = menuEl.dataset.popperId;
        if (menuEl.classList.contains("hidden")) {
            hideDropdown();
            menuEl.classList.remove("hidden");
            showPopper(popperId);
        } else {
            menuEl.classList.add("hidden");
            hidePopper(popperId);
        }
    } else if (!menu) {
        hideDropdown();
    }
});

function hideDropdown() {
    document.querySelectorAll(".dropdown-menu").forEach(function (item) {
        item.classList.add("hidden");
    });
}

function showPopper(popperId) {
    popperInstance[popperId].setOptions(function (options) {
        return {
            ...options,
            modifiers: [
                ...options.modifiers,
                {
                    name: "eventListeners",
                    enabled: true,
                },
            ],
        };
    });
    popperInstance[popperId].update();
}

function hidePopper(popperId) {
    popperInstance[popperId].setOptions(function (options) {
        return {
            ...options,
            modifiers: [
                ...options.modifiers,
                {
                    name: "eventListeners",
                    enabled: false,
                },
            ],
        };
    });
}
// end: Popper

// start: Tab
document.querySelectorAll("[data-tab]").forEach(function (item) {
    item.addEventListener("click", function (e) {
        e.preventDefault();
        const tab = item.dataset.tab;
        const page = item.dataset.tabPage;
        const target = document.querySelector(
            '[data-tab-for="' + tab + '"][data-page="' + page + '"]'
        );
        document
            .querySelectorAll('[data-tab="' + tab + '"]')
            .forEach(function (i) {
                i.classList.remove("active");
            });
        document
            .querySelectorAll('[data-tab-for="' + tab + '"]')
            .forEach(function (i) {
                i.classList.add("hidden");
            });
        item.classList.add("active");
        target.classList.remove("hidden");
    });
});
// end: Tab
