
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
  
