<!DOCTYPE html>
<html lang="en">
  <?php 
$jsonLd = '{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Accueil", "item": "https://'. $_SERVER['HTTP_HOST'] .'"},
    {"@type": "ListItem", "position": 2, "name": "Nos services", "item": "https://'. $_SERVER['HTTP_HOST'] .'/pages/nos-services.php"},
    {"@type": "ListItem", "position": 3, "name": "Tourisme", "item": "https://'. $_SERVER['HTTP_HOST'] .'/pages/tourisme.php"}
  ]
}';
?>
    <head>
        <title>APG | Tourisme</title>
        <?php include __DIR__ . '/../components/head.php'; ?>
    </head>
<body>
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
              Tourisme
            </span>
          </div>
 
          <!-- Titre -->
          <h1 class="text-[clamp(2rem,3.8vw,3.2rem)] font-extrabold text-[#1a2332] leading-[1.08] tracking-tight mb-4">
            Nettoyage<br><span class="title-highlight">haut de gamme</span><br>
            pour vos résidences de vacances.
          </h1>
 
          <!-- Séparateur -->
          <div class="flex items-center gap-3 mb-5">
            <div class="w-12 h-[3px] bg-[#1a7e6c] rounded-full"></div>
            <div class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c] opacity-40"></div>
            <div class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c] opacity-20"></div>
          </div>
 
          <!-- Sous-titre -->
          <p class="text-base text-[#6b7a8d] leading-[1.75] font-light max-w-[500px] mb-8">
            Nous sommes le partenaire propreté des plus grands acteurs du tourisme de
            résidences alpines, clubs de vacances, hôtellerie de prestige. 
          </p>
 
          <!-- 4 atouts checkmarks -->
          <div class="flex flex-col gap-3 mb-10">
 
            <div class="flex items-center gap-3 px-4 py-2.5 rounded-[10px] border border-[#e2eae7] bg-white hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
              <div class="w-5 h-5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center hrink-0 group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c] transition-all">
                <svg class="w-2.5 h-2.5 stroke-[#1a7e6c] group-hover:stroke-white fill-none" stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="text-sm text-[#6b7a8d] group-hover:text-[#1a2332] transition-colors">Belambra, Pierre & Vacances et de grands groupes partenaires</span>
            </div>
 
            <div class="flex items-center gap-3 px-4 py-2.5 rounded-[10px] border border-[#e2eae7] bg-white hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
              <div class="w-5 h-5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center hrink-0 group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c] transition-all">
                <svg class="w-2.5 h-2.5 stroke-[#1a7e6c] group-hover:stroke-white fill-none" stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="text-sm text-[#6b7a8d] group-hover:text-[#1a2332] transition-colors">Standars hôteliers</span>
            </div>
 
            <div class="flex items-center gap-3 px-4 py-2.5 rounded-[10px] border border-[#e2eae7] bg-white hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">
              <div class="w-5 h-5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center shrink-0 group-hover:bg-[#1a7e6c] group-hover:border-[#1a7e6c] transition-all">
                <svg class="w-2.5 h-2.5 stroke-[#1a7e6c] group-hover:stroke-white fill-none" stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="text-sm text-[#6b7a8d] group-hover:text-[#1a2332] transition-colors">Interlocuteur unique & référent dédié sur chaque site.</span>
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
                <p class="text-[0.78rem] text-[#6b7a8d]">Résidences, clubs et campings.</p>
              </div>
             
            </div>
 
            <!-- Grille 4 stats -->
            <div class="grid grid-cols-2 gap-3">
                <div class="bg-[#f4f7f5] rounded-xl p-4 flex flex-col items-center text-center justify-center border border-[#e2eae7] hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">                <p class="text-[1.7rem] font-extrabold text-[#1a7e6c] leading-none mb-1.5 group-hover:scale-105 transition-transform">+ 4000</p>
                    <p class="text-[0.7rem] text-[#6b7a8d]">logements nettoyés</p>
              </div>
<div class="bg-[#f4f7f5] rounded-xl p-4 flex flex-col items-center justify-center border border-[#e2eae7] hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">                <p class="text-[1.7rem] font-extrabold text-[#1a7e6c] leading-none mb-1.5 group-hover:scale-105 transition-transform">10 ans</p>
                <p class="text-[0.7rem] text-[#6b7a8d]">d'expertise</p>
              </div>
<div class="bg-[#f4f7f5] rounded-xl p-4 flex flex-col items-center justify-center border border-[#e2eae7] hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">                <p class="text-[1.7rem] font-extrabold text-[#1a7e6c] leading-none mb-1.5 group-hover:scale-105 transition-transform">7j/7</p>
                <p class="text-[0.7rem] text-[#6b7a8d]">disponibilité</p>
              </div>
<div class="bg-[#f4f7f5] rounded-xl p-4 flex flex-col items-center text-center justify-center border border-[#e2eae7] hover:border-[#c2e8df] hover:bg-[#e8f5f2] transition-all duration-200 cursor-default group">                <p class="text-[1.7rem] font-extrabold text-[#1a7e6c] leading-none mb-1.5 group-hover:scale-105 transition-transform">2 Zones</p>
                <p class="text-[0.7rem] text-[#6b7a8d]">Rhône-Alpes & Sud</p>
              </div>
            </div>
 
            <!-- Footer carte -->
            <div class="flex items-center justify-between mt-5 pt-4 border-t border-[#e2eae7]">
              <p class="text-[0.72rem] text-[#6b7a8d]">
                Devis sous <strong class="text-[#1a7e6c] font-semibold">24h</strong> · Sans engagement
              </p>
            </div>
 
          </div>      
 
        </div>
 
      </div>
    </section>
<!-- ── SECTION NOS ENGAGEMENTS ── -->
<section class="relative bg-[#f7f8fa] py-16 px-10 overflow-hidden">

  <!-- Motif de points -->
  <div class="dots-green absolute top-0 right-0 w-64 h-64 pointer-events-none z-0"></div>

  <!-- Cercle décoratif -->
  <div class="absolute -bottom-16 -left-16 w-60 h-60 rounded-full border border-[#1a7e6c]/8 pointer-events-none z-0"></div>

  <!-- Contenu -->
  <div class="relative z-10 max-w-7xl mx-auto">

    <!-- Header -->
    <div class="text-center mb-14">
      <span class="inline-flex items-center gap-2 bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c] text-[0.72rem] font-semibold px-3.5 py-1.5 rounded-md uppercase tracking-wider mb-4">
        <span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>
        Nos engagements
      </span>
      <h2 class="text-[clamp(1.8rem,3vw,2.2rem)] font-extrabold text-[#1a2332] leading-tight mb-3">
        Ce qui fait la différence<br>
        <span class="text-[#1a7e6c]">dans chaque résidence</span>
      </h2>
      <p class="text-sm text-[#6b7a8d] leading-relaxed max-w-lg mx-auto font-light">
        Des prestations pensées pour les exigences du tourisme haut de gamme, rapidité, discrétion, rigueur et constance à chaque rotation.
      </p>
    </div>

    <!-- Grille 6 cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">

      <!-- Card 1 — Réactivité -->
      <div class="group relative bg-white border border-[#e2eae7] rounded-2xl p-6 overflow-hidden transition-all duration-200 hover:border-[#c2e8df] hover:shadow-[0_8px_32px_rgba(26,126,108,0.08)] hover:-translate-y-0.5">
        <div class="absolute top-0 left-0 right-0 h-[3px] bg-linear-to-r from-[#1a7e6c] to-[#244163] opacity-0 group-hover:opacity-100 transition-opacity duration-200 rounded-t-2xl"></div>
        <div class="w-11 h-11 rounded-xl bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4 shrink-0">
          <svg class="w-5 h-5 stroke-[#1a7e6c] fill-none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
        </div>
        <h3 class="text-[0.95rem] font-bold text-[#1a2332] mb-2">Réactivité totale</h3>
        <p class="text-sm text-[#6b7a8d] leading-relaxed font-light mb-4">Interventions calées sur vos rotations, départs le matin, arrivées l'après-midi. Nos équipes s'adaptent à vos plannings, 7j/7 en haute saison.</p>
        <span class="inline-block text-[0.65rem] font-medium px-2.5 py-1 rounded-full bg-[#1a7e6c]/[0.07] text-[#1a7e6c] border border-[#1a7e6c]/20">7j/7 · Haute saison</span>
      </div>

      <!-- Card 2 — Standards hôteliers -->
      <div class="group relative bg-white border border-[#e2eae7] rounded-2xl p-6 overflow-hidden transition-all duration-200 hover:border-[#c2e8df] hover:shadow-[0_8px_32px_rgba(26,126,108,0.08)] hover:-translate-y-0.5">
        <div class="absolute top-0 left-0 right-0 h-[3px] bg-linear-to-r from-[#1a7e6c] to-[#244163] opacity-0 group-hover:opacity-100 transition-opacity duration-200 rounded-t-2xl"></div>
        <div class="w-11 h-11 rounded-xl bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4 shrink-0">
          <svg class="w-5 h-5 stroke-[#1a7e6c] fill-none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        </div>
        <h3 class="text-[0.95rem] font-bold text-[#1a2332] mb-2">Standards hôteliers</h3>
        <p class="text-sm text-[#6b7a8d] leading-relaxed font-light mb-4">Protocoles inspirés de l'hôtellerie 5★ : draps, serviettes, surfaces, équipements. Chaque logement remis comme neuf.</p>
        <span class="inline-block text-[0.65rem] font-medium px-2.5 py-1 rounded-full bg-[#1a7e6c]/[0.07] text-[#1a7e6c] border border-[#1a7e6c]/20">Qualité premium</span>
      </div>

      <!-- Card 3 — Produits éco -->
      <div class="group relative bg-white border border-[#e2eae7] rounded-2xl p-6 overflow-hidden transition-all duration-200 hover:border-[#c2e8df] hover:shadow-[0_8px_32px_rgba(26,126,108,0.08)] hover:-translate-y-0.5">
        <div class="absolute top-0 left-0 right-0 h-[3px] bg-linear-to-r from-[#1a7e6c] to-[#244163] opacity-0 group-hover:opacity-100 transition-opacity duration-200 rounded-t-2xl"></div>
        <div class="w-11 h-11 rounded-xl bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4 shrink-0">
          <svg class="w-5 h-5 stroke-[#1a7e6c] fill-none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="1 4 1 10 7 10"/><polyline points="23 20 23 14 17 14"/><path d="M20.49 9A9 9 0 005.64 5.64L1 10M23 14l-4.64 4.36A9 9 0 013.51 15"/></svg>
        </div>
        <h3 class="text-[0.95rem] font-bold text-[#1a2332] mb-2">Produits éco-certifiés</h3>
        <p class="text-sm text-[#6b7a8d] leading-relaxed font-light mb-4">Gamme de produits respectueux des occupants et de l'environnement. Idéal pour les résidences accueillant familles et enfants.</p>
        <span class="inline-block text-[0.65rem] font-medium px-2.5 py-1 rounded-full bg-[#1a7e6c]/[0.07] text-[#1a7e6c] border border-[#1a7e6c]/20">Éco-labellisés</span>
      </div>

      <!-- Card 4 — Référent dédié -->
      <div class="group relative bg-white border border-[#e2eae7] rounded-2xl p-6 overflow-hidden transition-all duration-200 hover:border-[#c2e8df] hover:shadow-[0_8px_32px_rgba(26,126,108,0.08)] hover:-translate-y-0.5">
        <div class="absolute top-0 left-0 right-0 h-[3px] bg-linear-to-r from-[#1a7e6c] to-[#244163] opacity-0 group-hover:opacity-100 transition-opacity duration-200 rounded-t-2xl"></div>
        <div class="w-11 h-11 rounded-xl bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4 shrink-0">
          <svg class="w-5 h-5 stroke-[#1a7e6c] fill-none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        </div>
        <h3 class="text-[0.95rem] font-bold text-[#1a2332] mb-2">Référent dédié</h3>
        <p class="text-sm text-[#6b7a8d] leading-relaxed font-light mb-4">Un interlocuteur unique par site. Vous ne gérez pas une hotline, vous avez un vrai partenaire terrain.</p>
        <span class="inline-block text-[0.65rem] font-medium px-2.5 py-1 rounded-full bg-[#1a7e6c]/[0.07] text-[#1a7e6c] border border-[#1a7e6c]/20">Interlocuteur unique</span>
      </div>

      <!-- Card 5 — Traçabilité -->
      <div class="group relative bg-white border border-[#e2eae7] rounded-2xl p-6 overflow-hidden transition-all duration-200 hover:border-[#c2e8df] hover:shadow-[0_8px_32px_rgba(26,126,108,0.08)] hover:-translate-y-0.5">
        <div class="absolute top-0 left-0 right-0 h-[3px] bg-linear-to-r from-[#1a7e6c] to-[#244163] opacity-0 group-hover:opacity-100 transition-opacity duration-200 rounded-t-2xl"></div>
        <div class="w-11 h-11 rounded-xl bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4 shrink-0">
          <svg class="w-5 h-5 stroke-[#1a7e6c] fill-none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
        </div>
        <h3 class="text-[0.95rem] font-bold text-[#1a2332] mb-2">Traçabilité & reporting</h3>
        <p class="text-sm text-[#6b7a8d] leading-relaxed font-light mb-4">Compte-rendus d'intervention systématiques, fiches de passage, remontées d'anomalies. Transparence totale.</p>
        <span class="inline-block text-[0.65rem] font-medium px-2.5 py-1 rounded-full bg-[#1a7e6c]/[0.07] text-[#1a7e6c] border border-[#1a7e6c]/20">Suivi en temps réel</span>
      </div>

      <!-- Card 6 — Personnel -->
      <div class="group relative bg-white border border-[#e2eae7] rounded-2xl p-6 overflow-hidden transition-all duration-200 hover:border-[#c2e8df] hover:shadow-[0_8px_32px_rgba(26,126,108,0.08)] hover:-translate-y-0.5">
        <div class="absolute top-0 left-0 right-0 h-[3px] bg-linear-to-r from-[#1a7e6c] to-[#244163] opacity-0 group-hover:opacity-100 transition-opacity duration-200 rounded-t-2xl"></div>
        <div class="w-11 h-11 rounded-xl bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4 shrink-0">
          <svg class="w-5 h-5 stroke-[#1a7e6c] fill-none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3 class="text-[0.95rem] font-bold text-[#1a2332] mb-2">Personnel formé & assuré</h3>
        <p class="text-sm text-[#6b7a8d] leading-relaxed font-light mb-4">Agents salariés, formés aux protocoles hôteliers et couverts par nos assurances. Discrétion absolue.</p>
        <span class="inline-block text-[0.65rem] font-medium px-2.5 py-1 rounded-full bg-[#1a7e6c]/[0.07] text-[#1a7e6c] border border-[#1a7e6c]/20">Agents certifiés</span>
      </div>

    </div>

    <!-- Grille bas -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

      <!-- Cards horizontales -->
      <div class="flex flex-col gap-4">
        <div class="flex items-center gap-5 bg-white border border-[#e2eae7] rounded-2xl p-6 transition-all duration-200 hover:border-[#c2e8df] hover:shadow-[0_8px_32px_rgba(26,126,108,0.08)]">
          <div class="w-12 h-12 rounded-xl bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center shrink-0">
            <svg class="w-5 h-5 stroke-[#1a7e6c] fill-none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M3 17l4-8 4 5 3-3 4 6"/><path d="M3 20h18"/></svg>
          </div>
          <div>
            <p class="text-sm font-bold text-[#1a2332] mb-1">Deux zones d'intervention</p>
            <p class="text-xs text-[#6b7a8d] leading-relaxed font-light">Rhône-Alpes (stations alpines : Haute-Savoie, Oisans) et Sud de la France (clubs vacances côtiers et campings haut de gamme).</p>
          </div>
        </div>
        <div class="flex items-center gap-5 bg-white border border-[#e2eae7] rounded-2xl p-6 transition-all duration-200 hover:border-[#c2e8df] hover:shadow-[0_8px_32px_rgba(26,126,108,0.08)]">
          <div class="w-12 h-12 rounded-xl bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center shrink-0">
            <svg class="w-5 h-5 stroke-[#1a7e6c] fill-none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <div>
            <p class="text-sm font-bold text-[#1a2332] mb-1">Devis sous 24h</p>
            <p class="text-xs text-[#6b7a8d] leading-relaxed font-light">Réponse rapide, sans engagement, adaptée à votre volume de logements, fréquence de rotation et qualité.</p>
          </div>
        </div>
      </div>

      <!-- Card accent -->
      <div class="relative bg-linear-to-br from-[#1a7e6c] to-[#244163] rounded-2xl p-6 overflow-hidden flex flex-col justify-between">
        <div class="absolute -top-10 -right-10 w-36 h-36 rounded-full bg-white/6 pointer-events-none"></div>
        <div class="mb-5">
          <p class="text-[0.68rem] font-semibold text-white/60 uppercase tracking-widest mb-2">Partenaires de confiance</p>
          <p class="text-xl font-extrabold text-white leading-snug mb-3">+4 000 logements nettoyés chaque année</p>
          <p class="text-xs text-white/70 leading-relaxed font-light">Belambra, Pierre & Vacances, Prestige Gestion nous font confiance pour l'entretien de leurs résidences.<br class="hidden lg:block"> Sur le terrain, nous agissons comme une seule équipe, engagée et à l'écoute</p>
        </div>
        <a href="#references" class="inline-flex items-center gap-2 bg-white/15 border border-white/30 text-white text-xs font-semibold px-4 py-2.5 rounded-lg w-fit transition-all duration-200 hover:bg-white/25">
          Voir nos références
          <svg class="w-3.5 h-3.5 stroke-white fill-none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
      </div>

    </div>
  </div>
</section>
<!-- ── SECTION NOS PRESTATIONS ── -->
<section class="relative bg-[#f7f8fa] py-16 px-6 lg:px-10 overflow-hidden" id="prestations">

  <!-- Décorations -->
  <div class="dots-green absolute top-0 right-0 w-64 h-64 pointer-events-none z-0"></div>
  <div class="absolute -bottom-16 -left-16 w-60 h-60 rounded-full border border-[#1a7e6c]/8 pointer-events-none z-0"></div>

  <div class="relative z-10 max-w-7xl mx-auto">

    <!-- Header -->
    <div class="text-center mb-12">
      <span class="inline-flex items-center gap-2 bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c] text-[0.72rem] font-semibold px-3.5 py-1.5 rounded-md uppercase tracking-wider mb-4">
        <span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>
        Nos prestations
      </span>
      <h2 class="text-[clamp(1.8rem,3vw,2.2rem)] font-extrabold text-[#1a2332] leading-tight mb-3">
        7 expertises au service<br>
        <span class="text-[#1a7e6c]">de vos résidences</span>
      </h2>
      <p class="text-sm text-[#6b7a8d] leading-relaxed max-w-lg mx-auto font-light">
        De la remise à blanc à l'entretien des espaces communs, chaque prestation est réalisée selon des protocoles hôteliers stricts, 
        pour un résultat irréprochable à chaque rotation.
      </p>
    </div>

    <!-- ── MOBILE : Slider horizontal ── -->
    <div class="lg:hidden mb-3">
      <div class="overflow-x-auto pb-3 -mx-6 px-6" id="prestSlider"
        style="scrollbar-width:thin;scrollbar-color:#1a7e6c #e2eae7;">
        <div class="flex gap-2.5" style="width:max-content;">

          <div class="col-prestation group is-active cursor-pointer shrink-0" data-id="0">
            <div class="relative w-[110px] h-[130px] flex flex-col items-center justify-center gap-2 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
              <span class="prestation-num absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">01</span>
              <p class="prestation-title relative z-10 text-[12px] font-bold leading-snug px-1 text-[#1a2332] transition-all duration-300 group-is-active:text-white">Ménage fin de séjour</p>
              <div class="prestation-arrow relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
                <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] transition-transform duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
              </div>
            </div>
          </div>

          <div class="col-prestation group cursor-pointer shrink-0" data-id="1">
            <div class="relative w-[110px] h-[130px] flex flex-col items-center justify-center gap-2 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
              <span class="prestation-num absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">02</span>
              <p class="prestation-title relative z-10 text-[12px] font-bold leading-snug px-1 text-[#1a2332] transition-all duration-300 group-is-active:text-white">Dégraissage</p>
              <div class="prestation-arrow relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
                <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] transition-transform duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
              </div>
            </div>
          </div>

          <div class="col-prestation group cursor-pointer shrink-0" data-id="2">
            <div class="relative w-[110px] h-[130px] flex flex-col items-center justify-center gap-2 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
              <span class="prestation-num absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">03</span>
              <p class="prestation-title relative z-10 text-[12px] font-bold leading-snug px-1 text-[#1a2332] transition-all duration-300 group-is-active:text-white">Recouche</p>
              <div class="prestation-arrow relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
                <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] transition-transform duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
              </div>
            </div>
          </div>

          <div class="col-prestation group cursor-pointer shrink-0" data-id="3">
            <div class="relative w-[110px] h-[130px] flex flex-col items-center justify-center gap-2 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
              <span class="prestation-num absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">04</span>
              <p class="prestation-title relative z-10 text-[12px] font-bold leading-snug px-1 text-[#1a2332] transition-all duration-300 group-is-active:text-white">Fin de chantier</p>
              <div class="prestation-arrow relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
                <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] transition-transform duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
              </div>
            </div>
          </div>

          <div class="col-prestation group cursor-pointer shrink-0" data-id="4">
            <div class="relative w-[110px] h-[130px] flex flex-col items-center justify-center gap-2 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
              <span class="prestation-num absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">05</span>
              <p class="prestation-title relative z-10 text-[12px] font-bold leading-snug px-1 text-[#1a2332] transition-all duration-300 group-is-active:text-white">Confection des lits</p>
              <div class="prestation-arrow relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
                <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] transition-transform duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
              </div>
            </div>
          </div>

          <div class="col-prestation group cursor-pointer shrink-0" data-id="5">
            <div class="relative w-[110px] h-[130px] flex flex-col items-center justify-center gap-2 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
              <span class="prestation-num absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">06</span>
              <p class="prestation-title relative z-10 text-[12px] font-bold leading-snug px-1 text-[#1a2332] transition-all duration-300 group-is-active:text-white">Parties communes</p>
              <div class="prestation-arrow relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
                <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] transition-transform duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
              </div>
            </div>
          </div>

          <div class="col-prestation group cursor-pointer shrink-0" data-id="6">
            <div class="relative w-[110px] h-[130px] flex flex-col items-center justify-center gap-2 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_8px_24px_rgba(26,126,108,0.25)]">
              <span class="prestation-num absolute top-1 -left-2 text-[52px] font-extrabold leading-none tracking-[-3px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">07</span>
              <p class="prestation-title relative z-10 text-[12px] font-bold leading-snug px-1 text-[#1a2332] transition-all duration-300 group-is-active:text-white">Restaurants</p>
              <div class="prestation-arrow relative z-10 w-5 h-5 rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
                <svg class="w-2 h-2 fill-none stroke-[#1a7e6c] transition-transform duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- Hint scroll -->
      <p class="flex items-center gap-1.5 text-[10px] text-[#6b7a8d] mt-1.5">
        <svg class="w-3 h-3 stroke-[#6b7a8d] fill-none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        Glisser pour voir plus
      </p>
    </div>

    <!-- ── DESKTOP : Grille 7 colonnes ── -->
    <div class="hidden lg:grid grid-cols-7 gap-2.5" id="prestCols">

      <div class="col-prestation group is-active cursor-pointer rounded-2xl overflow-hidden transition-transform duration-200 hover:-translate-y-1" data-id="0">
        <div class="relative h-[200px] flex flex-col items-center justify-center gap-2.5 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_12px_40px_rgba(26,126,108,0.25)]">
          <span class="prestation-num absolute top-2 -left-3 text-[88px] font-extrabold leading-none tracking-[-4px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">01</span>
          <p class="prestation-title relative z-10 text-[14px] font-bold leading-snug px-1.5 text-[#1a2332] transition-all duration-300 group-is-active:text-white">Ménage fin de séjour</p>
          <div class="prestation-arrow relative z-10 w-[22px] h-[22px] rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
            <svg class="w-2.5 h-2.5 fill-none stroke-[#1a7e6c] transition-transform duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
          </div>
        </div>
      </div>

      <div class="col-prestation group cursor-pointer rounded-2xl overflow-hidden transition-transform duration-200 hover:-translate-y-1" data-id="1">
        <div class="relative h-[200px] flex flex-col items-center justify-center gap-2.5 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_12px_40px_rgba(26,126,108,0.25)]">
          <span class="prestation-num absolute top-2 -left-3 text-[88px] font-extrabold leading-none tracking-[-4px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">02</span>
          <p class="prestation-title relative z-10 text-[14px] font-bold leading-snug px-1.5 text-[#1a2332] transition-all duration-300 group-is-active:text-white">Dégraissage</p>
          <div class="prestation-arrow relative z-10 w-[22px] h-[22px] rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
            <svg class="w-2.5 h-2.5 fill-none stroke-[#1a7e6c] transition-transform duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
          </div>
        </div>
      </div>

      <div class="col-prestation group cursor-pointer rounded-2xl overflow-hidden transition-transform duration-200 hover:-translate-y-1" data-id="2">
        <div class="relative h-[200px] flex flex-col items-center justify-center gap-2.5 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_12px_40px_rgba(26,126,108,0.25)]">
          <span class="prestation-num absolute top-2 -left-3 text-[88px] font-extrabold leading-none tracking-[-4px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">03</span>
          <p class="prestation-title relative z-10 text-[14px] font-bold leading-snug px-1.5 text-[#1a2332] transition-all duration-300 group-is-active:text-white">Recouche</p>
          <div class="prestation-arrow relative z-10 w-[22px] h-[22px] rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
            <svg class="w-2.5 h-2.5 fill-none stroke-[#1a7e6c] transition-transform duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
          </div>
        </div>
      </div>

      <div class="col-prestation group cursor-pointer rounded-2xl overflow-hidden transition-transform duration-200 hover:-translate-y-1" data-id="3">
        <div class="relative h-[200px] flex flex-col items-center justify-center gap-2.5 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_12px_40px_rgba(26,126,108,0.25)]">
          <span class="prestation-num absolute top-2 -left-3 text-[88px] font-extrabold leading-none tracking-[-4px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">04</span>
          <p class="prestation-title relative z-10 text-[14px] font-bold leading-snug px-1.5 text-[#1a2332] transition-all duration-300 group-is-active:text-white">Fin de chantier</p>
          <div class="prestation-arrow relative z-10 w-[22px] h-[22px] rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
            <svg class="w-2.5 h-2.5 fill-none stroke-[#1a7e6c] transition-transform duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
          </div>
        </div>
      </div>

      <div class="col-prestation group cursor-pointer rounded-2xl overflow-hidden transition-transform duration-200 hover:-translate-y-1" data-id="4">
        <div class="relative h-[200px] flex flex-col items-center justify-center gap-2.5 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_12px_40px_rgba(26,126,108,0.25)]">
          <span class="prestation-num absolute top-2 -left-3 text-[88px] font-extrabold leading-none tracking-[-4px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">05</span>
          <p class="prestation-title relative z-10 text-[14px] font-bold leading-snug px-1.5 text-[#1a2332] transition-all duration-300 group-is-active:text-white">Confection des lits</p>
          <div class="prestation-arrow relative z-10 w-[22px] h-[22px] rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
            <svg class="w-2.5 h-2.5 fill-none stroke-[#1a7e6c] transition-transform duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
          </div>
        </div>
      </div>

      <div class="col-prestation group cursor-pointer rounded-2xl overflow-hidden transition-transform duration-200 hover:-translate-y-1" data-id="5">
        <div class="relative h-[200px] flex flex-col items-center justify-center gap-2.5 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_12px_40px_rgba(26,126,108,0.25)]">
          <span class="prestation-num absolute top-2 -left-3 text-[88px] font-extrabold leading-none tracking-[-4px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">06</span>
          <p class="prestation-title relative z-10 text-[14px] font-bold leading-snug px-1.5 text-[#1a2332] transition-all duration-300 group-is-active:text-white">Parties communes</p>
          <div class="prestation-arrow relative z-10 w-[22px] h-[22px] rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
            <svg class="w-2.5 h-2.5 fill-none stroke-[#1a7e6c] transition-transform duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
          </div>
        </div>
      </div>

      <div class="col-prestation group cursor-pointer rounded-2xl overflow-hidden transition-transform duration-200 hover:-translate-y-1" data-id="6">
        <div class="relative h-[200px] flex flex-col items-center justify-center gap-2.5 px-2.5 rounded-2xl overflow-hidden text-center transition-all duration-300 bg-white border border-[#e2eae7] group-hover:border-[#c2e8df] group-is-active:bg-linear-to-br group-is-active:from-[#1a7e6c] group-is-active:to-[#244163] group-is-active:border-transparent group-is-active:shadow-[0_12px_40px_rgba(26,126,108,0.25)]">
          <span class="prestation-num absolute top-2 -left-3 text-[88px] font-extrabold leading-none tracking-[-4px] pointer-events-none select-none text-[#1a7e6c] opacity-[0.10] transition-all duration-300 group-is-active:text-white group-is-active:opacity-[0.18]">07</span>
          <p class="prestation-title relative z-10 text-[14px] font-bold leading-snug px-1.5 text-[#1a2332] transition-all duration-300 group-is-active:text-white">Restaurants</p>
          <div class="prestation-arrow relative z-10 w-[22px] h-[22px] rounded-full flex items-center justify-center bg-[#e8f5f2] border border-[#c2e8df] transition-all duration-300 group-is-active:bg-white/20 group-is-active:border-white/30">
            <svg class="w-2.5 h-2.5 fill-none stroke-[#1a7e6c] transition-transform duration-300 group-is-active:stroke-white group-is-active:rotate-90" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
          </div>
        </div>
      </div>

    </div>

    <!-- Panel détail -->
    <div class="mt-3 bg-white border-[1.5px] border-[#c2e8df] rounded-2xl overflow-hidden">
      <div class="h-[3px] bg-linear-to-r from-[#1a7e6c] to-[#244163]"></div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-6 lg:p-8" id="prestDetail"></div>
    </div>

  </div>
</section>

<!-- ── SECTION PARTENAIRES ── -->
<section class="relative bg-[#f7f8fa] py-16 px-6 lg:px-10 overflow-hidden" id="references">

  <!-- Décorations -->
  <div class="dots-green absolute top-0 right-0 w-64 h-64 pointer-events-none z-0"></div>
  <div class="absolute -bottom-16 -left-16 w-60 h-60 rounded-full border border-[#1a7e6c]/8 pointer-events-none z-0"></div>

  <div class="relative z-10 max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

    <!-- GAUCHE -->
    <div>
      <span class="inline-flex items-center gap-2 bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c] text-[0.72rem] font-semibold px-3.5 py-1.5 rounded-md uppercase tracking-wider mb-4">
        <span class="w-1.5 h-1.5 rounded-full bg-[#1a7e6c]"></span>
        Partenaires
      </span>
      <h2 class="text-[clamp(1.8rem,3vw,2.2rem)] font-extrabold text-[#1a2332] leading-tight mb-4">
        Des références qui<br>
        <span class="text-[#1a7e6c]">parlent d'elles-mêmes</span>
      </h2>
      <p class="text-sm text-[#6b7a8d] leading-relaxed font-light max-w-sm">
        Notre directeur développement travaille avec les leaders du tourisme alpin et méditerranéen depuis plus de 10 ans. Une relation de confiance bâtie sur la rigueur et la constance.
      </p>
    </div>

    <!-- DROITE — grille logos PNG -->
    <div class="grid grid-cols-3 gap-x-8 gap-y-8 items-center">

      <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-200">
        <img src="/assets/images/belambra-logo.svg" alt="Belambra" class="w-auto object-contain grayscale hover:grayscale-0 transition-all duration-200"/>
      </div>

      <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-200">
        <img src="/assets/images/goelia.svg" alt="Pierre & Vacances" class="w-auto object-contain grayscale hover:grayscale-0 transition-all duration-200"/>
      </div>

      <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-200">
        <img src="/assets/images/location-alpe-d-huez-logo-gris.svg" alt="Prestige Gestion" class="w-auto object-contain grayscale hover:grayscale-0 transition-all duration-200"/>
      </div>

      <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-200">
        <img src="/assets/images/Logo-groupe_Vertical-Couleur.png" alt="Center Parcs" class="w-auto object-contain grayscale hover:grayscale-0 transition-all duration-200"/>
      </div>

      <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-200">
        <img src="/assets/images/pierreetvacances-logo.png" alt="Vacancéole" class="w-auto object-contain grayscale hover:grayscale-0 transition-all duration-200"/>
      </div>

      <div class="flex items-center justify-center opacity-60 hover:opacity-100 transition-opacity duration-200">
        <img src="/assets/images/odalys-logo.png" alt="Odalys" class="w-auto object-contain grayscale hover:grayscale-0 transition-all duration-200"/>
      </div>

    </div>

  </div>
</section>

<!--- SECTION CTA FINAL --->
<section class="w-full py-16 bg-white border-t-4 border-[#1a7e6c]">
  <div class="max-w-7xl mx-auto px-6">

    <div class="flex flex-col items-center text-center">

      <h2 class="text-3xl lg:text-4xl font-bold text-[#244163] leading-tight mb-4 max-w-2xl">
        Un référent terrain dédié à votre résidence.
      </h2>

      <p class="text-[#6b7a8d] text-base mb-8 max-w-xl leading-relaxed">
        Pour chacune de vos résidences, un référent terrain (minimum) vous est dédié : ce qui favorise un suivi personnalisé des équipes sur place, et une communication transparente.      </p>
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
</section>

<script>
const prestData = [
  { num:"01", title:"Ménage fin de séjour", desc:"Remise à blanc complète après chaque départ. Linge intégralement changé, surfaces désinfectées, cuisine et salle de bain traitées en profondeur selon des protocoles hôteliers qui convient à votre résidence. Le logement est rendu impeccable pour accueillir les prochains vacanciers.", tags:["Remise à blanc","Standard 4★ minimum","Turnover rapide"], checks:["Changement complet du linge de lit et de bain","Désinfection salle de bain (sanitaires, joints, miroirs)","Nettoyage cuisine : plaques, micro-ondes, réfrigérateur","Dépoussiérage mobilier de haut en bas","Aspiration et lavage des sols","Rapport d'intervention et signalement d'anomalies"] },
  { num:"02", title:"Dégraissage", desc:"Traitement intensif de toutes les surfaces, traitées avec des produits dégraissants, à vapeur homologués pour éliminer les incrustations tenaces et les odeurs persistantes.", tags:["Taitement intesif","Produits pro","Fin et début de saison"], checks:["Désinfection de la salle de bains","Dégraissage intensif de toutes les parties de la cuisine","Traitement des sols et murs","Nettoyage des surfaces extérieurs (vitres, volets, rideaux, terasses)","Désinfection des poignées et surfaces de contact","Élimination des odeurs résiduelles"] },
  { num:"03", title:"Recouche", desc:"Entretien quotidien du logement pour les clients en séjour prolongé. Remise en ordre complète, réapprovisionnement des consommables, rafraîchissement de la salle de bain dans le strict respect des affaires personnelles.", tags:["Client en séjour","Discrétion","Quotidien ou J+2"], checks:["Remise en ordre sans toucher aux affaires","Changement du linge selon fréquence convenue","Réapprovisionnement serviettes et consommables","Nettoyage et désinfection de la salle de bain","Vidage des poubelles","Aération et remise en température"] },
  { num:"04", title:"Fin de chantier", desc:"Nettoyage spécialisé post-travaux avant remise aux vacanciers. Élimination des poussières de construction, résidus de peinture et gravats fins. Le logement est livré prêt à louer.", tags:["Post-travaux","Poussières & résidus","Remise en état"], checks:["Élimination des poussières de construction","Nettoyage des résidus de peinture et silicone","Dégraissage des menuiseries et équipements neufs","Nettoyage des vitres intérieures et extérieures","Aspiration approfondie moquettes et textiles","Nettoyage des sanitaires et équipements installés"] },
  { num:"05", title:"Confection des lits", desc:"Réfection des lits selon les standards de l'hôtellerie 4★ minimum, draps au carré, couettes parfaitement gainées, oreillers positionnés avec soin. Un protocole millimétré pour un rendu visuel irréprochable.", tags:["Standard 4★ minimum","Hôtellerie","Finition impeccable"], checks:["Draps tendus et bordés aux quatre coins","Couette gainée et centrée précisément","Oreillers disposés selon protocole hôtelier","Dessus-de-lit ajusté","Vérification de l'alèse et du matelas","Contrôle visuel final"] },
  { num:"06", title:"Parties communes", desc:"Entretien régulier de tous les espaces partagés : halls, couloirs, escaliers, ascenseurs, piscines et espaces extérieurs. Une première impression parfaite dès l'arrivée des vacanciers.", tags:["Espaces partagés","Hall & couloirs","Piscines & extérieurs"], checks:["Nettoyage et désinfection halls et couloirs","Entretien des escaliers et paliers","Nettoyage des cabines d'ascenseur","Entretien des locaux poubelles et vélos","Lavage des vitres et parois vitrées","Entretien des abords, terrasses et zone piscine"] },
  { num:"07", title:"Restaurants", desc:"Nettoyage complet des espaces de restauration : salle, cuisine professionnelle, plonge et terrasse. Désinfection des surfaces de contact et remise en état en début/fin de saison.", tags:["Restauration","Cuisine pro","Début/Fin de saison"], checks:["Nettoyage et désinfection salle et mobilier","Traitement cuisine pro et équipements","Nettoyage de la plonge et zones de lavage","Désinfection des surfaces de contact","Gestion des déchets et évacuation","Nettoyage terrasse et zones extérieures"] }
];

function renderPrestation(id) {
  const d = prestData[id];
  document.querySelectorAll('.col-prestation').forEach(c => c.classList.remove('is-active'));
  document.querySelectorAll(`.col-prestation[data-id="${id}"]`).forEach(c => c.classList.add('is-active'));
  document.getElementById('prestDetail').innerHTML = `
    <div>
      <div class="text-[56px] lg:text-[64px] font-extrabold text-[#1a7e6c] opacity-[0.08] leading-none -ml-1 -mb-3">${d.num}</div>
      <h3 class="text-lg lg:text-xl font-extrabold text-[#1a2332] mb-2.5">${d.title}</h3>
      <p class="text-sm text-[#6b7a8d] leading-[1.75] font-light mb-4">${d.desc}</p>
      <div class="flex gap-2 flex-wrap">${d.tags.map(t=>`<span class="text-[10px] font-semibold px-3 py-1 rounded-full bg-[#1a7e6c]/[0.08] text-[#1a7e6c] border border-[#1a7e6c]/20">${t}</span>`).join('')}</div>
    </div>
    <div class="flex flex-col gap-2">${d.checks.map(c=>`
      <div class="flex items-start gap-2.5">
        <div class="w-[18px] h-[18px] rounded-full bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center shrink-0 mt-0.5">
          <svg class="w-[9px] h-[9px] stroke-[#1a7e6c] fill-none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        <span class="text-xs text-[#4a5568] leading-relaxed">${c}</span>
      </div>`).join('')}
    </div>`;
}

document.querySelectorAll('.col-prestation').forEach(col => {
  col.addEventListener('click', () => renderPrestation(parseInt(col.dataset.id)));
});

renderPrestation(0);
</script>


    <?php include __DIR__ . '/../components/footer.php'; ?>
</body>
</html>