<!DOCTYPE html>
<html lang="fr">
    <?php 
$jsonLd = '{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Accueil", "item": "https://'. $_SERVER['HTTP_HOST'] .'"},
    {"@type": "ListItem", "position": 2, "name": "Nos services", "item": "https://'. $_SERVER['HTTP_HOST'] .'/pages/nos-services.php"},
    {"@type": "ListItem", "position": 3, "name": "Tertiaire", "item": "https://'. $_SERVER['HTTP_HOST'] .'/pages/tertiaire.php"}
  ]
}';
?>
    <head>
        <title>APG | Tertiaire</title>
        <?php include __DIR__ . '/../components/head.php'; ?>
    </head>
    

<body class="m-0 p-0">
 
    <!-- Navbar -->
    <?php include __DIR__ . '/../components/header.php'; ?>

 
 
    <!-- ── HERO ── -->
    <section class="relative mt-0 min-h-screen flex flex-col overflow-hidden bg-white">
 
      <!-- Accent vert gauche -->
      <div class="absolute top-0 left-0 bottom-0 w-[5px] bg-[#1a7e6c] z-10"></div>
 
      <!-- Motif de points haut droite -->
      <div class="dots-green absolute top-0 right-0 w-[320px] h-80 pointer-events-none z-0"></div>
 
      <!-- Motif de points bas gauche -->
      <div class="dots-blue absolute bottom-0 left-14 w-[180px] h-[180px] pointer-events-none z-0"></div>
 
      <!-- Cercles décoratifs bas droite -->
      <div class="absolute -bottom-16 -right-16 w-[300px] h-[300px] rounded-full border border-[#1a7e6c]/10 pointer-events-none z-0"></div>
      <div class="absolute bottom-5 right-5 w-[180px] h-[180px] rounded-full border border-[#1a7e6c]/[0.07] pointer-events-none z-0"></div>
 
      <!-- ── CONTENU PRINCIPAL ── -->
      <div class="relative z-10 flex-1 max-w-7xl mx-auto w-full pl-10 pr-6 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center pb-12">
 
        <!-- ── GAUCHE ── -->
        <div class="flex flex-col">
 
          <!-- Badge secteur -->
          <div class="mb-6">
            <span class="inline-flex items-center gap-2 bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c] text-[0.72rem] font-semibold px-3.5 py-1.5 rounded-md uppercase tracking-wider">
              Tertiaire
            </span>
          </div>
 
          <!-- Titre -->
          <h1 class="text-[clamp(2rem,3.8vw,3.2rem)] font-extrabold text-[#1a2332] leading-[1.08] tracking-tight mb-4">
            Quand l'environnement de travail fait
            <span class="title-highlight">la différence</span><br>
          </h1>
 
          <!-- Séparateur -->
          <div class="flex items-center gap-3 mb-5">
            <div class="w-12 h-[3px] bg-[#1a7e6c] rounded-full"></div>
            <div class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c] opacity-40"></div>
            <div class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c] opacity-20"></div>
          </div>
 
          <!-- Sous-titre -->
          <p class="text-base text-[#6b7a8d] leading-[1.75] font-light max-w-[500px] mb-8">
            Bureaux, agences, cabinets médicaux ; nous assurons l'entretien de vos espaces tertiaires avec discrétion, 
            régularité et des protocoles adaptés à chaque environnement de travail.
          </p>
 
          <!-- 4 atouts checkmarks -->
          <div class="flex flex-col gap-3 mb-10">
 
            <div class="flex items-center gap-3 px-4 py-2.5 rounded-[10px] border border-[#e2eae7] bg-white hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
              <div class="w-5 h-5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center hrink-0 group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c] transition-all">
                <svg class="w-2.5 h-2.5 stroke-[#1a7e6c] group-hover:stroke-white fill-none" stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="text-sm text-[#6b7a8d] group-hover:text-[#1a2332] transition-colors">Intervention planifiée selon vos horaires, sans contrainte
</span>
            </div>
 
            <div class="flex items-center gap-3 px-4 py-2.5 rounded-[10px] border border-[#e2eae7] bg-white hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
              <div class="w-5 h-5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center hrink-0 group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c] transition-all">
                <svg class="w-2.5 h-2.5 stroke-[#1a7e6c] group-hover:stroke-white fill-none" stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="text-sm text-[#6b7a8d] group-hover:text-[#1a2332] transition-colors">Produits éco-labellisés, sans substances nocives</span>
            </div>
 
            <div class="flex items-center gap-3 px-4 py-2.5 rounded-[10px] border border-[#e2eae7] bg-white hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
              <div class="w-5 h-5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center hrink-0 group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c] transition-all">
                <svg class="w-2.5 h-2.5 stroke-[#1a7e6c] group-hover:stroke-white fill-none" stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="text-sm text-[#6b7a8d] group-hover:text-[#1a2332] transition-colors">Réactif 7j/7 en cas d'imprévu ou d'urgence</span>
            </div>
 
            <div class="flex items-center gap-3 px-4 py-2.5 rounded-[10px] border border-[#e2eae7] bg-white hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
              <div class="w-5 h-5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center shrink-0 group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c] transition-all">
                <svg class="w-2.5 h-2.5 stroke-[#1a7e6c] group-hover:stroke-white fill-none" stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="text-sm text-[#6b7a8d] group-hover:text-[#1a2332] transition-colors">Équipe dédiée, pas de rotation d'agents inconnue</span>
            </div>
 
          </div>
 
          <!-- Boutons CTA -->
          <div class="flex gap-3 flex-wrap">
            <a href="#offre" class="inline-flex items-center gap-2 bg-[#e8f5f2] text-[#1a7e6c] font-semibold text-sm px-6 py-3.5 rounded-[10px] border border-[#c2e8df] transition-all duration-200 hover:bg-[#1a7e6c] hover:text-white hover:border-[#1a7e6c] hover:-translate-y-0.5">
              Notre offre complète
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"/>
                <polyline points="12 5 19 12 12 19"/>
              </svg>
            </a>
          </div>
 
        </div>
 
        <!-- ── DROITE ── -->
        <div class="flex flex-col gap-5">
 
          <!-- Card engagement chiffré -->
          <div class="relative bg-white border border-[#e2eae7] rounded-[20px] p-7 shadow-sm card-top-bar overflow-hidden">
 
            <div class="flex items-start justify-between mb-6">
              <div>
                <p class="text-[1.05rem] font-bold text-[#1a2332] mb-1">Notre engagement chiffré</p>
                <p class="text-[0.78rem] text-[#6b7a8d]">La propreté au service de votre image professionnelle</p>
              </div>
             
            </div>
 
            <!-- Grille 4 stats -->
            <div class="grid grid-cols-2 gap-3">
              <div class="bg-[#f4f7f5] rounded-xl p-4 text-center border border-[#e2eae7] hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
                <p class="text-[1.7rem] font-extrabold text-[#1a7e6c] leading-none mb-1.5 group-hover:scale-105 transition-transform">12</p>
                <p class="text-[0.7rem] text-[#6b7a8d]">départements couverts</p>
              </div>
              <div class="bg-[#f4f7f5] rounded-xl  p-4 text-center border border-[#e2eae7] hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
                <p class="text-[1.7rem] font-extrabold text-[#1a7e6c] leading-none mb-1.5 group-hover:scale-105 transition-transform">0</p>
                <p class="text-[0.7rem] text-[#6b7a8d]">sous traitance</p>
              </div>
              <div class="bg-[#f4f7f5] rounded-xl p-4 text-center border border-[#e2eae7] hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
                <p class="text-[1.7rem] font-extrabold text-[#1a7e6c] leading-none mb-1.5 group-hover:scale-105 transition-transform">+85%</p>
                <p class="text-[0.7rem] text-[#6b7a8d]">taux de satisfaction</p>
              </div>
              <div class="bg-[#f4f7f5] rounded-xl p-4 text-center border border-[#e2eae7] hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
                <p class="text-[1.7rem] font-extrabold text-[#1a7e6c] leading-none mb-1.5 group-hover:scale-105 transition-transform">2H</p>
                <p class="text-[0.7rem] text-[#6b7a8d]">délai d'intervention urgence</p>
              </div>
            </div>
 
          </div>      
 
        </div>
 
      </div>
 
    </section>

          <?php include __DIR__ . '/../components/footer.php'; ?>

    </body>
</html>