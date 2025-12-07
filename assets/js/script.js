
      const nav = document.querySelector('nav');
      
      window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
          nav.classList.add('bg-white', 'shadow-md');
        } else {
          nav.classList.remove('bg-white', 'shadow-md');
        }
      });

    const scrollContent = document.getElementById('scrollContent');
    scrollContent.innerHTML += scrollContent.innerHTML;

    // Gestion du formulaire de contact
    document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    console.log('Données du formulaire:', Object.fromEntries(formData));
    
    // Animation de succès
    const button = this.querySelector('button[type="submit"]');
    const originalText = button.textContent;
    
    button.textContent = '✓ Message envoyé !';
    button.className = button.className.replace('from-purple-600 to-indigo-600', 'from-green-500 to-green-600');
    
    setTimeout(() => {
        alert('Merci pour votre demande ! Nous vous recontacterons sous 24h.');
        this.reset();
        button.textContent = originalText;
        button.className = button.className.replace('from-green-500 to-green-600', 'from-purple-600 to-indigo-600');
    }, 1500);
});
  
