const nav = document.querySelector("nav");

window.addEventListener("scroll", () => {
  if (window.scrollY > 100) {
    nav.classList.add("bg-white", "shadow-md");
  } else {
    nav.classList.remove("bg-white", "shadow-md");
  }
});

const scrollContent = document.getElementById("scrollContent");
scrollContent.innerHTML += scrollContent.innerHTML;

const btnClose = document.getElementById("btnClose");
const panel = document.getElementById("panel");
const overlay = document.getElementById("overlay");
const menu = document.getElementById("menuMinimal");
const bouton = document.getElementById("mobileHamburger");

bouton.addEventListener("click", function () {
  console.log("🍔 Clic sur le hamburger !");

  panel.classList.remove("-translate-x-full");
  panel.classList.add("translate-x-0");

  overlay.classList.remove("opacity-0");
  overlay.classList.add("opacity-100");

  menu.classList.remove("pointer-events-none");

  console.log("✅ Menu ouvert !");
});

console.log("✅ JavaScript chargé !");

// ========== TOGGLE MENU HAMBURGER ==========
bouton.addEventListener("click", function () {
  const isOpen = panel.classList.contains("translate-x-0");
  const lignes = bouton.querySelectorAll(".hamburger-line");

  if (isOpen) {
    // FERMER
    panel.classList.remove("translate-x-0");
    panel.classList.add("-translate-x-full");
    overlay.classList.remove("opacity-100");
    overlay.classList.add("opacity-0");
    menu.classList.add("pointer-events-none");

    // X → Hamburger
    lignes[0].classList.remove(
      "!w-full",
      "rotate-45",
      "translate-y-[10px]",
      "!ml-0"
    );
    lignes[0].classList.add("w-[80%]", "ml-auto");
    lignes[1].classList.remove("opacity-0", "scale-0");
    lignes[2].classList.remove("!w-full", "-rotate-45", "-translate-y-[10px]");
    lignes[2].classList.add("w-[60%]");
  } else {
    // OUVRIR
    panel.classList.remove("-translate-x-full");
    panel.classList.add("translate-x-0");
    overlay.classList.remove("opacity-0");
    overlay.classList.add("opacity-100");
    menu.classList.remove("pointer-events-none");
    panel.style.pointerEvents = "auto";
    overlay.style.pointerEvents = "auto";

    // Hamburger → X
    lignes[0].classList.add(
      "!w-full",
      "rotate-45",
      "translate-y-[10px]",
      "!ml-0"
    );
    lignes[0].classList.remove("w-[80%]", "ml-auto");
    lignes[1].classList.add("opacity-0", "scale-0");
    lignes[2].classList.add("!w-full", "-rotate-45", "-translate-y-[10px]");
    lignes[2].classList.remove("w-[60%]");
  }
});

// ========== FERMER AVEC BTNCLOS ==========
btnClose.addEventListener("click", function () {
  panel.classList.remove("translate-x-0");
  panel.classList.add("-translate-x-full");
  overlay.classList.remove("opacity-100");
  overlay.classList.add("opacity-0");
  menu.classList.add("pointer-events-none");

  // X → Hamburger
  const lignes = bouton.querySelectorAll(".hamburger-line");
  lignes[0].classList.remove(
    "!w-full",
    "rotate-45",
    "translate-y-[10px]",
    "!ml-0"
  );
  lignes[0].classList.add("w-[80%]", "ml-auto");
  lignes[1].classList.remove("opacity-0", "scale-0");
  lignes[2].classList.remove("!w-full", "-rotate-45", "-translate-y-[10px]");
  lignes[2].classList.add("w-[60%]");

  overlay.addEventListener("click", function () {
    console.log("🖱️ Clic sur l'overlay - Fermeture du menu");
    bouton.click(); // Simule un clic sur le hamburger pour fermer
  });
});

// ========== FONCTION GÉNÉRIQUE POUR DROPDOWNS ==========
function initDropdown(buttonId, submenuId) {
  const button = $(buttonId);
  const submenu = $(submenuId);

  if (!button || !submenu) {
    console.error(`❌ Dropdown non trouvé: ${buttonId} ou ${submenuId}`);
    return;
  }

  button.addEventListener("click", function () {
    const isOpen = submenu.style.maxHeight && submenu.style.maxHeight !== "0px";
    const arrow = button.querySelector(".dropdown-arrow");

    if (isOpen) {
      // Fermer
      submenu.style.maxHeight = "0px";
      arrow.style.transform = "rotate(0deg)";
    } else {
      // Ouvrir
      submenu.style.maxHeight = submenu.scrollHeight + "px";
      arrow.style.transform = "rotate(90deg)";
    }
  });

  console.log(`✅ Dropdown initialisé: ${buttonId}`);
}

// ========== INITIALISER TOUS LES DROPDOWNS ==========
initDropdown("dropdown-apropos", "submenu-apropos");
initDropdown("dropdown-services", "submenu-services");
