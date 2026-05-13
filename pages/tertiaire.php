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

    <!-- ══════════════════════════════════
         SECTION 2 — Nos engagements
    ══════════════════════════════════ -->
    <section class="py-16 px-8 md:px-20 bg-[#f4f7f5]">
 
      <div class="flex items-center gap-3 mb-6">
        <span class="text-[14px] lg:text-[16px] text-[#1a7e6c] tracking-[2.5px] uppercase font-bold shrink-0">Nos engagements</span>
        <div class="flex-1 h-px bg-[#1a7e6c] opacity-20"></div>
      </div>
 
      <div class="mb-10 max-w-xl">
        <h2 class="text-[clamp(24px,3vw,36px)] font-bold text-[#244163] leading-[1.2] mb-3">
          Ce qui nous distingue,<br>au quotidien
        </h2>
        <p class="text-[15px] text-[#6b7280] leading-relaxed">
          Chaque détail compte pour garantir une prestation à la hauteur de vos exigences professionnelles.
        </p>
      </div>
 
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
 
        <div class="bg-white rounded-xl border-l-[3px] border-l-[#1a7e6c] border-t border-r border-b border-[#e2eae7] p-6 hover:shadow-[0_4px_20px_rgba(26,126,108,0.1)] transition-shadow duration-200">
          <div class="text-[52px] font-extrabold leading-none tracking-[-3px] text-[#1a7e6c] opacity-[0.12] mb-2 select-none" >01</div>
          <h3 class="text-[15px] font-bold text-[#244163] mb-2">Produits éco-labellisés</h3>
          <p class="text-[13px] text-[#6b7280] leading-relaxed">Gamme certifiée Ecocert, sans substances nocives, respectueuse de vos collaborateurs et de l'environnement.</p>
        </div>
 
        <div class="bg-white rounded-xl border-l-[3px] border-l-[#1a7e6c] border-t border-r border-b border-[#e2eae7] p-6 hover:shadow-[0_4px_20px_rgba(26,126,108,0.1)] transition-shadow duration-200">
          <div class="text-[52px] font-extrabold leading-none tracking-[-3px] text-[#1a7e6c] opacity-[0.12] mb-2 select-none" >02</div>
          <h3 class="text-[15px] font-bold text-[#244163] mb-2">Contrat flexible</h3>
          <p class="text-[13px] text-[#6b7280] leading-relaxed">Sans engagement longue durée, adaptable à tout moment selon l'évolution de vos besoins et de votre activité.</p>
        </div>
 
        <div class="bg-white rounded-xl border-l-[3px] border-l-[#1a7e6c] border-t border-r border-b border-[#e2eae7] p-6 hover:shadow-[0_4px_20px_rgba(26,126,108,0.1)] transition-shadow duration-200">
          <div class="text-[52px] font-extrabold leading-none tracking-[-3px] text-[#1a7e6c] opacity-[0.12] mb-2 select-none">03</div>
          <h3 class="text-[15px] font-bold text-[#244163] mb-2">Zéro interruption</h3>
          <p class="text-[13px] text-[#6b7280] leading-relaxed">Nos agents interviennent avant ou après vos horaires de bureau — votre activité n'est jamais perturbée.</p>
        </div>
 
        <div class="bg-white rounded-xl border-l-[3px] border-l-[#1a7e6c] border-t border-r border-b border-[#e2eae7] p-6 hover:shadow-[0_4px_20px_rgba(26,126,108,0.1)] transition-shadow duration-200">
          <div class="text-[52px] font-extrabold leading-none tracking-[-3px] text-[#1a7e6c] opacity-[0.12] mb-2 select-none">04</div>
          <h3 class="text-[15px] font-bold text-[#244163] mb-2">Interlocuteur dédié</h3>
          <p class="text-[13px] text-[#6b7280] leading-relaxed">Un référent unique pour le suivi de votre contrat, la gestion des imprévus et un accès direct à notre équipe.</p>
        </div>
 
      </div>
 
    </section>
 
    <section id="prestations" class="py-16 px-8 md:px-20 bg-white">
 
      <div class="flex items-center gap-3 mb-6">
        <span class="text-[14px] lg:text-[16px] text-[#1a7e6c] tracking-[2.5px] uppercase font-bold shrink-0">Nos prestations</span>
        <div class="flex-1 h-px bg-[#1a7e6c] opacity-20"></div>
      </div>
 
      <div class="mb-10 max-w-xl">
        <h2 class="text-[clamp(24px,3vw,36px)] font-bold text-[#244163] leading-[1.2] mb-3">
          Des locaux impeccables,<br>chaque jour
        </h2>
        <p class="text-[15px] text-[#6b7280] leading-relaxed">
          Nous intervenons sur l'ensemble de vos espaces tertiaires avec des protocoles adaptés à chaque environnement.
        </p>
      </div>
 
      <!-- Cards desktop -->
      <div class="hidden md:grid grid-cols-3 lg:grid-cols-6 gap-4 mb-4">
 
        <div class="col-prestation group is-active cursor-pointer" data-id="0">
          <div class="relative h-[140px] flex flex-col items-center justify-center gap-2 px-3 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
            <span class="absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">01</span>
            <div class="relative z-10 w-9 h-9 rounded-xl bg-[#f0f9f6] border border-[#1a7e6c]/20 flex items-center justify-center transition-all duration-300 group-is-active:bg-white/15 group-is-active:border-white/30">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
            </div>
            <p class="relative z-10 text-[11px] font-bold leading-snug text-[#1a2332] transition-all duration-300 group-is-active:text-white">Bureaux &<br>open-space</p>
            <div class="relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
              <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] transition-all duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
            </div>
          </div>
        </div>
 
        <div class="col-prestation group cursor-pointer" data-id="1">
          <div class="relative h-[140px] flex flex-col items-center justify-center gap-2 px-3 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
            <span class="absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">02</span>
            <div class="relative z-10 w-9 h-9 rounded-xl bg-[#f0f9f6] border border-[#1a7e6c]/20 flex items-center justify-center transition-all duration-300 group-is-active:bg-white/15 group-is-active:border-white/30">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
            <p class="relative z-10 text-[11px] font-bold leading-snug text-[#1a2332] transition-all duration-300 group-is-active:text-white">Salles de<br>réunion</p>
            <div class="relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
              <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] transition-all duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
            </div>
          </div>
        </div>
 
        <div class="col-prestation group cursor-pointer" data-id="2">
          <div class="relative h-[140px] flex flex-col items-center justify-center gap-2 px-3 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
            <span class="absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">03</span>
            <div class="relative z-10 w-9 h-9 rounded-xl bg-[#f0f9f6] border border-[#1a7e6c]/20 flex items-center justify-center transition-all duration-300 group-is-active:bg-white/15 group-is-active:border-white/30">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </div>
            <p class="relative z-10 text-[11px] font-bold leading-snug text-[#1a2332] transition-all duration-300 group-is-active:text-white">Espaces<br>d'accueil</p>
            <div class="relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
              <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] transition-all duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
            </div>
          </div>
        </div>
 
        <div class="col-prestation group cursor-pointer" data-id="3">
          <div class="relative h-[140px] flex flex-col items-center justify-center gap-2 px-3 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
            <span class="absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">04</span>
            <div class="relative z-10 w-9 h-9 rounded-xl bg-[#f0f9f6] border border-[#1a7e6c]/20 flex items-center justify-center transition-all duration-300 group-is-active:bg-white/15 group-is-active:border-white/30">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 3h16v3H4z"/><path d="M4 6h16l-1 5H5L4 6z"/><path d="M9 11v8a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-8"/></svg>
            </div>
            <p class="relative z-10 text-[11px] font-bold leading-snug text-[#1a2332] transition-all duration-300 group-is-active:text-white">Sanitaires &<br>vestiaires</p>
            <div class="relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
              <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] transition-all duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
            </div>
          </div>
        </div>
 
        <div class="col-prestation group cursor-pointer" data-id="4">
          <div class="relative h-[140px] flex flex-col items-center justify-center gap-2 px-3 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
            <span class="absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">05</span>
            <div class="relative z-10 w-9 h-9 rounded-xl bg-[#f0f9f6] border border-[#1a7e6c]/20 flex items-center justify-center transition-all duration-300 group-is-active:bg-white/15 group-is-active:border-white/30">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
            </div>
            <p class="relative z-10 text-[11px] font-bold leading-snug text-[#1a2332] transition-all duration-300 group-is-active:text-white">Cuisines &<br>restauration</p>
            <div class="relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
              <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] transition-all duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
            </div>
          </div>
        </div>
 
        <div class="col-prestation group cursor-pointer" data-id="5">
          <div class="relative h-[140px] flex flex-col items-center justify-center gap-2 px-3 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
            <span class="absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">06</span>
            <div class="relative z-10 w-9 h-9 rounded-xl bg-[#f0f9f6] border border-[#1a7e6c]/20 flex items-center justify-center transition-all duration-300 group-is-active:bg-white/15 group-is-active:border-white/30">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
            </div>
            <p class="relative z-10 text-[11px] font-bold leading-snug text-[#1a2332] transition-all duration-300 group-is-active:text-white">Parkings &<br>locaux tech.</p>
            <div class="relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
              <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] transition-all duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
            </div>
          </div>
        </div>
 
      </div>
 
      <!-- Panneau desktop — Style A -->
      <div class="hidden md:block mb-4">
        <div class="bg-[#e8f5f2] border border-[#1a7e6c]/20 border-l-[3px] border-l-[#1a7e6c] rounded-r-xl rounded-bl-xl p-5 flex gap-5 items-start">
          <div id="panel-icon-desktop" class="w-10 h-10 rounded-xl bg-[#1a7e6c]/15 border border-[#1a7e6c]/25 flex items-center justify-center shrink-0 mt-0.5"></div>
          <div class="flex-1">
            <h4 id="panel-title-desktop" class="text-[15px] font-bold text-[#244163] mb-2"></h4>
            <p id="panel-text-desktop" class="text-[13px] text-[#4b5563] leading-relaxed mb-3"></p>
            <div id="panel-tags-desktop" class="flex gap-2 flex-wrap"></div>
          </div>
        </div>
      </div>
 
      <!-- Cards mobile -->
      <div class="md:hidden">
        <div class="overflow-x-auto pb-3 -mx-8 px-8" style="scrollbar-width:thin;scrollbar-color:#1a7e6c #e2eae7;">
          <div class="flex gap-3" style="width:max-content;">
 
            <div class="col-prestation-mobile group is-active cursor-pointer shrink-0" data-id="0">
              <div class="relative w-[110px] h-[130px] flex flex-col items-center justify-center gap-2 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
                <span class="absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] group-is-active:text-white group-is-active:opacity-[0.18]">01</span>
                <div class="relative z-10 w-8 h-8 rounded-xl bg-[#f0f9f6] border border-[#1a7e6c]/20 flex items-center justify-center group-is-active:bg-white/15 group-is-active:border-white/30">
                  <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <p class="relative z-10 text-[11px] font-bold leading-snug px-1 text-[#1a2332] group-is-active:text-white">Bureaux & open-space</p>
                <div class="relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] group-is-active:bg-white/20 group-is-active:border-white/30">
                  <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                </div>
              </div>
            </div>
 
            <div class="col-prestation-mobile group cursor-pointer shrink-0" data-id="1">
              <div class="relative w-[110px] h-[130px] flex flex-col items-center justify-center gap-2 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
                <span class="absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] group-is-active:text-white group-is-active:opacity-[0.18]">02</span>
                <div class="relative z-10 w-8 h-8 rounded-xl bg-[#f0f9f6] border border-[#1a7e6c]/20 flex items-center justify-center group-is-active:bg-white/15 group-is-active:border-white/30">
                  <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <p class="relative z-10 text-[11px] font-bold leading-snug px-1 text-[#1a2332] group-is-active:text-white">Salles de réunion</p>
                <div class="relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] group-is-active:bg-white/20 group-is-active:border-white/30">
                  <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                </div>
              </div>
            </div>
 
            <div class="col-prestation-mobile group cursor-pointer shrink-0" data-id="2">
              <div class="relative w-[110px] h-[130px] flex flex-col items-center justify-center gap-2 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
                <span class="absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] group-is-active:text-white group-is-active:opacity-[0.18]">03</span>
                <div class="relative z-10 w-8 h-8 rounded-xl bg-[#f0f9f6] border border-[#1a7e6c]/20 flex items-center justify-center group-is-active:bg-white/15 group-is-active:border-white/30">
                  <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                </div>
                <p class="relative z-10 text-[11px] font-bold leading-snug px-1 text-[#1a2332] group-is-active:text-white">Espaces d'accueil</p>
                <div class="relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] group-is-active:bg-white/20 group-is-active:border-white/30">
                  <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                </div>
              </div>
            </div>
 
            <div class="col-prestation-mobile group cursor-pointer shrink-0" data-id="3">
              <div class="relative w-[110px] h-[130px] flex flex-col items-center justify-center gap-2 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
                <span class="absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] group-is-active:text-white group-is-active:opacity-[0.18]">04</span>
                <div class="relative z-10 w-8 h-8 rounded-xl bg-[#f0f9f6] border border-[#1a7e6c]/20 flex items-center justify-center group-is-active:bg-white/15 group-is-active:border-white/30">
                  <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 3h16v3H4z"/><path d="M4 6h16l-1 5H5L4 6z"/><path d="M9 11v8a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-8"/></svg>
                </div>
                <p class="relative z-10 text-[11px] font-bold leading-snug px-1 text-[#1a2332] group-is-active:text-white">Sanitaires & vestiaires</p>
                <div class="relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] group-is-active:bg-white/20 group-is-active:border-white/30">
                  <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                </div>
              </div>
            </div>
 
            <div class="col-prestation-mobile group cursor-pointer shrink-0" data-id="4">
              <div class="relative w-[110px] h-[130px] flex flex-col items-center justify-center gap-2 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
                <span class="absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] group-is-active:text-white group-is-active:opacity-[0.18]">05</span>
                <div class="relative z-10 w-8 h-8 rounded-xl bg-[#f0f9f6] border border-[#1a7e6c]/20 flex items-center justify-center group-is-active:bg-white/15 group-is-active:border-white/30">
                  <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
                </div>
                <p class="relative z-10 text-[11px] font-bold leading-snug px-1 text-[#1a2332] group-is-active:text-white">Cuisines & restauration</p>
                <div class="relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] group-is-active:bg-white/20 group-is-active:border-white/30">
                  <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                </div>
              </div>
            </div>
 
            <div class="col-prestation-mobile group cursor-pointer shrink-0" data-id="5">
              <div class="relative w-[110px] h-[130px] flex flex-col items-center justify-center gap-2 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
                <span class="absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] group-is-active:text-white group-is-active:opacity-[0.18]">06</span>
                <div class="relative z-10 w-8 h-8 rounded-xl bg-[#f0f9f6] border border-[#1a7e6c]/20 flex items-center justify-center group-is-active:bg-white/15 group-is-active:border-white/30">
                  <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                </div>
                <p class="relative z-10 text-[11px] font-bold leading-snug px-1 text-[#1a2332] group-is-active:text-white">Parkings & locaux tech.</p>
                <div class="relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] group-is-active:bg-white/20 group-is-active:border-white/30">
                  <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                </div>
              </div>
            </div>
 
          </div>
        </div>
        <p class="flex items-center gap-1.5 text-[10px] text-[#6b7a8d] mt-2 mb-4">
          <svg class="w-3 h-3 stroke-[#6b7a8d] fill-none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          Glisser pour voir plus
        </p>
 
        <!-- Panneau mobile -->
        <div class="bg-[#e8f5f2] border border-[#1a7e6c]/20 border-l-[3px] border-l-[#1a7e6c] rounded-r-xl rounded-bl-xl p-4 flex gap-4 items-start">
          <div id="panel-icon-mobile" class="w-9 h-9 rounded-xl bg-[#1a7e6c]/15 border border-[#1a7e6c]/25 flex items-center justify-center shrink-0 mt-0.5"></div>
          <div class="flex-1">
            <h4 id="panel-title-mobile" class="text-[14px] font-bold text-[#244163] mb-1"></h4>
            <p id="panel-text-mobile" class="text-[12px] text-[#4b5563] leading-relaxed mb-2"></p>
            <div id="panel-tags-mobile" class="flex gap-2 flex-wrap"></div>
          </div>
        </div>
      </div>
 
    </section>
 
    <!-- ══════════════════════════════════
         SECTION 3 — Notre process
    ══════════════════════════════════ -->
    <section class="py-16 px-8 md:px-20 bg-white">
 
      <div class="flex items-center gap-3 mb-6">
        <span class="text-[14px] lg:text-[16px] text-[#1a7e6c] tracking-[2.5px] uppercase font-bold shrink-0">Notre process</span>
        <div class="flex-1 h-px bg-[#1a7e6c] opacity-20"></div>
      </div>
 
      <div class="mb-10 max-w-xl">
        <h2 class="text-[clamp(24px,3vw,36px)] font-bold text-[#244163] leading-[1.2] mb-3">
          Simple, rapide,<br>sans mauvaise surprise
        </h2>
        <p class="text-[15px] text-[#6b7280] leading-relaxed">
          De la prise de contact à l'intervention régulière, on vous accompagne à chaque étape.
        </p>
      </div>
 
      <!-- Desktop -->
      <div class="hidden md:flex items-start gap-0">
 
        <div class="flex-1 text-center relative">
          <div class="absolute top-[22px] left-1/2 right-0 h-px bg-[#e2eae7] z-0"></div>
          <div class="relative z-10 w-11 h-11 rounded-full bg-[#1a7e6c] text-white text-[14px] font-bold flex items-center justify-center mx-auto mb-4 shadow-[0_4px_14px_rgba(26,126,108,0.3)]">1</div>
          <h3 class="text-[14px] font-bold text-[#244163] mb-2">Diagnostic gratuit</h3>
          <p class="text-[12px] text-[#6b7280] leading-relaxed px-4">Visite de vos locaux et évaluation de vos besoins et contraintes.</p>
        </div>
 
        <div class="flex-1 text-center relative">
          <div class="absolute top-[22px] left-0 right-0 h-px bg-[#e2eae7] z-0"></div>
          <div class="relative z-10 w-11 h-11 rounded-full bg-[#1a7e6c] text-white text-[14px] font-bold flex items-center justify-center mx-auto mb-4 shadow-[0_4px_14px_rgba(26,126,108,0.3)]">2</div>
          <h3 class="text-[14px] font-bold text-[#244163] mb-2">Devis sous 24h</h3>
          <p class="text-[12px] text-[#6b7280] leading-relaxed px-4">Proposition détaillée adaptée à votre superficie et votre fréquence.</p>
        </div>
 
        <div class="flex-1 text-center relative">
          <div class="absolute top-[22px] left-0 right-0 h-px bg-[#e2eae7] z-0"></div>
          <div class="relative z-10 w-11 h-11 rounded-full bg-[#1a7e6c] text-white text-[14px] font-bold flex items-center justify-center mx-auto mb-4 shadow-[0_4px_14px_rgba(26,126,108,0.3)]">3</div>
          <h3 class="text-[14px] font-bold text-[#244163] mb-2">Mise en place</h3>
          <p class="text-[12px] text-[#6b7280] leading-relaxed px-4">Équipe dédiée et planning calé sur vos horaires dès la première semaine.</p>
        </div>
 
        <div class="flex-1 text-center relative">
          <div class="absolute top-[22px] left-0 right-1/2 h-px bg-[#e2eae7] z-0"></div>
          <div class="relative z-10 w-11 h-11 rounded-full bg-[#244163] text-white text-[14px] font-bold flex items-center justify-center mx-auto mb-4 shadow-[0_4px_14px_rgba(36,65,99,0.3)]">4</div>
          <h3 class="text-[14px] font-bold text-[#244163] mb-2">Suivi qualité & bilan mensuel</h3>
          <p class="text-[12px] text-[#6b7280] leading-relaxed px-4">Contrôles réguliers, compte-rendu mensuel et ajustements si besoin.</p>
        </div>
 
      </div>
 
      <!-- Mobile -->
      <div class="md:hidden flex flex-col gap-6">
 
        <div class="flex gap-4 items-start">
          <div class="w-10 h-10 rounded-full bg-[#1a7e6c] text-white text-[13px] font-bold flex items-center justify-center shrink-0 shadow-[0_4px_14px_rgba(26,126,108,0.3)]">1</div>
          <div>
            <h3 class="text-[14px] font-bold text-[#244163] mb-1">Diagnostic gratuit</h3>
            <p class="text-[13px] text-[#6b7280] leading-relaxed">Visite de vos locaux et évaluation de vos besoins et contraintes.</p>
          </div>
        </div>
 
        <div class="flex gap-4 items-start">
          <div class="w-10 h-10 rounded-full bg-[#1a7e6c] text-white text-[13px] font-bold flex items-center justify-center shrink-0 shadow-[0_4px_14px_rgba(26,126,108,0.3)]">2</div>
          <div>
            <h3 class="text-[14px] font-bold text-[#244163] mb-1">Devis sous 24h</h3>
            <p class="text-[13px] text-[#6b7280] leading-relaxed">Proposition détaillée adaptée à votre superficie et votre fréquence.</p>
          </div>
        </div>
 
        <div class="flex gap-4 items-start">
          <div class="w-10 h-10 rounded-full bg-[#1a7e6c] text-white text-[13px] font-bold flex items-center justify-center shrink-0 shadow-[0_4px_14px_rgba(26,126,108,0.3)]">3</div>
          <div>
            <h3 class="text-[14px] font-bold text-[#244163] mb-1">Mise en place</h3>
            <p class="text-[13px] text-[#6b7280] leading-relaxed">Équipe dédiée et planning calé sur vos horaires dès la première semaine.</p>
          </div>
        </div>
 
        <div class="flex gap-4 items-start">
          <div class="w-10 h-10 rounded-full bg-[#244163] text-white text-[13px] font-bold flex items-center justify-center shrink-0 shadow-[0_4px_14px_rgba(36,65,99,0.3)]">4</div>
          <div>
            <h3 class="text-[14px] font-bold text-[#244163] mb-1">Suivi qualité & bilan mensuel</h3>
            <p class="text-[13px] text-[#6b7280] leading-relaxed">Contrôles réguliers, compte-rendu mensuel et ajustements si besoin.</p>
          </div>
        </div>
 
      </div>
 
    </section>
 
 <!--- SECTION CTA FINAL --->
<section class="w-full py-16 bg-white border-t-4 border-[#1a7e6c]">
  <div class="max-w-7xl mx-auto px-6">

    <div class="flex flex-col items-center text-center">

      <h2 class="text-3xl lg:text-4xl font-bold text-[#244163] leading-tight mb-4 max-w-2xl">
        Concentrez-vous sur votre activité, on s'occupe du reste.
      </h2>

      <p class="text-[#6b7a8d] text-base mb-8 max-w-xl leading-relaxed">Confiez l'entretien de vos bureaux à une équipe professionnelle, 
        réactive et dédiée.</p>
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
      <div class="flex flex-wrap gap-4 justify-center">
        <a href="/pages/contactez-nous.php"
           class="inline-flex items-center gap-2 bg-[#244163] text-white font-semibold text-sm px-8 py-4 rounded-[10px] transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg hover:bg-[#1a3050]">
      <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
  <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
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
</section>

    <script>
      // ── Données des prestations ──
      const prestations = [
        {
          title: 'Bureaux & open-space',
          text: 'Dépoussiérage des postes de travail, écrans et claviers, nettoyage des sols et moquettes, vidage des corbeilles, désinfection des surfaces de contact fréquent (poignées, interrupteurs, accoudoirs).',
          tags: ['Quotidien', 'Hebdomadaire', 'Hors horaires'],
          icon: '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>',
          iconSm: '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>',
        },
        {
          title: 'Salles de réunion',
          text: 'Nettoyage des tables de conférence et chaises, dépoussiérage des équipements audiovisuels, nettoyage des tableaux blancs et écrans, remise en ordre après chaque utilisation.',
          tags: ['Quotidien', 'Sur demande'],
          icon: '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
          iconSm: '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        },
        {
          title: "Espaces d'accueil",
          text: "Nettoyage des sols, vitres et mobilier d'accueil, désinfection des surfaces de contact fréquent, entretien des plantes et éléments décoratifs, maintien d'une image soignée en toutes circonstances.",
          tags: ['Matin & soir', 'Image de marque', 'Hors horaires'],
          icon: '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
          iconSm: '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
        },
        {
          title: 'Sanitaires & vestiaires',
          text: 'Désinfection complète des WC, lavabos et robinetteries, nettoyage des miroirs et carrelages, réapprovisionnement en consommables (savon, papier), élimination des odeurs par traitement adapté.',
          tags: ['Plusieurs fois/jour', 'Désinfection', 'Consommables inclus'],
          icon: '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 3h16v3H4z"/><path d="M4 6h16l-1 5H5L4 6z"/><path d="M9 11v8a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-8"/></svg>',
          iconSm: '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 3h16v3H4z"/><path d="M4 6h16l-1 5H5L4 6z"/><path d="M9 11v8a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-8"/></svg>',
        },
        {
          title: 'Cuisines & restauration',
          text: 'Nettoyage des plans de travail, appareils électroménagers et éviers, dégraissage des surfaces et hottes, nettoyage des sols antidérapants, gestion des déchets et recyclage.',
          tags: ['Quotidien', 'Dégraissage', 'Normes HACCP'],
          icon: '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>',
          iconSm: '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>',
        },
        {
          title: 'Parkings & locaux techniques',
          text: 'Balayage et lavage des sols, nettoyage des accès et marquages au sol, dépoussiérage des équipements techniques, évacuation des déchets encombrants et entretien des espaces de stockage.',
          tags: ['Hebdomadaire', 'Mensuel', 'Sur demande'],
          icon: '<svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>',
          iconSm: '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>',
        },
      ];
 
      function buildTags(tags) {
        return tags.map(t =>
          `<span style="font-size:10px;padding:3px 10px;border-radius:20px;background:white;border:0.5px solid rgba(26,126,108,0.3);color:#1a7e6c;font-weight:500;">${t}</span>`
        ).join('');
      }
 
      function updatePanel(id, isMobile) {
        const p = prestations[id];
        const suffix = isMobile ? '-mobile' : '-desktop';
        document.getElementById('panel-icon' + suffix).innerHTML  = isMobile ? p.iconSm : p.icon;
        document.getElementById('panel-title' + suffix).textContent = p.title;
        document.getElementById('panel-text' + suffix).textContent  = p.text;
        document.getElementById('panel-tags' + suffix).innerHTML    = buildTags(p.tags);
      }
 
      // Desktop
      document.querySelectorAll('.col-prestation').forEach(card => {
        card.addEventListener('click', () => {
          document.querySelectorAll('.col-prestation').forEach(c => c.classList.remove('is-active'));
          card.classList.add('is-active');
          updatePanel(parseInt(card.dataset.id), false);
        });
      });
 
      // Mobile
      document.querySelectorAll('.col-prestation-mobile').forEach(card => {
        card.addEventListener('click', () => {
          document.querySelectorAll('.col-prestation-mobile').forEach(c => c.classList.remove('is-active'));
          card.classList.add('is-active');
          updatePanel(parseInt(card.dataset.id), true);
        });
      });
 
      // Init par défaut
      updatePanel(0, false);
      updatePanel(0, true);
    </script>
          <?php include __DIR__ . '/../components/footer.php'; ?>

    </body>
</html>