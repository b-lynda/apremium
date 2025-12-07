
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const button = this.querySelector('button[type="submit"]');
            const originalText = button.textContent;
            const originalClasses = button.className;
            
            // Vérifier que la case RGPD est cochée
            const rgpdCheckbox = document.getElementById('rgpd');
            if (!rgpdCheckbox.checked) {
                alert('Vous devez accepter la politique de confidentialité pour envoyer le formulaire.');
                return;
            }
            
            // Désactiver le bouton pendant l'envoi
            button.disabled = true;
            button.textContent = 'Envoi en cours...';
            button.className = button.className.replace('hover:-translate-y-0.5', '');
            
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
                        alert(data.message || 'Merci pour votre demande ! Nous vous recontacterons sous 24h.');
                        
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
                
                alert('Une erreur est survenue lors de l\'envoi. Veuillez réessayer ou nous contacter directement par téléphone.');
                
                // Réinitialiser le bouton
                button.textContent = originalText;
                button.className = originalClasses;
                button.disabled = false;
            });
        });
    }
});