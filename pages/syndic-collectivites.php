<!DOCTYPE html>
<html lang="fr">
    <?php 
$jsonLd = '{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Accueil", "item": "https://'. $_SERVER['HTTP_HOST'] .'"},
    {"@type": "ListItem", "position": 2, "name": "Nos services", "item": "https://'. $_SERVER['HTTP_HOST'] .'/pages/nos-services.php"},
    {"@type": "ListItem", "position": 3, "name": "Syndic & Collectivités", "item": "https://'. $_SERVER['HTTP_HOST'] .'/pages/syndic-collectivites.php"}
  ]
}';
?>
    <head>
        <title>APG | Syndic & Collectivités</title>
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
              <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                <polyline points="9 22 9 12 15 12 15 22"/>
              </svg>
              Syndic & Collectivités
            </span>
          </div>
 
          <!-- Titre -->
          <h1 class="text-[clamp(2rem,3.8vw,3.2rem)] font-extrabold text-[#1a2332] leading-[1.08] tracking-tight mb-4">
            Partenaire propreté<br>
            des <span class="title-highlight">collectivités</span><br>
            isèroises
          </h1>
 
          <!-- Séparateur -->
          <div class="flex items-center gap-3 mb-5">
            <div class="w-12 h-[3px] bg-[#1a7e6c] rounded-full"></div>
            <div class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c] opacity-40"></div>
            <div class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c] opacity-20"></div>
          </div>
 
          <!-- Sous-titre -->
          <p class="text-base text-[#6b7a8d] leading-[1.75] font-light max-w-[500px] mb-8">
            Acteur local implanté au cœur de l'agglomération grenobloise,
            nous intervenons sur l'ensemble de vos
            <strong class="text-[#1a2332] font-medium">bâtiments administratifs,
            collèges et espaces extérieurs</strong>
            avec des protocoles certifiés et une réactivité sans faille.
          </p>
 
          <!-- 4 atouts checkmarks -->
          <div class="flex flex-col gap-3 mb-10">
 
            <div class="flex items-center gap-3 px-4 py-2.5 rounded-[10px] border border-[#e2eae7] bg-white hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
              <div class="w-5 h-5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center hrink-0 group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c] transition-all">
                <svg class="w-2.5 h-2.5 stroke-[#1a7e6c] group-hover:stroke-white fill-none" stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="text-sm text-[#6b7a8d] group-hover:text-[#1a2332] transition-colors">Connaissance fine du territoire isérois</span>
            </div>
 
            <div class="flex items-center gap-3 px-4 py-2.5 rounded-[10px] border border-[#e2eae7] bg-white hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
              <div class="w-5 h-5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center hrink-0 group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c] transition-all">
                <svg class="w-2.5 h-2.5 stroke-[#1a7e6c] group-hover:stroke-white fill-none" stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="text-sm text-[#6b7a8d] group-hover:text-[#1a2332] transition-colors">Protocoles adaptés aux établissements scolaires</span>
            </div>
 
            <div class="flex items-center gap-3 px-4 py-2.5 rounded-[10px] border border-[#e2eae7] bg-white hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
              <div class="w-5 h-5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center hrink-0 group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c] transition-all">
                <svg class="w-2.5 h-2.5 stroke-[#1a7e6c] group-hover:stroke-white fill-none" stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="text-sm text-[#6b7a8d] group-hover:text-[#1a2332] transition-colors">Produits éco-labellisés, conformes aux politiques RSE</span>
            </div>
 
            <div class="flex items-center gap-3 px-4 py-2.5 rounded-[10px] border border-[#e2eae7] bg-white hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
              <div class="w-5 h-5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center shrink-0 group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c] transition-all">
                <svg class="w-2.5 h-2.5 stroke-[#1a7e6c] group-hover:stroke-white fill-none" stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="text-sm text-[#6b7a8d] group-hover:text-[#1a2332] transition-colors">Interlocuteur unique & référent dédié à votre collectivité</span>
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
                <p class="text-[0.78rem] text-[#6b7a8d]">Partenaire des collectivités isèroises</p>
              </div>
             
            </div>
 
            <!-- Grille 4 stats -->
            <div class="grid grid-cols-2 gap-3">
              <div class="bg-[#f4f7f5] rounded-xl p-4 text-center border border-[#e2eae7] hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
                <p class="text-[1.7rem] font-extrabold text-[#1a7e6c] leading-none mb-1.5 group-hover:scale-105 transition-transform">10+</p>
                <p class="text-[0.7rem] text-[#6b7a8d]">ans d'expertise</p>
              </div>
              <div class="bg-[#f4f7f5] rounded-xl  p-4 text-center border border-[#e2eae7] hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
                <p class="text-[1.7rem] font-extrabold text-[#1a7e6c] leading-none mb-1.5 group-hover:scale-105 transition-transform">7j/7</p>
                <p class="text-[0.7rem] text-[#6b7a8d]">disponibilité</p>
              </div>
              <div class="bg-[#f4f7f5] rounded-xl p-4 text-center border border-[#e2eae7] hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
                <p class="text-[1.7rem] font-extrabold text-[#1a7e6c] leading-none mb-1.5 group-hover:scale-105 transition-transform">24h</p>
                <p class="text-[0.7rem] text-[#6b7a8d]">délai de devis</p>
              </div>
              <div class="bg-[#f4f7f5] rounded-xl p-4 text-center border border-[#e2eae7] hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
                <p class="text-[1.7rem] font-extrabold text-[#1a7e6c] leading-none mb-1.5 group-hover:scale-105 transition-transform">100%</p>
                <p class="text-[0.7rem] text-[#6b7a8d]">ancrage local</p>
              </div>
            </div>
 
            <!-- Footer carte -->
            <div class="flex items-center justify-between mt-5 pt-4 border-t border-[#e2eae7]">
              <p class="text-[0.72rem] text-[#6b7a8d]">
                Devis sous <strong class="text-[#1a7e6c] font-semibold">24h</strong> · Sans engagement
              </p>
              <a href="tel:+33988327743" class="inline-flex items-center gap-1.5 text-[0.75rem] font-semibold text-[#244163] hover:text-[#1a7e6c] transition-colors group">
                Nous appeler
                <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"/>
                  <polyline points="12 5 19 12 12 19"/>
                </svg>
              </a>
            </div>
 
          </div>
 
          <!-- Pill badges -->
          <div class="flex flex-wrap gap-2">
            <span class="inline-flex items-center gap-1.5 text-[0.75rem] font-medium px-3.5 py-2 rounded-full border border-[#e2eae7] bg-white text-[#6b7a8d] hover:border-[#c2e8df] hover:text-[#1a7e6c] hover:bg-[#e8f5f2] transition-all cursor-default">
              <span class="w-1.5 h-1.5 rounded-full bg-[#6b7a8d]"></span>
              Locale
            </span>
            <span class="inline-flex items-center gap-1.5 text-[0.75rem] font-medium px-3.5 py-2 rounded-full border border-[#c2e8df] bg-[#e8f5f2] text-[#1a7e6c] cursor-default">
              <span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>
              Certifiée
            </span>
            <span class="inline-flex items-center gap-1.5 text-[0.75rem] font-medium px-3.5 py-2 rounded-full border border-[#e2eae7] bg-white text-[#6b7a8d] hover:border-[#c2e8df] hover:text-[#1a7e6c] hover:bg-[#e8f5f2] transition-all cursor-default">
              <span class="w-1.5 h-1.5 rounded-full bg-[#6b7a8d]"></span>
              Réactive
            </span>
            <span class="inline-flex items-center gap-1.5 text-[0.75rem] font-medium px-3.5 py-2 rounded-full border border-[#e2eae7] bg-white text-[#6b7a8d] hover:border-[#c2e8df] hover:text-[#1a7e6c] hover:bg-[#e8f5f2] transition-all cursor-default">
              <span class="w-1.5 h-1.5 rounded-full bg-[#6b7a8d]"></span>
              Éco-responsable
            </span>
            <span class="inline-flex items-center gap-1.5 text-[0.75rem] font-medium px-3.5 py-2 rounded-full border border-[#e2eae7] bg-white text-[#6b7a8d] hover:border-[#c2e8df] hover:text-[#1a7e6c] hover:bg-[#e8f5f2] transition-all cursor-default">
              <span class="w-1.5 h-1.5 rounded-full bg-[#6b7a8d]"></span>
              7j/7
            </span>
          </div>
 
        </div>
 
      </div>
 
    </section>

    <!-- Section accordéon services -->
<section class="py-16 w-full border-t-4 border-[#1a7e6c]" id="offre">
  <div class="text-center mb-12">
    <h2 class="text-3xl font-bold text-[#244163] mb-3 py-2">Entretien des collectivités</h2>
      <div class="w-12 h-[3px] bg-[#1a7e6c] rounded-full mx-auto mb-4"></div>
  </div>

<div class="flex flex-col gap-3 max-w-3xl mx-auto px-4 md:px-0" id="accordion">
    <!-- Item 1 -->
    <div class="acc-item border border-[#e2eae7] rounded-[14px] overflow-hidden transition-all duration-300 hover:border-[#c2e8df] hover:shadow-md">
      <button aria-expanded="false"
        class="w-full flex items-center gap-4 px-5 py-4 text-left hover:bg-[#e8f5f2] transition-colors">
        <div class="w-11 h-11 rounded-[11px] bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center shrink-0">
          <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 22V12h6v10M3 9h18"/></svg>
        </div>
        <div class="flex-1">
          <p class="font-semibold text-[#1a2332]">Bâtiments administratifs</p>
          <p class="text-xs text-[#6b7a8d] mt-0.5">Bureaux & espaces d'accueil du public</p>
        </div>
        <div class="w-7 h-7 rounded-full border border-[#e2eae7] flex items-center justify-center shrink-0 transition-all duration-300 acc-chevron">
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="#6b7a8d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
        </div>
      </button>
      <div class="h-px bg-[#e2eae7] mx-5"></div>
      <div class="acc-body">
        <div class="px-5 pb-5 pt-4 pl-20">
          <p class="text-sm text-[#6b7a8d] leading-relaxed mb-4">
            Entretien régulier des bureaux, salles de réunion et espaces d'accueil.<br>
            Nos équipes interviennent avec discrétion, hors heures de bureau ou en journée.
          </p>
          <div class="flex flex-wrap gap-2">
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c]"><span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>Quotidien</span>
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c]"><span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>Hebdomadaire</span>
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#eef2f7] border border-[#c5d3e8] text-[#244163]"><span class="w-1.5 h-1.5 rounded-full bg-[#244163]"></span>Certifié ISO</span>
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#eef1f5] border border-[#c8d2de] text-[#3d4f63]"><span class="w-1.5 h-1.5 rounded-full bg-[#5a6e82]"></span>Hors heures</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Item 2 -->
    <div class="acc-item border border-[#e2eae7] rounded-[14px] overflow-hidden transition-all duration-300 hover:border-[#c2e8df] hover:shadow-md">
      <button  aria-expanded="false"
        class="w-full flex items-center gap-4 px-5 py-4 text-left hover:bg-[#e8f5f2] transition-colors">
        <div class="w-11 h-11 rounded-[11px] bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center shrink-0">
          <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3.33 2 8.67 2 12 0v-5"/></svg>
        </div>
        <div class="flex-1">
          <p class="font-semibold text-[#1a2332]">Collèges & établissements scolaires</p>
          <p class="text-xs text-[#6b7a8d] mt-0.5">Salles de classe, réfectoires et sanitaires</p>
        </div>
        <div class="w-7 h-7 rounded-full border border-[#e2eae7] flex items-center justify-center shrink-0 transition-all duration-300 acc-chevron">
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="#6b7a8d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
        </div>
      </button>
      <div class="h-px bg-[#e2eae7] mx-5"></div>
      <div class="acc-body">
        <div class="px-5 pb-5 pt-4 pl-20">
          <p class="text-sm text-[#6b7a8d] leading-relaxed mb-4">
            Nettoyage des salles de classe, réfectoires et sanitaires.<br>
            Planning adapté au calendrier scolaire, produits conformes aux normes EN.
          </p>
          <div class="flex flex-wrap gap-2">
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c]"><span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>Quotidien</span>
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#eef2f7] border border-[#c5d3e8] text-[#244163]"><span class="w-1.5 h-1.5 rounded-full bg-[#244163]"></span>Norme EN</span>
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#fef4e6] border border-[#f7d9a0] text-[#9a5f0a]"><span class="w-1.5 h-1.5 rounded-full bg-[#e08a1a]"></span>Calendrier scolaire</span>
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#eef1f5] border border-[#c8d2de] text-[#3d4f63]"><span class="w-1.5 h-1.5 rounded-full bg-[#5a6e82]"></span>Produits homologués</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Item 3 -->
    <div class="acc-item border border-[#e2eae7] rounded-[14px] overflow-hidden transition-all duration-300 hover:border-[#c2e8df] hover:shadow-md">
      <button  aria-expanded="false"
        class="w-full flex items-center gap-4 px-5 py-4 text-left hover:bg-[#e8f5f2] transition-colors">
        <div class="w-11 h-11 rounded-[11px] bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center shrink-0">
          <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22V12"/><path d="M5 12l7-9 7 9H5z"/><path d="M3 17l9-5 9 5"/></svg>
        </div>
        <div class="flex-1">
          <p class="font-semibold text-[#1a2332]">Espaces extérieurs</p>
          <p class="text-xs text-[#6b7a8d] mt-0.5">Parkings, cours & abords de bâtiments</p>
        </div>
        <div class="w-7 h-7 rounded-full border border-[#e2eae7] flex items-center justify-center shrink-0 transition-all duration-300 acc-chevron">
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="#6b7a8d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
        </div>
      </button>
      <div class="h-px bg-[#e2eae7] mx-5"></div>
      <div class="acc-body">
        <div class="px-5 pb-5 pt-4 pl-20">
          <p class="text-sm text-[#6b7a8d] leading-relaxed mb-4">
            Entretien des parkings, cours et abords de bâtiments.<br>
            Balayage mécanique, désherbage, évacuation des déchets et nettoyage haute pression.
          </p>
          <div class="flex flex-wrap gap-2">
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c]"><span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>Balayage mécanique</span>
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c]"><span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>Haute pression</span>
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#fef4e6] border border-[#f7d9a0] text-[#9a5f0a]"><span class="w-1.5 h-1.5 rounded-full bg-[#e08a1a]"></span>Saisonnier</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Item 4 -->
    <div class="acc-item border border-[#e2eae7] rounded-[14px] overflow-hidden transition-all duration-300 hover:border-[#c2e8df] hover:shadow-md">
      <button aria-expanded="false"
        class="w-full flex items-center gap-4 px-5 py-4 text-left hover:bg-[#e8f5f2] transition-colors">
        <div class="w-11 h-11 rounded-[11px] bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center shrink-0">
          <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/><circle cx="12" cy="16" r="1.5"/></svg>
        </div>
        <div class="flex-1">
          <p class="font-semibold text-[#1a2332]">Prestations ponctuelles</p>
          <p class="text-xs text-[#6b7a8d] mt-0.5">Remise en état après travaux ou événements</p>
        </div>
        <div class="w-7 h-7 rounded-full border border-[#e2eae7] flex items-center justify-center shrink-0 transition-all duration-300 acc-chevron">
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="#6b7a8d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
        </div>
      </button>
      <div class="h-px bg-[#e2eae7] mx-5"></div>
      <div class="acc-body">
        <div class="px-5 pb-5 pt-4 pl-20">
          <p class="text-sm text-[#6b7a8d] leading-relaxed mb-4">
            Intervention rapide pour la remise en état de vos locaux après travaux, 
            événements ou sinistres. Devis sous 24h, mobilisation possible en urgence.
          </p>
          <div class="flex flex-wrap gap-2">
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#fdeef1] border border-[#f5b8c7] text-[#9a2040]"><span class="w-1.5 h-1.5 rounded-full bg-[#c93056]"></span>Urgence 24h</span>
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c]"><span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>Post-travaux</span>
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#fef4e6] border border-[#f7d9a0] text-[#9a5f0a]"><span class="w-1.5 h-1.5 rounded-full bg-[#e08a1a]"></span>Post-événement</span>
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#eef1f5] border border-[#c8d2de] text-[#3d4f63]"><span class="w-1.5 h-1.5 rounded-full bg-[#5a6e82]"></span>Sur devis</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Item 5 -->
    <div class="acc-item border border-[#e2eae7] rounded-[14px] overflow-hidden transition-all duration-300 hover:border-[#c2e8df] hover:shadow-md">
      <button  aria-expanded="false"
        class="w-full flex items-center gap-4 px-5 py-4 text-left hover:bg-[#e8f5f2] transition-colors">
        <div class="w-11 h-11 rounded-[11px] bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center shrink-0">
          <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 3H5a2 2 0 0 0-2 2v4"/><path d="M9 3h6"/><path d="M15 3h4a2 2 0 0 1 2 2v4"/><path d="M3 9v6"/><path d="M21 9v6"/><path d="M3 15v2a2 2 0 0 0 2 2h4"/><path d="M21 15v2a2 2 0 0 1-2 2h-4"/><path d="M9 21h6"/><circle cx="12" cy="12" r="3"/></svg>
        </div>
        <div class="flex-1">
          <p class="font-semibold text-[#1a2332]">Nettoyage spécialisé</p>
          <p class="text-xs text-[#6b7a8d] mt-0.5">Désinfection & traitement des surfaces fragiles</p>
        </div>
        <div class="w-7 h-7 rounded-full border border-[#e2eae7] flex items-center justify-center shrink-0 transition-all duration-300 acc-chevron">
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="#6b7a8d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
        </div>
      </button>
      <div class="h-px bg-[#e2eae7] mx-5"></div>
      <div class="acc-body">
        <div class="px-5 pb-5 pt-4 pl-20">
          <p class="text-sm text-[#6b7a8d] leading-relaxed mb-4">
            Désinfection approfondie avec protocoles biocides certifiés.
            Traitement des surfaces fragiles, zones sensibles et interventions HACCP.
          </p>
          <div class="flex flex-wrap gap-2">
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#eef2f7] border border-[#c5d3e8] text-[#244163]"><span class="w-1.5 h-1.5 rounded-full bg-[#244163]"></span>Protocole biocide</span>
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#eef2f7] border border-[#c5d3e8] text-[#244163]"><span class="w-1.5 h-1.5 rounded-full bg-[#244163]"></span>HACCP</span>
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c]"><span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>Surfaces fragiles</span>
            <span class="inline-flex items-center gap-1.5 text-[0.72rem] font-medium px-3 py-1.5 rounded-full bg-[#fdeef1] border border-[#f5b8c7] text-[#9a2040]"><span class="w-1.5 h-1.5 rounded-full bg-[#c93056]"></span>Zones sensibles</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- Section split avec stats -->
<section class="py-20 px-6" style="background: linear-gradient(135deg, #f0faf7 0%, #ffffff 50%, #eef2f7 100%);">
  <div class="max-w-7xl mx-auto">

    <!-- En-tête section -->
    <div class="text-center mb-14">
      <span class="inline-flex items-center gap-2 bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c] text-[0.72rem] font-semibold px-3.5 py-1.5 rounded-md uppercase tracking-wider mb-4">
        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
          <polyline points="9 22 9 12 15 12 15 22"/>
        </svg>
        Syndic de copropriété
      </span>
      <h2 class="text-3xl font-bold text-[#244163] mb-3">Entretien des parties communes</h2>
      <div class="w-12 h-[3px] bg-[#1a7e6c] rounded-full mx-auto mb-4"></div>
      <p class="text-[#6b7a8d] max-w-2xl mx-auto text-base leading-relaxed">
        Conformément à la loi du 10 juillet 1965, l'entretien des parties communes est une obligation légale.
        Nous prenons en charge l'ensemble de vos espaces collectifs avec rigueur et traçabilité.
      </p>
    </div>

    <!-- Bloc split principal -->
    <div class="grid grid-cols-1 lg:grid-cols-2 rounded-[22px] overflow-hidden shadow-lg">

      <!-- Gauche — fond vert -->
<div class="bg-linear-to-r from-[#1a7e6c] to-[#244163] p-10 lg:p-14 flex flex-col justify-center relative overflow-hidden">
        <!-- Décoration -->
        <div class="absolute top-0 right-0 w-48 h-48 rounded-full bg-white/5 -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-32 h-32 rounded-full bg-white/5 translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

        <p class="text-[0.7rem] font-semibold uppercase tracking-[0.18em] text-white/40 mb-5">Ce que nous prenons en charge</p>

        <h3 class="text-2xl font-bold text-white leading-snug mb-8">
          Toutes vos parties communes,<br>
          <span class="text-[#7ee8d0]">intérieures & extérieures</span>
        </h3>

        <!-- Points -->
        <div class="flex flex-col gap-3 mb-10">

          <div class="flex items-start gap-3 group">
            <div class="w-5 h-5 rounded-full bg-white/15 border border-white/20 flex items-center justify-center shrink-0 mt-0.5 group-hover:bg-white/25 transition-colors">
              <svg class="w-2.5 h-2.5" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <div>
              <p class="text-sm font-medium text-white">Halls d'entrée & cages d'escalier</p>
              <p class="text-xs text-white/55 mt-0.5">Sol, rampes, portes, boîtes aux lettres, interphones</p>
            </div>
          </div>

          <div class="flex items-start gap-3 group">
            <div class="w-5 h-5 rounded-full bg-white/15 border border-white/20 flex items-center justify-center shrink-0 mt-0.5 group-hover:bg-white/25 transition-colors">
              <svg class="w-2.5 h-2.5" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <div>
              <p class="text-sm font-medium text-white">Couloirs, paliers & ascenseurs</p>
              <p class="text-xs text-white/55 mt-0.5">Cabine, miroirs, boutons, points de contact quotidiens</p>
            </div>
          </div>

          <div class="flex items-start gap-3 group">
            <div class="w-5 h-5 rounded-full bg-white/15 border border-white/20 flex items-center justify-center shrink-0 mt-0.5 group-hover:bg-white/25 transition-colors">
              <svg class="w-2.5 h-2.5" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <div>
              <p class="text-sm font-medium text-white">Parkings, garages & locaux poubelles</p>
              <p class="text-xs text-white/55 mt-0.5">Balayage, désinfection containers, gaines et accès</p>
            </div>
          </div>

          <div class="flex items-start gap-3 group">
            <div class="w-5 h-5 rounded-full bg-white/15 border border-white/20 flex items-center justify-center shrink-0 mt-0.5 group-hover:bg-white/25 transition-colors">
              <svg class="w-2.5 h-2.5" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <div>
              <p class="text-sm font-medium text-white">Espaces verts & abords extérieurs</p>
              <p class="text-xs text-white/55 mt-0.5">Voies d'accès, parkings extérieurs, nettoyage haute pression</p>
            </div>
          </div>

          <div class="flex items-start gap-3 group">
            <div class="w-5 h-5 rounded-full bg-white/15 border border-white/20 flex items-center justify-center shrink-0 mt-0.5 group-hover:bg-white/25 transition-colors">
              <svg class="w-2.5 h-2.5" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <div>
              <p class="text-sm font-medium text-white">Produits éco-labellisés exclusivement</p>
              <p class="text-xs text-white/55 mt-0.5">Conformes aux politiques RSE des copropriétés responsables</p>
            </div>
          </div>

        </div>

      </div>

      <!-- Droite — fond clair avec stats + fréquences -->
      <div class="bg-white p-10 lg:p-14 flex flex-col justify-center">


        <!-- Fréquences d'intervention -->
        <div class="border-t border-[#e2eae7] pt-6">
          <p class="text-xs font-semibold text-[#1a2332] mb-4 uppercase tracking-wider">Fréquences d'intervention</p>
          <div class="flex flex-col gap-3">

            <div class="flex items-center justify-between py-2.5 px-4 rounded-[10px] bg-[#f4f7f5] border border-[#e2eae7]">
              <div class="flex items-center gap-2.5">
                <div class="w-2 h-2 rounded-full bg-[#1a7e6c] hrink-0"></div>
                <span class="text-sm text-[#1a2332]">Halls, ascenseurs, points de contact</span>
              </div>
              <span class="text-xs font-semibold text-[#1a7e6c] bg-[#e8f5f2] border border-[#c2e8df] px-2.5 py-1 rounded-full">Quotidien</span>
            </div>

            <div class="flex items-center justify-between py-2.5 px-4 rounded-[10px] bg-[#f4f7f5] border border-[#e2eae7]">
              <div class="flex items-center gap-2.5">
                <div class="w-2 h-2 rounded-full bg-[#1a7e6c] shrink-0"></div>
                <span class="text-sm text-[#1a2332]">Escaliers, couloirs, local poubelles</span>
              </div>
              <span class="text-xs font-semibold text-[#244163] bg-[#eef2f7] border border-[#c5d3e8] px-2.5 py-1 rounded-full">Hebdomadaire</span>
            </div>

            <div class="flex items-center justify-between py-2.5 px-4 rounded-[10px] bg-[#f4f7f5] border border-[#e2eae7]">
              <div class="flex items-center gap-2.5">
                <div class="w-2 h-2 rounded-full bg-[#1a7e6c] shrink-0"></div>
                <span class="text-sm text-[#1a2332]">Parkings, vitrages, haute pression</span>
              </div>
              <span class="text-xs font-semibold text-[#9a5f0a] bg-[#fef4e6] border border-[#f7d9a0] px-2.5 py-1 rounded-full">Mensuel</span>
            </div>

          </div>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- CTA Band N°5 — Fond blanc + accent vert -->
<!-- À coller juste avant le footer dans syndic-collectivites.php -->

<section class="w-full py-16 bg-white border-t-4 border-[#1a7e6c]">
  <div class="max-w-7xl mx-auto px-6">

    <div class="flex flex-col items-center text-center">

      <!-- Badge -->
      <span class="inline-flex items-center gap-2 bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c] text-[0.72rem] font-semibold px-3.5 py-1.5 rounded-[6px] uppercase tracking-wider mb-6">
        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
          <polyline points="9 22 9 12 15 12 15 22"/>
        </svg>
        Syndic & Collectivités
      </span>

      <!-- Titre -->
      <h2 class="text-3xl lg:text-4xl font-bold text-[#244163] leading-tight mb-4 max-w-2xl">
        Un seul interlocuteur pour tous
        vos espaces collectifs
      </h2>

      <!-- Sous-titre -->
      <p class="text-[#6b7a8d] text-base mb-8 max-w-xl leading-relaxed">
        Syndics de copropriété, collectivités, mairies : nous intervenons sur l'ensemble de vos parties communes avec rigueur, réactivité et traçabilité.
      </p>

      <!-- 3 arguments -->
      <div class="flex flex-wrap justify-center gap-3 mb-10">
        <span class="inline-flex items-center gap-1.5 text-[0.75rem] font-medium px-3.5 py-2 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c]">
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          Devis gratuit sous 24h
        </span>
        <span class="inline-flex items-center gap-1.5 text-[0.75rem] font-medium px-3.5 py-2 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c]">
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          Intervention 7j/7
        </span>
        <span class="inline-flex items-center gap-1.5 text-[0.75rem] font-medium px-3.5 py-2 rounded-full bg-[#eef2f7] border border-[#c5d3e8] text-[#244163]">
          <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="#244163" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          Traçabilité garantie 
        </span>
      </div>

      <!-- Boutons -->
      <div class="flex flex-wrap gap-4 justify-center">
        <a href="tel:+33988327743"
           class="inline-flex items-center gap-2 bg-[#244163] text-white font-semibold text-sm px-8 py-4 rounded-[10px] transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg hover:bg-[#1a3050]">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.77 19.79 19.79 0 01.15 1.18 2 2 0 012.11 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
          </svg>
          Demander un devis
        </a>
      </div>

      <!-- Mention rassurante -->
      <p class="text-xs text-[#6b7a8d] mt-6">
        Sans engagement · Réponse garantie sous 24h · Devis personnalisé et gratuit
      </p>

    </div>

  </div>
</section><script>
  const items = document.querySelectorAll('.acc-item');

  items.forEach(item => {
    const trigger = item.querySelector('button');
    const body = item.querySelector('.acc-body');

    trigger.addEventListener('click', () => {
      const isOpen = item.classList.contains('open');

      items.forEach(other => {
        other.classList.remove('open');
        other.querySelector('button').setAttribute('aria-expanded', 'false');
        other.querySelector('.acc-body').style.maxHeight = '0';
        other.querySelector('.acc-chevron').style.transform = 'rotate(0deg)';
        other.querySelector('.acc-chevron').style.background = '';
        other.querySelector('.acc-chevron').style.borderColor = '';
      });

      if (!isOpen) {
        item.classList.add('open');
        trigger.setAttribute('aria-expanded', 'true');
        body.style.maxHeight = body.scrollHeight + 'px';
        item.querySelector('.acc-chevron').style.transform = 'rotate(180deg)';
        item.querySelector('.acc-chevron').style.background = '#1a7e6c';
        item.querySelector('.acc-chevron').style.borderColor = '#1a7e6c';
        item.querySelector('.acc-chevron svg').style.stroke = 'white';
      }
    });
  });

  // Ouvre le premier par défaut
  const first = items[0];
  first.classList.add('open');
  first.querySelector('button').setAttribute('aria-expanded', 'true');
  first.querySelector('.acc-body').style.maxHeight = first.querySelector('.acc-body').scrollHeight + 'px';
  first.querySelector('.acc-chevron').style.transform = 'rotate(180deg)';
  first.querySelector('.acc-chevron').style.background = '#1a7e6c';
  first.querySelector('.acc-chevron').style.borderColor = '#1a7e6c';
  first.querySelector('.acc-chevron svg').style.stroke = 'white';
</script>
      <?php include __DIR__ . '/../components/footer.php'; ?>



</body>
</html>   
