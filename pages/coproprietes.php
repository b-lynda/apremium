<!DOCTYPE html>
<html lang="en">
    <?php 
$jsonLd = '{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Accueil", "item": "https://'. $_SERVER['HTTP_HOST'] .'"},
    {"@type": "ListItem", "position": 2, "name": "Nos services", "item": "https://'. $_SERVER['HTTP_HOST'] .'/pages/nos-services.php"},
    {"@type": "ListItem", "position": 3, "name": "Copropriétés", "item": "https://'. $_SERVER['HTTP_HOST'] .'/pages/coproprietes.php"}
  ]
}';
?>
    <head>
        <title>APG | Copropriétés</title>
        <?php include __DIR__ . '/../components/head.php'; ?>
    </head>

<body>
    <!-- ── SECTION ÉTABLISSEMENTS COUVERTS ── -->
<section class="py-20 px-6 bg-white border-t-4 border-[#1a7e6c]">

  <!-- En-tête -->
  <div class="text-center mb-14">
    <span class="inline-flex items-center gap-2 bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c] text-[0.72rem] font-semibold px-3.5 py-1.5 rounded-md uppercase tracking-wider mb-4">
      <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
        <polyline points="9 22 9 12 15 12 15 22"/>
      </svg>
      Nos établissements couverts
    </span>
    <h2 class="text-3xl font-bold text-[#244163] mb-3 py-2">
      Nous intervenons dans tous<br>vos espaces publics
    </h2>
    <div class="w-12 h-[3px] bg-[#1a7e6c] rounded-full mx-auto mb-4"></div>
    <p class="text-[#6b7a8d] max-w-xl mx-auto text-base leading-relaxed font-light">
      De la mairie au gymnase, d'une crèche à une médiathèque — ANYX PREMIUM adapte
      ses protocoles à chaque type d'établissement recevant du public.
    </p>
  </div>

  <!-- Grille des cards -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-6xl mx-auto">

    <!-- Card 1 — Mairies -->
    <div class="group relative bg-white border border-[#e2eae7] rounded-[16px] p-7 overflow-hidden cursor-default
                transition-all duration-200
                hover:border-[#c2e8df] hover:bg-[#f8fdfb] hover:-translate-y-1 hover:shadow-lg">
      <!-- Barre top au hover -->
      <div class="absolute top-0 left-0 right-0 h-[3px] bg-[#1a7e6c] rounded-t-[16px]
                  scale-x-0 origin-left transition-transform duration-200
                  group-hover:scale-x-100"></div>
      <!-- Icône -->
      <div class="w-12 h-12 rounded-[12px] bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4
                  transition-all duration-200
                  group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c]">
        <svg class="w-5 h-5 stroke-[#1a7e6c] fill-none transition-all duration-200 group-hover:stroke-white"
             viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="3" width="18" height="18" rx="2"/>
          <path d="M9 22V12h6v10M3 9h18"/>
        </svg>
      </div>
      <p class="font-bold text-[#1a2332] text-[0.95rem] mb-2">Mairies & bâtiments administratifs</p>
      <p class="text-[0.8rem] text-[#6b7a8d] leading-relaxed mb-4">
        Accueil du public, bureaux des agents, salles de conseil et espaces communs.
      </p>
      <div class="flex flex-wrap gap-1.5">
        <span class="inline-flex items-center gap-1.5 text-[0.68rem] font-medium px-2.5 py-1 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c]">
          <span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>Quotidien
        </span>
        <span class="inline-flex items-center gap-1.5 text-[0.68rem] font-medium px-2.5 py-1 rounded-full bg-[#eef2f7] border border-[#c5d3e8] text-[#244163]">
          <span class="w-1.5 h-1.5 rounded-full bg-[#244163]"></span>Hors heures
        </span>
      </div>
    </div>

    <!-- Card 2 — Écoles -->
    <div class="group relative bg-white border border-[#e2eae7] rounded-[16px] p-7 overflow-hidden cursor-default
                transition-all duration-200
                hover:border-[#c2e8df] hover:bg-[#f8fdfb] hover:-translate-y-1 hover:shadow-lg">
      <div class="absolute top-0 left-0 right-0 h-[3px] bg-[#1a7e6c] rounded-t-[16px]
                  scale-x-0 origin-left transition-transform duration-200
                  group-hover:scale-x-100"></div>
      <div class="w-12 h-12 rounded-[12px] bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4
                  transition-all duration-200
                  group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c]">
        <svg class="w-5 h-5 stroke-[#1a7e6c] fill-none transition-all duration-200 group-hover:stroke-white"
             viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
          <path d="M6 12v5c3.33 2 8.67 2 12 0v-5"/>
        </svg>
      </div>
      <p class="font-bold text-[#1a2332] text-[0.95rem] mb-2">Écoles, collèges & lycées</p>
      <p class="text-[0.8rem] text-[#6b7a8d] leading-relaxed mb-4">
        Salles de classe, réfectoires, sanitaires. Planning calé sur le calendrier scolaire.
      </p>
      <div class="flex flex-wrap gap-1.5">
        <span class="inline-flex items-center gap-1.5 text-[0.68rem] font-medium px-2.5 py-1 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c]">
          <span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>Norme EN
        </span>
        <span class="inline-flex items-center gap-1.5 text-[0.68rem] font-medium px-2.5 py-1 rounded-full bg-[#fef4e6] border border-[#f7d9a0] text-[#9a5f0a]">
          <span class="w-1.5 h-1.5 rounded-full bg-[#e08a1a]"></span>Calendrier scolaire
        </span>
      </div>
    </div>

    <!-- Card 3 — Crèches -->
    <div class="group relative bg-white border border-[#e2eae7] rounded-[16px] p-7 overflow-hidden cursor-default
                transition-all duration-200
                hover:border-[#c2e8df] hover:bg-[#f8fdfb] hover:-translate-y-1 hover:shadow-lg">
      <div class="absolute top-0 left-0 right-0 h-[3px] bg-[#1a7e6c] rounded-t-[16px]
                  scale-x-0 origin-left transition-transform duration-200
                  group-hover:scale-x-100"></div>
      <div class="w-12 h-12 rounded-[12px] bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4
                  transition-all duration-200
                  group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c]">
        <svg class="w-5 h-5 stroke-[#1a7e6c] fill-none transition-all duration-200 group-hover:stroke-white"
             viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
        </svg>
      </div>
      <p class="font-bold text-[#1a2332] text-[0.95rem] mb-2">Crèches & structures petite enfance</p>
      <p class="text-[0.8rem] text-[#6b7a8d] leading-relaxed mb-4">
        Protocoles renforcés, produits hypoallergéniques, désinfection des zones de jeux.
      </p>
      <div class="flex flex-wrap gap-1.5">
        <span class="inline-flex items-center gap-1.5 text-[0.68rem] font-medium px-2.5 py-1 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c]">
          <span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>Produits homologués
        </span>
        <span class="inline-flex items-center gap-1.5 text-[0.68rem] font-medium px-2.5 py-1 rounded-full bg-[#eef2f7] border border-[#c5d3e8] text-[#244163]">
          <span class="w-1.5 h-1.5 rounded-full bg-[#244163]"></span>Zones sensibles
        </span>
      </div>
    </div>

    <!-- Card 4 — Gymnases -->
    <div class="group relative bg-white border border-[#e2eae7] rounded-[16px] p-7 overflow-hidden cursor-default
                transition-all duration-200
                hover:border-[#c2e8df] hover:bg-[#f8fdfb] hover:-translate-y-1 hover:shadow-lg">
      <div class="absolute top-0 left-0 right-0 h-[3px] bg-[#1a7e6c] rounded-t-[16px]
                  scale-x-0 origin-left transition-transform duration-200
                  group-hover:scale-x-100"></div>
      <div class="w-12 h-12 rounded-[12px] bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4
                  transition-all duration-200
                  group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c]">
        <svg class="w-5 h-5 stroke-[#1a7e6c] fill-none transition-all duration-200 group-hover:stroke-white"
             viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="18" cy="5" r="3"/><circle cx="6" cy="19" r="3"/>
          <path d="M13 6l-8 8"/><path d="M16 10l-2.5 2.5"/><path d="M10.5 16.5L8 19"/>
        </svg>
      </div>
      <p class="font-bold text-[#1a2332] text-[0.95rem] mb-2">Gymnases & équipements sportifs</p>
      <p class="text-[0.8rem] text-[#6b7a8d] leading-relaxed mb-4">
        Vestiaires, douches, gradins, parquets sportifs. Désinfection après chaque session.
      </p>
      <div class="flex flex-wrap gap-1.5">
        <span class="inline-flex items-center gap-1.5 text-[0.68rem] font-medium px-2.5 py-1 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c]">
          <span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>Désinfection
        </span>
        <span class="inline-flex items-center gap-1.5 text-[0.68rem] font-medium px-2.5 py-1 rounded-full bg-[#fef4e6] border border-[#f7d9a0] text-[#9a5f0a]">
          <span class="w-1.5 h-1.5 rounded-full bg-[#e08a1a]"></span>7j/7
        </span>
      </div>
    </div>

    <!-- Card 5 — Médiathèques -->
    <div class="group relative bg-white border border-[#e2eae7] rounded-[16px] p-7 overflow-hidden cursor-default
                transition-all duration-200
                hover:border-[#c2e8df] hover:bg-[#f8fdfb] hover:-translate-y-1 hover:shadow-lg">
      <div class="absolute top-0 left-0 right-0 h-[3px] bg-[#1a7e6c] rounded-t-[16px]
                  scale-x-0 origin-left transition-transform duration-200
                  group-hover:scale-x-100"></div>
      <div class="w-12 h-12 rounded-[12px] bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4
                  transition-all duration-200
                  group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c]">
        <svg class="w-5 h-5 stroke-[#1a7e6c] fill-none transition-all duration-200 group-hover:stroke-white"
             viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
          <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
        </svg>
      </div>
      <p class="font-bold text-[#1a2332] text-[0.95rem] mb-2">Médiathèques & espaces culturels</p>
      <p class="text-[0.8rem] text-[#6b7a8d] leading-relaxed mb-4">
        Salles de lecture, expositions, auditoriums. Respect des équipements et collections.
      </p>
      <div class="flex flex-wrap gap-1.5">
        <span class="inline-flex items-center gap-1.5 text-[0.68rem] font-medium px-2.5 py-1 rounded-full bg-[#eef2f7] border border-[#c5d3e8] text-[#244163]">
          <span class="w-1.5 h-1.5 rounded-full bg-[#244163]"></span>Surfaces fragiles
        </span>
        <span class="inline-flex items-center gap-1.5 text-[0.68rem] font-medium px-2.5 py-1 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c]">
          <span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>Hebdomadaire
        </span>
      </div>
    </div>

    <!-- Card 6 — Extérieurs -->
    <div class="group relative bg-white border border-[#e2eae7] rounded-[16px] p-7 overflow-hidden cursor-default
                transition-all duration-200
                hover:border-[#c2e8df] hover:bg-[#f8fdfb] hover:-translate-y-1 hover:shadow-lg">
      <div class="absolute top-0 left-0 right-0 h-[3px] bg-[#1a7e6c] rounded-t-[16px]
                  scale-x-0 origin-left transition-transform duration-200
                  group-hover:scale-x-100"></div>
      <div class="w-12 h-12 rounded-[12px] bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4
                  transition-all duration-200
                  group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c]">
        <svg class="w-5 h-5 stroke-[#1a7e6c] fill-none transition-all duration-200 group-hover:stroke-white"
             viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 22V12"/>
          <path d="M5 12l7-9 7 9H5z"/>
          <path d="M3 17l9-5 9 5"/>
        </svg>
      </div>
      <p class="font-bold text-[#1a2332] text-[0.95rem] mb-2">Espaces extérieurs publics</p>
      <p class="text-[0.8rem] text-[#6b7a8d] leading-relaxed mb-4">
        Parkings, cours, abords de bâtiments, balayage mécanique et nettoyage haute pression.
      </p>
      <div class="flex flex-wrap gap-1.5">
        <span class="inline-flex items-center gap-1.5 text-[0.68rem] font-medium px-2.5 py-1 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c]">
          <span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>Haute pression
        </span>
        <span class="inline-flex items-center gap-1.5 text-[0.68rem] font-medium px-2.5 py-1 rounded-full bg-[#fef4e6] border border-[#f7d9a0] text-[#9a5f0a]">
          <span class="w-1.5 h-1.5 rounded-full bg-[#e08a1a]"></span>Saisonnier
        </span>
      </div>
    </div>

  </div>
</section>
<!-- ── FIN SECTION ÉTABLISSEMENTS COUVERTS ── -->
</body>
</html>