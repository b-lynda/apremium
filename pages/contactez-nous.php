<!DOCTYPE html>
<html lang="fr">
<?php 
$jsonLd = '{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Accueil", "item": "https://". $_SERVER["HTTP_HOST"] .""},
    {"@type": "ListItem", "position": 2, "name": "Contactez-nous", "item": "https://". $_SERVER["HTTP_HOST"] ."/pages/contactez-nous.php"}
  ]
}';
?>
    <head>
        <title>APG | Contactez-nous</title>
        <?php include __DIR__ . '/../components/head.php'; ?>
    </head>

<body class="bg-white">
    <?php include __DIR__ . '/../components/header.php'; ?>


  <!-- ══════════════════════════════════
       HERO — DA homogène
  ══════════════════════════════════ -->
  <section class="relative bg-[#f4f7f5] overflow-hidden border-b border-[#e2eae7]">
    <div class="absolute top-0 left-0 bottom-0 w-1 bg-[#1a7e6c] z-10"></div>
    <div class="absolute -top-[100px] -right-[100px] w-[360px] h-[360px] rounded-full bg-[#c2e8df] opacity-35 pointer-events-none"></div>
    <div class="absolute -top-[50px] -right-[50px] w-[220px] h-[220px] rounded-full bg-[#1a7e6c] opacity-[0.08] pointer-events-none"></div>
    <div class="absolute -bottom-[70px] left-[260px] w-[180px] h-[180px] rounded-full bg-[#244163] opacity-[0.05] pointer-events-none"></div>
    <div class="absolute bottom-4 right-[280px] w-[130px] h-[90px] opacity-[0.15] pointer-events-none"
         style="background-image: radial-gradient(circle, #1a7e6c 1.5px, transparent 1.5px); background-size: 14px 14px;"></div>

    <div class="relative z-10 pl-10 pr-8 md:pl-20 md:pr-16 py-16 md:py-20 max-w-3xl">
      <div class="fade-up delay-1 inline-flex items-center gap-2 bg-[#1a7e6c]/10 border border-[#1a7e6c]/25 text-[#1a7e6c] text-[11px] font-semibold tracking-[1.8px] uppercase px-4 py-[5px] rounded-full mb-5">
        <svg class="w-[13px] h-[13px]" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.99 12 19.79 19.79 0 0 1 1.93 3.29 2 2 0 0 1 3.9 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 8.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
        </svg>
        Contactez-nous
      </div>
      <h1 class="fade-up delay-2 text-[clamp(28px,4vw,42px)] font-bold text-[#244163] leading-[1.15] mb-6"
          style="font-family: 'Outfit', sans-serif;">
        Nous répondons généralement <span class="ul-green">dans les 24 heures.</span>
      </h1>
    </div>
  </section>


  <!-- ══════════════════════════════════
       CORPS — Formulaire multi-étapes
  ══════════════════════════════════ -->
  <section class="relative min-h-screen flex items-center justify-center py-14 px-4 bg-[#f8f7f5]">

    <!-- Fondus haut et bas -->
    <div class="absolute inset-0 z-5 pointer-events-none">
      <div class="absolute top-0 left-0 right-0 h-32 bg-linear-to-b from-[#f8f7f5] via-[#f8f7f5]/60 to-transparent"></div>
      <div class="absolute bottom-0 left-0 right-0 h-32 bg-linear-to-t from-[#f8f7f5] via-[#f8f7f5]/60 to-transparent"></div>
    </div>

    <div class="w-full max-w-2xl relative z-10">
      <div class="bg-white rounded-3xl overflow-hidden shadow-2xl animate-slide-left">
        <div class="py-10 px-8 md:px-14">


          <!-- ── Stepper ── -->
          <div class="flex items-center mb-3" id="stepper">

            <div class="flex items-center gap-2 shrink-0">
              <div id="snum-1" class="w-7 h-7 rounded-full flex items-center justify-center text-[11px] font-bold bg-[#1a7e6c] text-white shrink-0">1</div>
              <span id="slbl-1" class="text-[10px] uppercase tracking-[0.8px] font-semibold text-[#1a7e6c] hidden sm:inline">Vos infos</span>
            </div>

            <div id="sline-1" class="flex-1 h-px bg-[#e5e7eb] mx-3"></div>

            <div class="flex items-center gap-2 shrink-0">
              <div id="snum-2" class="w-7 h-7 rounded-full flex items-center justify-center text-[11px] font-bold bg-white border-[1.5px] border-[#d1d5db] text-[#9ca3af] shrink-0">2</div>
              <span id="slbl-2" class="text-[10px] uppercase tracking-[0.8px] font-semibold text-[#9ca3af] hidden sm:inline">Votre besoin</span>
            </div>

            <div id="sline-2" class="flex-1 h-px bg-[#e5e7eb] mx-3"></div>

            <div class="flex items-center gap-2 shrink-0">
              <div id="snum-3" class="w-7 h-7 rounded-full flex items-center justify-center text-[11px] font-bold bg-white border-[1.5px] border-[#d1d5db] text-[#9ca3af] shrink-0">3</div>
              <span id="slbl-3" class="text-[10px] uppercase tracking-[0.8px] font-semibold text-[#9ca3af] hidden sm:inline">Confirmation</span>
            </div>

          </div>

          <!-- Barre de progression -->
          <div class="h-[3px] bg-[#e5e7eb] rounded-full mb-8 overflow-hidden">
            <div id="progress" class="progress-fill h-full rounded-full" style="width:33%; background: linear-gradient(to right, #1a7e6c, #244163);"></div>
          </div>


          <!-- ══════════════
               ÉTAPE 1 — Vos informations
          ══════════════ -->
          <div id="panel-1" class="step-panel">

            <h2 class="text-3xl font-bold text-[#244163] mb-3" style="font-family:'Outfit',sans-serif;">Vos informations</h2>
            <p class="text-[#6b7280] text-base mb-6 leading-relaxed">Besoin d'une intervention, candidater ou toute autre question, notre équipe vous répond rapidement avec une solution adaptée.</p>

            <!-- Lien téléphone -->
            <a href="tel:+33988327743" class="inline-flex items-center gap-3 text-[#1a7e6c] hover:text-[#244163] transition-colors group mb-8">
              <div class="w-10 h-10 bg-[#1a7e6c]/10 rounded-full flex items-center justify-center group-hover:bg-[#1a7e6c]/20 transition-colors">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                </svg>
              </div>
              <span class="font-medium">Appelez-nous</span>
            </a>

            <!-- Champs -->
            <div class="space-y-5">

              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Prénom <span class="text-red-400">*</span></label>
                  <input id="f-prenom" type="text" placeholder="Prénom" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-800 bg-gray-50 transition-all duration-300"/>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Nom <span class="text-red-400">*</span></label>
                  <input id="f-nom" type="text" placeholder="Nom" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-800 bg-gray-50 transition-all duration-300"/>
                </div>
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Email <span class="text-red-400">*</span></label>
                <input id="f-email" type="email" placeholder="vous@exemple.com" required
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-800 bg-gray-50 transition-all duration-300"/>
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Téléphone <span class="text-red-400">*</span></label>
                <input id="f-tel" type="tel" placeholder="+33 (0)6 00 00 00 00" required
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-800 bg-gray-50 transition-all duration-300"/>
              </div>

              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Société</label>
                  <input id="f-societe" type="text" placeholder="Nom de votre société"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-800 bg-gray-50 transition-all duration-300"/>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Ville <span class="text-red-400">*</span></label>
                  <input id="f-ville" type="text" placeholder="Grenoble, Chambéry..." required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-800 bg-gray-50 transition-all duration-300"/>
                </div>
              </div>

            </div>

            <!-- Footer étape 1 -->
            <div class="flex items-center justify-between mt-8 pt-5 border-t border-gray-100">
              <p class="text-xs text-gray-400"><span class="text-red-400">*</span> Champs obligatoires</p>
              <div class="flex items-center gap-3">
                <span class="text-xs text-gray-400">Étape 1 / 3</span>
                <button onclick="goTo(2)"
                  class="btn-next inline-flex items-center gap-2 text-white text-sm font-semibold px-6 py-3 rounded-lg shadow-lg"
                  style="background: linear-gradient(to right, #1a7e6c, #244163); box-shadow: 0 4px 14px rgba(26,126,108,0.3);">
                  Continuer
                  <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
              </div>
            </div>

          </div>


          <!-- ══════════════
               ÉTAPE 2 — Votre besoin
          ══════════════ -->
          <div id="panel-2" class="step-panel hidden">

            <!-- Recap étape 1 -->
            <div class="mb-6">
              <div class="flex items-center justify-between mb-3">
                <span class="text-xs text-gray-400 uppercase tracking-[1px] font-semibold">Étape 1 — Vos infos</span>
                <button onclick="goTo(1)" class="text-xs text-[#1a7e6c] font-semibold hover:underline">Modifier</button>
              </div>
              <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                <div class="recap-card bg-gray-50 border border-gray-200 rounded-lg border-l-2 border-l-[#1a7e6c] pl-3 pr-2 py-2">
                  <p class="text-[9px] text-[#1a7e6c] uppercase tracking-[1px] font-bold mb-1">Nom</p>
                  <p id="r1-nom" class="text-[12px] text-[#244163] font-medium truncate">—</p>
                </div>
                <div class="recap-card bg-gray-50 border border-gray-200 rounded-lg border-l-2 border-l-[#1a7e6c] pl-3 pr-2 py-2">
                  <p class="text-[9px] text-[#1a7e6c] uppercase tracking-[1px] font-bold mb-1">Société</p>
                  <p id="r1-societe" class="text-[12px] text-[#244163] font-medium truncate">—</p>
                </div>
                <div class="recap-card bg-gray-50 border border-gray-200 rounded-lg border-l-2 border-l-[#1a7e6c] pl-3 pr-2 py-2">
                  <p class="text-[9px] text-[#1a7e6c] uppercase tracking-[1px] font-bold mb-1">Email</p>
                  <p id="r1-email" class="text-[12px] text-[#244163] font-medium truncate">—</p>
                </div>
                <div class="recap-card bg-gray-50 border border-gray-200 rounded-lg border-l-2 border-l-[#1a7e6c] pl-3 pr-2 py-2">
                  <p class="text-[9px] text-[#1a7e6c] uppercase tracking-[1px] font-bold mb-1">Ville</p>
                  <p id="r1-ville" class="text-[12px] text-[#244163] font-medium truncate">—</p>
                </div>
              </div>
            </div>

            <h2 class="text-3xl font-bold text-[#244163] mb-3" style="font-family:'Outfit',sans-serif;">Votre besoin</h2>
            <p class="text-[#6b7280] text-base mb-6 leading-relaxed">Sélectionnez votre secteur et décrivez votre demande pour un devis sur mesure.</p>

            <div class="space-y-5">

              <!-- Secteurs — data-val = valeurs attendues par contact.php -->
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-3">Secteur d'activité <span class="text-red-400">*</span></label>
                <div class="grid grid-cols-3 sm:grid-cols-6 gap-2" id="sectors-grid">

  <div class="sector-card border border-gray-200 rounded-lg py-3 px-2 text-center bg-[#f0f9f6]" data-val="tourisme" onclick="pickSector(this)">
    <div class="flex justify-center mb-1">
      <img src="/assets/images/hotel (1).svg" alt="Tourisme" class="w-6 h-6" style="filter: invert(40%) sepia(60%) saturate(500%) hue-rotate(120deg) brightness(80%);"/>
    </div>
    <p class="text-[9px] text-[#244163] font-bold uppercase tracking-[0.4px]">Tourisme</p>
  </div>

  <div class="sector-card border border-gray-200 rounded-lg py-3 px-2 text-center bg-[#f0f9f6]" data-val="syndic" onclick="pickSector(this)">
    <div class="flex justify-center mb-1">
      <img src="/assets/images/bureau.svg" alt="Syndic" class="w-6 h-6" style="filter: invert(40%) sepia(60%) saturate(500%) hue-rotate(120deg) brightness(80%);"/>
    </div>
    <p class="text-[9px] text-[#244163] font-bold uppercase tracking-[0.4px]">Copro-Coll.</p>
  </div>

  <div class="sector-card border border-gray-200 rounded-lg py-3 px-2 text-center bg-[#f0f9f6]" data-val="tertiaire" onclick="pickSector(this)">
    <div class="flex justify-center mb-1">
      <img src="/assets/images/chaise (1).svg" alt="Tertiaire" class="w-6 h-6" style="filter: invert(40%) sepia(60%) saturate(500%) hue-rotate(120deg) brightness(80%);"/>
    </div>
    <p class="text-[9px] text-[#244163] font-bold uppercase tracking-[0.4px]">Tertiaire</p>
  </div>

  <div class="sector-card border border-gray-200 rounded-lg py-3 px-2 text-center bg-[#f0f9f6]" data-val="industriel" onclick="pickSector(this)">
    <div class="flex justify-center mb-1">
      <img src="/assets/images/chimique.svg" alt="Industrie" class="w-6 h-6" style="filter: invert(40%) sepia(60%) saturate(500%) hue-rotate(120deg) brightness(80%);"/>
    </div>
    <p class="text-[9px] text-[#244163] font-bold uppercase tracking-[0.4px]">Industrie</p>
  </div>

  <div class="sector-card border border-gray-200 rounded-lg py-3 px-2 text-center bg-[#f0f9f6]" data-val="desinfection" onclick="pickSector(this)">
    <div class="flex justify-center mb-1">
      <img src="/assets/images/anti-virus.svg" alt="Désinfection" class="w-6 h-6" style="filter: invert(40%) sepia(60%) saturate(500%) hue-rotate(120deg) brightness(80%);"/>
    </div>
    <p class="text-[9px] text-[#244163] font-bold uppercase tracking-[0.4px]">Désinfect.</p>
  </div>

  <div class="sector-card border border-gray-200 rounded-lg py-3 px-2 text-center bg-[#f0f9f6]" data-val="tp" onclick="pickSector(this)">
    <div class="flex justify-center mb-1">
      <img src="/assets/images/casque-de-chantier.svg" alt="Travaux Publics" class="w-6 h-6" style="filter: invert(40%) sepia(60%) saturate(500%) hue-rotate(120deg) brightness(80%);"/>
    </div>
    <p class="text-[9px] text-[#244163] font-bold uppercase tracking-[0.4px]">T. Publics</p>
  </div>

</div>
              </div>

              <!-- Message -->
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Décrivez votre besoin <span class="text-red-400">*</span></label>
                <textarea id="f-message" rows="4" placeholder="Type de locaux, superficie approximative, fréquence souhaitée, contraintes particulières..."
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-800 bg-gray-50 transition-all duration-300 resize-none"></textarea>
              </div>

            </div>

            <!-- Footer étape 2 -->
            <div class="flex items-center justify-between mt-8 pt-5 border-t border-gray-100">
              <button onclick="goTo(1)" class="btn-prev inline-flex items-center gap-2 text-gray-500 text-sm font-medium px-4 py-3 rounded-lg border border-gray-200 bg-white">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 5l-7 7 7 7"/></svg>
                Retour
              </button>
              <div class="flex items-center gap-3">
                <span class="text-xs text-gray-400">Étape 2 / 3</span>
                <button onclick="goTo(3)"
                  class="btn-next inline-flex items-center gap-2 text-white text-sm font-semibold px-6 py-3 rounded-lg shadow-lg"
                  style="background: linear-gradient(to right, #1a7e6c, #244163); box-shadow: 0 4px 14px rgba(26,126,108,0.3);">
                  Continuer
                  <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
              </div>
            </div>

          </div>


          <!-- ══════════════
               ÉTAPE 3 — Confirmation
          ══════════════ -->
          <div id="panel-3" class="step-panel hidden">

            <!-- Recap étape 1 -->
            <div class="mb-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs text-gray-400 uppercase tracking-[1px] font-semibold">Étape 1 — Vos infos</span>
                <button onclick="goTo(1)" class="text-xs text-[#1a7e6c] font-semibold hover:underline">Modifier</button>
              </div>
              <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                <div class="recap-card bg-gray-50 border border-gray-200 rounded-lg border-l-2 border-l-[#1a7e6c] pl-3 pr-2 py-2">
                  <p class="text-[9px] text-[#1a7e6c] uppercase tracking-[1px] font-bold mb-1">Nom</p>
                  <p id="r3-nom" class="text-[12px] text-[#244163] font-medium truncate">—</p>
                </div>
                <div class="recap-card bg-gray-50 border border-gray-200 rounded-lg border-l-2 border-l-[#1a7e6c] pl-3 pr-2 py-2">
                  <p class="text-[9px] text-[#1a7e6c] uppercase tracking-[1px] font-bold mb-1">Société</p>
                  <p id="r3-societe" class="text-[12px] text-[#244163] font-medium truncate">—</p>
                </div>
                <div class="recap-card bg-gray-50 border border-gray-200 rounded-lg border-l-2 border-l-[#1a7e6c] pl-3 pr-2 py-2">
                  <p class="text-[9px] text-[#1a7e6c] uppercase tracking-[1px] font-bold mb-1">Email</p>
                  <p id="r3-email" class="text-[12px] text-[#244163] font-medium truncate">—</p>
                </div>
                <div class="recap-card bg-gray-50 border border-gray-200 rounded-lg border-l-2 border-l-[#1a7e6c] pl-3 pr-2 py-2">
                  <p class="text-[9px] text-[#1a7e6c] uppercase tracking-[1px] font-bold mb-1">Ville</p>
                  <p id="r3-ville" class="text-[12px] text-[#244163] font-medium truncate">—</p>
                </div>
              </div>
            </div>

            <!-- Recap étape 2 -->
            <div class="mb-6">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs text-gray-400 uppercase tracking-[1px] font-semibold">Étape 2 — Votre besoin</span>
                <button onclick="goTo(2)" class="text-xs text-[#1a7e6c] font-semibold hover:underline">Modifier</button>
              </div>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                <div class="recap-card bg-gray-50 border border-gray-200 rounded-lg border-l-2 border-l-[#1a7e6c] pl-3 pr-2 py-2">
                  <p class="text-[9px] text-[#1a7e6c] uppercase tracking-[1px] font-bold mb-1">Secteur</p>
                  <p id="r3-secteur" class="text-[12px] text-[#244163] font-medium">—</p>
                </div>
                <div class="recap-card bg-gray-50 border border-gray-200 rounded-lg border-l-2 border-l-[#1a7e6c] pl-3 pr-2 py-2">
                  <p class="text-[9px] text-[#1a7e6c] uppercase tracking-[1px] font-bold mb-1">Message</p>
                  <p id="r3-message" class="text-[12px] text-[#244163] font-medium" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">—</p>
                </div>
              </div>
            </div>

            <h2 class="text-3xl font-bold text-[#244163] mb-3" style="font-family:'Outfit',sans-serif;">Confirmation</h2>
            <p class="text-[#6b7280] text-base mb-6 leading-relaxed">Vérifiez vos informations avant d'envoyer votre demande de devis.</p>

            <div class="space-y-4">

              <!-- RGPD -->
              <div class="flex items-start gap-3 bg-[#1a7e6c]/6 border border-[#1a7e6c]/20 rounded-lg p-4">
                <div class="w-8 h-8 rounded-md bg-[#1a7e6c]/10 flex items-center justify-center shrink-0 mt-0.5">
                  <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                  </svg>
                </div>
                <p class="text-sm text-gray-500 leading-relaxed">
                  Vos données sont traitées conformément au <strong class="text-[#244163] font-semibold">RGPD</strong> uniquement dans le cadre de votre demande. Elles ne seront jamais revendues à des tiers.
                </p>
              </div>

              <!-- Consentement -->
              <div class="flex items-start gap-3">
                <input id="f-consent" type="checkbox" class="mt-1 w-4 h-4 shrink-0 cursor-pointer accent-[#1a7e6c]"/>
                <label for="f-consent" class="text-sm text-gray-600 leading-relaxed cursor-pointer">
                  J'accepte que mes informations soient utilisées pour traiter ma demande et me recontacter. <span class="text-red-400">*</span>
                </label>
              </div>

              <!-- Message d'erreur -->
              <p id="form-error" class="hidden text-sm text-red-500 font-medium"></p>

              <!-- Bouton envoi -->
              <button id="btn-submit" onclick="submitForm()"
                class="btn-submit w-full text-white py-4 rounded-lg font-semibold text-lg shadow-lg"
                style="background: linear-gradient(to right, #1a7e6c, #244163); box-shadow: 0 4px 16px rgba(26,126,108,0.35);">
                Envoyer le message
              </button>

            </div>

            <!-- Footer étape 3 -->
            <div class="flex items-center justify-between mt-6 pt-5 border-t border-gray-100">
              <button onclick="goTo(2)" class="btn-prev inline-flex items-center gap-2 text-gray-500 text-sm font-medium px-4 py-3 rounded-lg border border-gray-200 bg-white">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 5l-7 7 7 7"/></svg>
                Retour
              </button>
              <span class="text-xs text-gray-400">Étape 3 / 3</span>
            </div>

          </div>


          <!-- ══════════════
               SUCCÈS
          ══════════════ -->
          <div id="panel-success" class="step-panel hidden text-center py-6">
            <div class="w-16 h-16 rounded-full bg-[#1a7e6c]/10 border border-[#1a7e6c]/20 flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>

            <h2 class="text-3xl font-bold text-[#244163] mb-3">Demande envoyée !</h2>
            <p class="text-[#6b7280] text-base leading-relaxed mb-8 max-w-sm mx-auto">
              Merci pour votre demande. L'équipe <strong class="text-[#244163] font-semibold">A+ PREMIUM GROUP</strong> 
              vous recontactera sous <strong class="text-[#1a7e6c] font-semibold">24h ouvrées</strong> avec une réponse personnalisée à votre demande.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script>
    let sectorVal = '';

    const sectorLabels = {
      tourisme:     'Tourisme',
      syndic:       'Syndic',
      tertiaire:    'Tertiaire',
      industriel:   'Industrie',
      desinfection: 'Désinfection',
      tp:           'Travaux Publics',
    };

    /* ─── Navigation entre étapes ─── */
    function goTo(step) {
      [1, 2, 3].forEach(i => document.getElementById('panel-' + i).classList.add('hidden'));

      if (step === 2) fillRecap1();
      if (step === 3) { fillRecap1(); fillRecap2(); }

      document.getElementById('panel-' + step).classList.remove('hidden');
      updateStepper(step);
      updateProgress(step);
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    /* ─── Remplissage recap étape 1 ─── */
    function fillRecap1() {
      const prenom  = document.getElementById('f-prenom').value.trim();
      const nom     = document.getElementById('f-nom').value.trim();
      const full    = [prenom, nom].filter(Boolean).join(' ') || '—';
      const societe = document.getElementById('f-societe').value.trim() || '—';
      const email   = document.getElementById('f-email').value.trim()   || '—';
      const ville   = document.getElementById('f-ville').value.trim()   || '—';

      ['r1', 'r3'].forEach(prefix => {
        const elNom     = document.getElementById(prefix + '-nom');
        const elSociete = document.getElementById(prefix + '-societe');
        const elEmail   = document.getElementById(prefix + '-email');
        const elVille   = document.getElementById(prefix + '-ville');
        if (elNom)     elNom.textContent     = full;
        if (elSociete) elSociete.textContent = societe;
        if (elEmail)   elEmail.textContent   = email;
        if (elVille)   elVille.textContent   = ville;
      });
    }

    /* ─── Remplissage recap étape 2 ─── */
    function fillRecap2() {
      const message = document.getElementById('f-message').value || '—';
      document.getElementById('r3-secteur').textContent = sectorLabels[sectorVal] || '—';
      document.getElementById('r3-message').textContent = message;
    }

    /* ─── Stepper ─── */
    function updateStepper(step) {
      const states = {
        1: ['active', 'todo',   'todo'  ],
        2: ['done',   'active', 'todo'  ],
        3: ['done',   'done',   'active'],
      }[step];

      [1, 2, 3].forEach((i, idx) => {
        const num   = document.getElementById('snum-' + i);
        const label = document.getElementById('slbl-' + i);
        const state = states[idx];
        num.className   = 'w-7 h-7 rounded-full flex items-center justify-center text-[11px] font-bold shrink-0 ';
        label.className = 'text-[10px] uppercase tracking-[0.8px] font-semibold hidden sm:inline ';
        if (state === 'active') {
          num.className += 'bg-[#1a7e6c] text-white';
          num.textContent = i;
          label.className += 'text-[#1a7e6c]';
        } else if (state === 'done') {
          num.className += 'bg-[#244163] text-white';
          num.textContent = '✓';
          label.className += 'text-[#244163]';
        } else {
          num.className += 'bg-white border-[1.5px] border-[#d1d5db] text-[#9ca3af]';
          num.textContent = i;
          label.className += 'text-[#9ca3af]';
        }
      });

      document.getElementById('sline-1').className = 'flex-1 h-px mx-3 ' + (step > 1 ? 'bg-[#244163]' : 'bg-[#e5e7eb]');
      document.getElementById('sline-2').className = 'flex-1 h-px mx-3 ' + (step > 2 ? 'bg-[#244163]' : 'bg-[#e5e7eb]');
    }

    /* ─── Barre de progression ─── */
    function updateProgress(step) {
      document.getElementById('progress').style.width = { 1: '33%', 2: '66%', 3: '100%' }[step];
    }

    /* ─── Sélection secteur ─── */
    function pickSector(el) {
      document.querySelectorAll('.sector-card').forEach(c => {
        c.classList.remove('selected');
        c.style.borderColor = '';
        c.style.background  = '';
      });
      el.classList.add('selected');
      el.style.borderColor = '#1a7e6c';
      el.style.background  = 'rgba(26,126,108,0.08)';
      sectorVal = el.getAttribute('data-val');
    }

    async function submitForm() {
      const consent = document.getElementById('f-consent').checked;
      const errEl   = document.getElementById('form-error');

      if (!consent) {
        errEl.textContent = "Veuillez accepter les conditions avant d'envoyer.";
        errEl.classList.remove('hidden');
        return;
      }
      errEl.classList.add('hidden');

      const prenom      = document.getElementById('f-prenom').value.trim();
      const nom         = document.getElementById('f-nom').value.trim();
      const email       = document.getElementById('f-email').value.trim();
      const tel         = document.getElementById('f-tel').value.trim();
      const societe     = document.getElementById('f-societe').value.trim();
      const ville       = document.getElementById('f-ville').value.trim();
      const messageBase = document.getElementById('f-message').value.trim();

      const messageComplet = [
        messageBase,
        societe ? 'Société : ' + societe : '',
        ville   ? 'Ville : '   + ville   : '',
      ].filter(Boolean).join('\n');

      const data = new FormData();
      data.append('prenom',  prenom);
      data.append('nom',     nom);
      data.append('email',   email);
      data.append('tel',     tel);
      data.append('service', sectorVal);
      data.append('message', messageComplet);

      const btn = document.getElementById('btn-submit');
      btn.disabled    = true;
      btn.textContent = 'Envoi en cours...';

      try {
        const response = await fetch('../contact.php', {
          method: 'POST',
          body: data,
        });

        const result = await response.json();

        if (result.success) {
          [1, 2, 3].forEach(i => document.getElementById('panel-' + i).classList.add('hidden'));
          document.getElementById('stepper').classList.add('hidden');
          document.getElementById('progress').parentElement.classList.add('hidden');
          document.getElementById('panel-success').classList.remove('hidden');
          window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
          errEl.textContent = result.message || 'Une erreur est survenue. Veuillez réessayer.';
          errEl.classList.remove('hidden');
          btn.disabled    = false;
          btn.textContent = 'Envoyer le message';
        }

      } catch (err) {
        errEl.textContent = 'Erreur de connexion. Vérifiez votre connexion et réessayez.';
        errEl.classList.remove('hidden');
        btn.disabled    = false;
        btn.textContent = 'Envoyer le message';
      }
    }
  </script>

    <?php include __DIR__ . '/../components/footer.php'; ?>

</body>
</html>