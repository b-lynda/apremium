// ========== ATTENDRE QUE LE DOM SOIT CHARGÉ ==========
document.addEventListener('DOMContentLoaded', function() {
    
    console.log('🎬 DOM chargé - Initialisation du menu...');
    
    // ========== RÉCUPÉRATION DES ÉLÉMENTS ==========




    const $ = (id) => document.getElementById(id);
    const bouton = $("menu-btn");
    const menu = $("menu-minimal");
    const overlay = $("overlay");
    const panel = $("panel");
    const btnClose = $("btnClose");

    console.log("✅ Éléments récupérés :");
    console.log("  - Bouton:", bouton);
    console.log("  - Menu:", menu);
    console.log("  - Overlay:", overlay);
    console.log("  - Panel:", panel);
    console.log("  - BtnClose:", btnClose);

    // ========== SCROLL NAV ==========
    const nav = document.querySelector("nav");
    if (nav) {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 100) {
                nav.classList.add("bg-white", "shadow-md");
            } else {
                nav.classList.remove("bg-white", "shadow-md");
            }
        });
        console.log("✅ Scroll nav initialisé");
    }

    // ========== SCROLL PARTENAIRES ==========
    const scrollContent = document.getElementById("scrollContent");
    if (scrollContent) {
        scrollContent.innerHTML += scrollContent.innerHTML;
        console.log("✅ Scroll partenaires initialisé");
    }

// ========== TOGGLE MENU HAMBURGER ==========
if (bouton && menu && overlay && panel) {
    bouton.addEventListener("click", function (event) {
        console.log('🍔 CLIC DÉTECTÉ !');
        
        const isOpen = panel.classList.contains('menu-open');
        const lignes = bouton.querySelectorAll(".hamburger-line");

        if (isOpen) {
            // FERMER
            console.log("❌ Fermeture du menu");
            
            panel.classList.remove('menu-open');
            panel.classList.add('menu-closed');
            overlay.classList.remove('overlay-visible');
            overlay.classList.add('overlay-hidden');
            menu.classList.add('pointer-events-none');

            // X → Hamburger
            lignes[0].style.width = "80%";
            lignes[0].style.marginLeft = "auto";
            lignes[0].style.transform = "none";
            lignes[1].style.opacity = "1";
            lignes[1].style.transform = "none";
            lignes[2].style.width = "60%";
            lignes[2].style.transform = "none";
            
        } else {
            // OUVRIR
            console.log("🍔 Ouverture du menu");
            
            panel.classList.remove('menu-closed');
            panel.classList.add('menu-open');
            overlay.classList.remove('overlay-hidden');
            overlay.classList.add('overlay-visible');
            menu.classList.remove('pointer-events-none');
            panel.style.pointerEvents = "auto";
            overlay.style.pointerEvents = "auto";

            // Hamburger → X
            lignes[0].style.width = "100%";
            lignes[0].style.marginLeft = "0";
            lignes[0].style.transform = "translateY(10px) rotate(45deg)";
            lignes[1].style.opacity = "0";
            lignes[1].style.transform = "scale(0)";
            lignes[2].style.width = "100%";
            lignes[2].style.transform = "translateY(-10px) rotate(-45deg)";
        }
    });
    
    console.log('✅ Event listener ajouté sur le hamburger');
}

// ========== FERMER AVEC BTNCLOSE ==========
if (btnClose) {
    btnClose.addEventListener("click", function () {
        console.log("⊗ Fermeture avec btnClose");
        
        panel.classList.remove('menu-open');
        panel.classList.add('menu-closed');
        overlay.classList.remove('overlay-visible');
        overlay.classList.add('overlay-hidden');
        menu.classList.add('pointer-events-none');

        const lignes = bouton.querySelectorAll(".hamburger-line");
        lignes[0].style.width = "80%";
        lignes[0].style.marginLeft = "auto";
        lignes[0].style.transform = "none";
        lignes[1].style.opacity = "1";
        lignes[1].style.transform = "none";
        lignes[2].style.width = "60%";
        lignes[2].style.transform = "none";
    });
}

// ========== FERMER EN CLIQUANT SUR L'OVERLAY ==========
if (overlay) {
    overlay.addEventListener("click", function () {
        console.log("🖱️ Clic sur l'overlay");
        
        panel.classList.remove('menu-open');
        panel.classList.add('menu-closed');
        overlay.classList.remove('overlay-visible');
        overlay.classList.add('overlay-hidden');
        menu.classList.add('pointer-events-none');
        
        const lignes = bouton.querySelectorAll(".hamburger-line");
        lignes[0].style.width = "80%";
        lignes[0].style.marginLeft = "auto";
        lignes[0].style.transform = "none";
        lignes[1].style.opacity = "1";
        lignes[1].style.transform = "none";
        lignes[2].style.width = "60%";
        lignes[2].style.transform = "none";
    });
}

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
                if (arrow) arrow.style.transform = "rotate(0deg)";
            } else {
                // Ouvrir
                submenu.style.maxHeight = submenu.scrollHeight + "px";
                if (arrow) arrow.style.transform = "rotate(90deg)";
            }
        });

        console.log(`✅ Dropdown initialisé: ${buttonId}`);
    }

    // ========== INITIALISER TOUS LES DROPDOWNS ==========
    initDropdown("dropdown-apropos", "submenu-apropos");
    initDropdown("dropdown-services", "submenu-services");

    // ========== DROPDOWNS DESKTOP (hover) ==========
    const dropdownHovers = document.querySelectorAll('.dropdown-hover');

    dropdownHovers.forEach(dropdown => {
        const menuDropdown = dropdown.querySelector('.dropdown-menu');
        const arrow = dropdown.querySelector('.dropdown-arrow');
        
        if (menuDropdown && arrow) {
            dropdown.addEventListener('mouseenter', () => {
                menuDropdown.classList.remove('opacity-0', 'invisible');
                menuDropdown.classList.add('opacity-100', 'visible');
                arrow.style.transform = 'rotate(180deg)';
            });
            
            dropdown.addEventListener('mouseleave', () => {
                menuDropdown.classList.remove('opacity-100', 'visible');
                menuDropdown.classList.add('opacity-0', 'invisible');
                arrow.style.transform = 'rotate(0deg)';
            });
        }
    });
    
    console.log(`✅ ${dropdownHovers.length} dropdowns desktop initialisés`);
    
    console.log('🎉 Initialisation complète !');
    
}); // FIN DOMContentLoaded


