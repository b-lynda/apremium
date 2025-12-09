// Script JavaScript pour le formulaire de contact ANYX PREMIUM
// Fichier: formulaire-script.js

document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    // Créer la modale de succès
    const modal = document.createElement('div');
    modal.id = 'successModal';
    modal.style.cssText = 'display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.5); backdrop-filter: blur(4px); z-index: 9999; align-items: center; justify-content: center;';
    modal.innerHTML = `
        <div style="background: white; border-radius: 1rem; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); padding: 2rem; max-width: 28rem; margin: 1rem; transform: scale(0.95); transition: transform 0.3s;" id="modalContent">
            <div style="text-align: center;">
                <!-- Icône de succès -->
                <div style="width: 4rem; height: 4rem; background: linear-gradient(135deg, #1a7e6c 0%, #244163 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                    <svg style="width: 2rem; height: 2rem; color: white;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                
                <!-- Titre -->
                <h3 style="font-size: 1.5rem; font-weight: bold; color: #244163; margin-bottom: 0.5rem;">Message envoyé !</h3>
                
                <!-- Message -->
                <p style="color: #6b7280; margin-bottom: 1.5rem;">
                    Merci pour votre demande ! Notre équipe vous recontactera sous 24h.
                </p>
                
                <!-- Bouton -->
                <button 
                    onclick="closeModal()"
                    style="width: 100%; background: linear-gradient(135deg, #1a7e6c 0%, #244163 100%); color: white; padding: 0.75rem; border-radius: 0.5rem; font-weight: 600; border: none; cursor: pointer; transition: all 0.3s; font-size: 1rem;"
                    onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 10px 25px rgba(26, 126, 108, 0.5)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none';"
                >
                    Fermer
                </button>
            </div>
        </div>
    `;
    document.body.appendChild(modal);
    
    // Fonction pour ouvrir la modale
    window.openModal = function() {
        const modalEl = document.getElementById('successModal');
        const modalContent = document.getElementById('modalContent');
        modalEl.style.display = 'flex';
        setTimeout(() => {
            modalEl.style.opacity = '1';
            modalContent.style.transform = 'scale(1)';
        }, 10);
    };
    
    // Fonction pour fermer la modale
    window.closeModal = function() {
        const modalEl = document.getElementById('successModal');
        const modalContent = document.getElementById('modalContent');
        modalContent.style.transform = 'scale(0.95)';
        setTimeout(() => {
            modalEl.style.opacity = '0';
            setTimeout(() => {
                modalEl.style.display = 'none';
            }, 200);
        }, 200);
    };
    
    // Fermer la modale en cliquant sur le fond
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const button = this.querySelector('button[type="submit"]');
            const originalText = button.textContent;
            const originalClasses = button.className;
            
            // Désactiver le bouton pendant l'envoi
            button.disabled = true;
            button.textContent = 'Envoi en cours...';
            button.className = button.className.replace('hover:-translate-y-1', '');
            
            // Envoi des données
            fetch('contact.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur serveur');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Animation de succès
                    button.textContent = '✓ Message envoyé !';
                    button.className = originalClasses.replace('from-[#1a7e6c] to-[#244163]', 'from-green-500 to-green-600');
                    
                    setTimeout(() => {
                        // Ouvrir la modale au lieu de l'alert
                        openModal();
                        
                        // Réinitialiser le formulaire
                        contactForm.reset();
                        button.textContent = originalText;
                        button.className = originalClasses;
                        button.disabled = false;
                    }, 1500);
                } else {
                    throw new Error(data.message || 'Erreur lors de l\'envoi');
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                
                // Message d'erreur avec modale aussi
                alert('Une erreur est survenue lors de l\'envoi. Veuillez réessayer ou nous contacter directement par téléphone.');
                
                // Réinitialiser le bouton
                button.textContent = originalText;
                button.className = originalClasses;
                button.disabled = false;
            });
        });
    }
});