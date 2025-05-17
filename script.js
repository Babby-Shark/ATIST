const toggle = document.getElementById("menu-toggle");
const nav = document.getElementById("mobile-nav");
const overlay = document.getElementById("menu-overlay");

toggle.addEventListener("click", () => {
const isOpen = nav.style.left === "0px";
nav.style.left = isOpen ? "-100%" : "0";
});

document.querySelectorAll(".mobile-nav a").forEach(link => {
  link.addEventListener("click", () => {
    nav.style.left = "-100%";
  });
});  

function openMenu() {
nav.style.left = "0";
overlay.style.display = "block";
}

function closeMenu() {
nav.style.left = "-100%";
overlay.style.display = "none";
}

toggle.addEventListener("click", () => {
const isOpen = nav.style.left === "0px";
if (isOpen) {
    closeMenu();
} else {
    openMenu();
}
});

overlay.addEventListener("click", closeMenu);

// Optional: close when link inside menu is clicked
document.querySelectorAll(".mobile-nav a").forEach(link => {
link.addEventListener("click", closeMenu);
});

