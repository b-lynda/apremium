<!DOCTYPE html>
<html lang="fr">
    <?php 
$jsonLd = '{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Accueil", "item": "https://'. $_SERVER['HTTP_HOST'] .'"},
    {"@type": "ListItem", "position": 2, "name": "Nos services", "item": "https://'. $_SERVER['HTTP_HOST'] .'/pages/nos-services.php"},
    {"@type": "ListItem", "position": 3, "name": "Collectivités", "item": "https://'. $_SERVER['HTTP_HOST'] .'/pages/collectivites.php"}
  ]
}';
?>
    <head>
        <title>APG | Collectivités</title>
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
              Collectivités
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
            Acteur local ancré en Rhône-Alpes, nous mettons notre expertise au service des communes, 
            intercommunalités et établissements publics qui exigent rigueur, réactivité et traçabilité.
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
 
        </div>
 
      </div>
 
    </section>


    <!-- ── SECTION ENGAGEMENTS & CONFORMITÉ ── -->
<section class="py-20 px-6 bg-white border-t-4 border-[#1a7e6c]">
  <div class="max-w-6xl mx-auto">

    <div class="grid grid-cols-1 lg:grid-cols-2 rounded-3xl overflow-hidden border border-[#e2eae7]">

      <!-- ── GAUCHE — Timeline ── -->
<div class="p-6 sm:p-8 lg:p-14 flex flex-col justify-center border-b lg:border-b-0 lg:border-r border-[#e8f0ed]">


        <!-- Badge -->
        <span class="inline-flex items-center gap-2 bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c] text-[0.68rem] font-bold px-3.5 py-1.5 rounded-md uppercase tracking-wider mb-5 w-fit">
          <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="#1a7e6c" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          Engagements & conformité
        </span>

        <!-- Titre -->
        <h2 class="text-[clamp(1.5rem,2.5vw,1.9rem)] font-extrabold text-[#1a2332] leading-[1.15] mb-3">
          Des garanties<br>
          <span class="text-[#1a7e6c]">concrètes</span><br>
          pour le public
        </h2>

        <!-- Séparateur -->
        <div class="w-10 h-[3px] bg-[#1a7e6c] rounded-full mb-4"></div>

        <!-- Sous-titre -->
        <p class="text-[0.82rem] text-[#6b7a8d] leading-[1.7] font-light mb-8 max-w-[340px]">
          Travailler avec une collectivité impose des exigences précises.
          Certifications, traçabilité et transparence totale.
        </p>

        <!-- Timeline -->
        <div class="relative pl-7">

          <!-- Ligne verticale -->
          <div class="absolute left-1.5 top-1.5 bottom-1.5 w-[1.5px] rounded-full"
               style="background: linear-gradient(to bottom, #1a7e6c, #c2e8df 80%, transparent)"></div>

          <!-- Item 1 -->
          <div class="group relative pb-4 cursor-default">
            <div class="absolute -left-[17px] top-1 w-[11px] h-[11px] rounded-full bg-[#1a7e6c] border-2 border-white shadow-[0_0_0_1px_#c2e8df] transition-all duration-200 group-hover:bg-[#244163] group-hover:scale-125"></div>
            <div class="flex items-center justify-between gap-2 mb-0.5">
              <p class="text-[0.85rem] font-bold text-[#1a2332] group-hover:text-[#1a7e6c] transition-colors">Normes & certifications</p>
              <span class="inline-flex items-center gap-1 text-[0.62rem] font-semibold px-2 py-0.5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c] shrink-0">En cours</span>
            </div>
            <p class="text-[0.74rem] text-[#6b7a8d] leading-relaxed">Protocoles NF EN 13549 et Certipropre.</p>
          </div>

          <!-- Item 2 -->
          <div class="group relative pb-4 cursor-default">
            <div class="absolute -left-[17px] top-1 w-[11px] h-[11px] rounded-full bg-[#1a7e6c] border-2 border-white shadow-[0_0_0_1px_#c2e8df] transition-all duration-200 group-hover:bg-[#244163] group-hover:scale-125"></div>
            <div class="flex items-center justify-between gap-2 mb-0.5">
              <p class="text-[0.85rem] font-bold text-[#1a2332] group-hover:text-[#1a7e6c] transition-colors">Marchés publics</p>
              <span class="inline-flex items-center gap-1 text-[0.62rem] font-semibold px-2 py-0.5 rounded-full bg-[#eef2f7] border border-[#c5d3e8] text-[#244163] shrink-0">CCTP</span>
            </div>
            <p class="text-[0.74rem] text-[#6b7a8d] leading-relaxed">Dossiers complets, appels d'offres.</p>
          </div>

          <!-- Item 3 -->
          <div class="group relative pb-4 cursor-default">
            <div class="absolute -left-[17px] top-1 w-[11px] h-[11px] rounded-full bg-[#1a7e6c] border-2 border-white shadow-[0_0_0_1px_#c2e8df] transition-all duration-200 group-hover:bg-[#244163] group-hover:scale-125"></div>
            <div class="flex items-center justify-between gap-2 mb-0.5">
              <p class="text-[0.85rem] font-bold text-[#1a2332] group-hover:text-[#1a7e6c] transition-colors">Personnel salarié & formé</p>
              <span class="inline-flex items-center gap-1 text-[0.62rem] font-semibold px-2 py-0.5 rounded-full bg-[#eef2f7] border border-[#c5d3e8] text-[#244163] shrink-0">CDI · RC Pro</span>
            </div>
            <p class="text-[0.74rem] text-[#6b7a8d] leading-relaxed">Agents formés aux protocoles collectivités.</p>
          </div>

          <!-- Item 4 -->
          <div class="group relative pb-4 cursor-default">
            <div class="absolute -left-[17px] top-1 w-[11px] h-[11px] rounded-full bg-[#1a7e6c] border-2 border-white shadow-[0_0_0_1px_#c2e8df] transition-all duration-200 group-hover:bg-[#244163] group-hover:scale-125"></div>
            <div class="flex items-center justify-between gap-2 mb-0.5">
              <p class="text-[0.85rem] font-bold text-[#1a2332] group-hover:text-[#1a7e6c] transition-colors">Éco-responsabilité & RSE</p>
              <span class="inline-flex items-center gap-1 text-[0.62rem] font-semibold px-2 py-0.5 rounded-full bg-[#e8f5f2] border border-[#c2e8df] text-[#1a7e6c] shrink-0">Éco-labellisés</span>
            </div>
            <p class="text-[0.74rem] text-[#6b7a8d] leading-relaxed">Produits conformes aux marchés publics.</p>
          </div>

          <!-- Item 5 -->
          <div class="group relative pb-4 cursor-default">
            <div class="absolute -left-[17px] top-1 w-[11px] h-[11px] rounded-full bg-[#1a7e6c] border-2 border-white shadow-[0_0_0_1px_#c2e8df] transition-all duration-200 group-hover:bg-[#244163] group-hover:scale-125"></div>
            <div class="flex items-center justify-between gap-2 mb-0.5">
              <p class="text-[0.85rem] font-bold text-[#1a2332] group-hover:text-[#1a7e6c] transition-colors">Traçabilité & reporting</p>
              <span class="inline-flex items-center gap-1 text-[0.62rem] font-semibold px-2 py-0.5 rounded-full bg-[#eef2f7] border border-[#c5d3e8] text-[#244163] shrink-0">A la demande</span>
            </div>
            <p class="text-[0.74rem] text-[#6b7a8d] leading-relaxed">Compte-rendus, référent dédié.</p>
          </div>

          <!-- Item 6 -->
          <div class="group relative cursor-default">
            <div class="absolute -left-[17px] top-1 w-[11px] h-[11px] rounded-full bg-[#1a7e6c] border-2 border-white shadow-[0_0_0_1px_#c2e8df] transition-all duration-200 group-hover:bg-[#244163] group-hover:scale-125"></div>
            <div class="flex items-center justify-between gap-2 mb-0.5">
              <p class="text-[0.85rem] font-bold text-[#1a2332] group-hover:text-[#1a7e6c] transition-colors">Flexibilité horaire</p>
              <span class="inline-flex items-center gap-1 text-[0.62rem] font-semibold px-2 py-0.5 rounded-full bg-[#fef4e6] border border-[#f7d9a0] text-[#9a5f0a] shrink-0">7j/7</span>
            </div>
            <p class="text-[0.74rem] text-[#6b7a8d] leading-relaxed">Hors heures, vacances scolaires.</p>
          </div>

        </div>
      </div>

      <!-- ── DROITE — Illustration organique ── -->
      <div class="relative overflow-hidden flex items-center justify-center min-h-[420px]"
           style="background: linear-gradient(135deg, #f0faf7 0%, #ffffff 60%, #eef2f7 100%);">
        <svg width="100%" height="100%" viewBox="0 0 400 480" preserveAspectRatio="xMidYMid slice"
             class="absolute inset-0" aria-hidden="true">

          <!-- Formes organiques -->
          <path d="M-30,60 C80,0 220,50 300,0 C380,-50 430,90 420,220 C410,350 340,400 250,430 C160,460 60,430 10,360 C-40,290 -80,180 -30,60 Z" fill="#1a7e6c" opacity="0.06"/>
          <path d="M130,480 C210,445 320,415 370,325 C425,235 415,115 360,65 C305,15 265,65 295,175 C325,285 265,375 185,410 C105,445 50,480 130,480 Z" fill="#244163" opacity="0.07"/>
          <path d="M50,180 C100,100 210,70 295,115 C380,160 395,270 355,355 C315,440 205,455 120,410 C35,365 0,260 50,180 Z" fill="#1a7e6c" opacity="0.05"/>
          <path d="M180,40 C250,18 345,65 368,155 C390,245 325,335 258,352 C191,369 128,325 150,238 C172,151 110,62 180,40 Z" fill="#7ee8d0" opacity="0.1"/>

          <!-- Lignes organiques fines -->
          <path d="M0,170 C90,130 190,155 275,110 C360,65 410,95 430,160" fill="none" stroke="#1a7e6c" stroke-width="0.7" opacity="0.2"/>
          <path d="M0,240 C70,200 170,225 255,180 C340,135 390,158 430,220" fill="none" stroke="#1a7e6c" stroke-width="0.5" opacity="0.15"/>
          <path d="M30,330 C115,290 205,315 290,270 C375,225 405,255 430,310" fill="none" stroke="#244163" stroke-width="0.5" opacity="0.15"/>

          <!-- Micro-carte 1 -->
          <rect x="32" y="72" width="128" height="58" rx="12" fill="white" stroke="#c2e8df" stroke-width="1"/>
          <rect x="32" y="72" width="128" height="58" rx="12" fill="#e8f5f2" opacity="0.5"/>
          <text x="48" y="100" font-size="22" font-weight="900" fill="#1a7e6c" font-family="system-ui">100%</text>
          <text x="48" y="118" font-size="9" fill="#6b7a8d" font-family="system-ui">Personnel certifié</text>

          <!-- Micro-carte 2 -->
          <rect x="238" y="148" width="128" height="58" rx="12" fill="white" stroke="#c5d3e8" stroke-width="1"/>
          <rect x="238" y="148" width="128" height="58" rx="12" fill="#eef2f7" opacity="0.5"/>
          <text x="254" y="176" font-size="22" font-weight="900" fill="#244163" font-family="system-ui">24h</text>
          <text x="254" y="194" font-size="9" fill="#6b7a8d" font-family="system-ui">Délai de réponse</text>

          <!-- Micro-carte 3 -->
          <rect x="32" y="272" width="128" height="58" rx="12" fill="white" stroke="#c2e8df" stroke-width="1"/>
          <rect x="32" y="272" width="128" height="58" rx="12" fill="#e8f5f2" opacity="0.5"/>
          <text x="48" y="300" font-size="22" font-weight="900" fill="#1a7e6c" font-family="system-ui">7j/7</text>
          <text x="48" y="318" font-size="9" fill="#6b7a8d" font-family="system-ui">Disponibilité</text>

          <!-- Micro-carte 4 -->
          <rect x="238" y="352" width="128" height="58" rx="12" fill="white" stroke="#c5d3e8" stroke-width="1"/>
          <rect x="238" y="352" width="128" height="58" rx="12" fill="#eef2f7" opacity="0.5"/>
          <text x="254" y="380" font-size="22" font-weight="900" fill="#244163" font-family="system-ui">10 ans</text>
          <text x="254" y="398" font-size="9" fill="#6b7a8d" font-family="system-ui">D'expertise locale</text>

          <!-- Bouclier central -->
          <circle cx="198" cy="224" r="42" fill="white" stroke="#c2e8df" stroke-width="1.5"/>
          <circle cx="198" cy="224" r="34" fill="#e8f5f2" stroke="#c2e8df" stroke-width="0.8"/>
          <path d="M198,198 L220,209 L220,229 Q220,246 198,255 Q176,246 176,229 L176,209 Z" fill="#1a7e6c" opacity="0.85"/>
          <polyline points="187,225 195,233 209,217" fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>

          <!-- Connecteurs pointillés -->
          <line x1="160" y1="130" x2="185" y2="182" stroke="#c2e8df" stroke-width="0.8" stroke-dasharray="3 3"/>
          <line x1="238" y1="196" x2="222" y2="210" stroke="#c5d3e8" stroke-width="0.8" stroke-dasharray="3 3"/>
          <line x1="160" y1="272" x2="180" y2="252" stroke="#c2e8df" stroke-width="0.8" stroke-dasharray="3 3"/>
          <line x1="238" y1="375" x2="222" y2="258" stroke="#c5d3e8" stroke-width="0.8" stroke-dasharray="3 3"/>

          <!-- Particules -->
          <circle cx="320" cy="82" r="3" fill="#1a7e6c" opacity="0.18"/>
          <circle cx="336" cy="96" r="1.8" fill="#1a7e6c" opacity="0.12"/>
          <circle cx="308" cy="100" r="2.2" fill="#1a7e6c" opacity="0.1"/>
          <circle cx="75" cy="390" r="2.5" fill="#244163" opacity="0.12"/>
          <circle cx="90" cy="405" r="1.5" fill="#244163" opacity="0.1"/>
          <circle cx="200" cy="45" r="2" fill="#1a7e6c" opacity="0.2"/>
          <circle cx="355" cy="300" r="2.5" fill="#244163" opacity="0.12"/>
          <circle cx="42" cy="200" r="1.5" fill="#1a7e6c" opacity="0.15"/>

        </svg>
      </div>

    </div>
  </div>
</section>
<!-- ── FIN SECTION ENGAGEMENTS & CONFORMITÉ ── -->

<!-- ── SECTION ÉTABLISSEMENTS COUVERTS ── -->
<section class="py-20 px-6 bg-white border-t-4 border-[#1a7e6c]" id="offre">

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
      Nous intervenons dans tous vos espaces publics
    </h2>
    <div class="w-12 h-[3px] bg-[#1a7e6c] rounded-full mx-auto mb-4"></div>
    <p class="text-[#6b7a8d] max-w-xl mx-auto text-base leading-relaxed font-light">
      De la mairie au gymnase, d'une crèche à une médiathèque, nous nous adaptons
      ses protocoles à chaque type d'établissement recevant du public.
    </p>
  </div>

  <!-- Grille des cards -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-6xl mx-auto">

    <!-- Card 1 — Mairies -->
    <div class="group relative bg-white border border-[#e2eae7] rounded-2xl p-7 overflow-hidden cursor-default
                transition-all duration-200
                hover:border-[#c2e8df] hover:bg-[#f8fdfb] hover:-translate-y-1 hover:shadow-lg">
      <!-- Barre top au hover -->
      <div class="absolute top-0 left-0 right-0 h-[3px] bg-[#1a7e6c] rounded-t-2xl
                  scale-x-0 origin-left transition-transform duration-200
                  group-hover:scale-x-100"></div>
      <!-- Icône -->
      <div class="w-12 h-12 rounded-xl bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4
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
        Accueil du public, bureaux des agents, salles de conseil et espaces communs. Nos équipes interviennent avec discrétion, hors heures de bureau ou en journée.
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
    <div class="group relative bg-white border border-[#e2eae7] rounded-2xl p-7 overflow-hidden cursor-default
                transition-all duration-200
                hover:border-[#c2e8df] hover:bg-[#f8fdfb] hover:-translate-y-1 hover:shadow-lg">
      <div class="absolute top-0 left-0 right-0 h-[3px] bg-[#1a7e6c] rounded-t-2xl  
                  scale-x-0 origin-left transition-transform duration-200
                  group-hover:scale-x-100"></div>
      <div class="w-12 h-12 rounded-xl bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4
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
        Planning adapté au calendrier scolaire, produits conformes aux normes EN
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
    <div class="group relative bg-white border border-[#e2eae7] rounded-2xl p-7 overflow-hidden cursor-default
                transition-all duration-200
                hover:border-[#c2e8df] hover:bg-[#f8fdfb] hover:-translate-y-1 hover:shadow-lg">
      <div class="absolute top-0 left-0 right-0 h-[3px] bg-[#1a7e6c] rounded-t-2xl  
                  scale-x-0 origin-left transition-transform duration-200
                  group-hover:scale-x-100"></div>
      <div class="w-12 h-12 rounded-xl bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4
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
    <div class="group relative bg-white border border-[#e2eae7] rounded-2xl p-7 overflow-hidden cursor-default
                transition-all duration-200
                hover:border-[#c2e8df] hover:bg-[#f8fdfb] hover:-translate-y-1 hover:shadow-lg">
      <div class="absolute top-0 left-0 right-0 h-[3px] bg-[#1a7e6c] rounded-t-2xl  
                  scale-x-0 origin-left transition-transform duration-200
                  group-hover:scale-x-100"></div>
      <div class="w-12 h-12 rounded-xl bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4
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
    <div class="group relative bg-white border border-[#e2eae7] rounded-2xl p-7 overflow-hidden cursor-default
                transition-all duration-200
                hover:border-[#c2e8df] hover:bg-[#f8fdfb] hover:-translate-y-1 hover:shadow-lg">
      <div class="absolute top-0 left-0 right-0 h-[3px] bg-[#1a7e6c] rounded-t-2xl
                  scale-x-0 origin-left transition-transform duration-200
                  group-hover:scale-x-100"></div>
      <div class="w-12 h-12 rounded-xl bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4
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
    <div class="group relative bg-white border border-[#e2eae7] rounded-2xl p-7 overflow-hidden cursor-default
                transition-all duration-200
                hover:border-[#c2e8df] hover:bg-[#f8fdfb] hover:-translate-y-1 hover:shadow-lg">
      <div class="absolute top-0 left-0 right-0 h-[3px] bg-[#1a7e6c] rounded-t-2xl
                  scale-x-0 origin-left transition-transform duration-200
                  group-hover:scale-x-100"></div>
      <div class="w-12 h-12 rounded-xl bg-[#e8f5f2] border border-[#c2e8df] flex items-center justify-center mb-4
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
        Parkings, cours, abords de bâtiments, balayage mécanique et nettoyage haute pression. Balayage mécanique, désherbage, évacuation des déchets et nettoyage haute pression.


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


  <div class="text-center mb-12 pt-8">
    <h2 class="text-3xl font-bold text-[#244163] mb-3 py-2">Interventions complémentaires</h2>
      <div class="w-12 h-[3px] bg-[#1a7e6c] rounded-full mx-auto mb-4"></div>
  </div>

<div class="flex flex-col gap-3 max-w-3xl mx-auto px-4 md:px-0" id="accordion">
  
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
<!-- ── FIN SECTION ÉTABLISSEMENTS COUVERTS ── -->



<!--- SECTION CTA FINAL --->
<section class="w-full py-16 bg-white border-t-4 border-[#1a7e6c]">
  <div class="max-w-7xl mx-auto px-6">

    <div class="flex flex-col items-center text-center">

      <h2 class="text-3xl lg:text-4xl font-bold text-[#244163] leading-tight mb-4 max-w-2xl">
        Un seul interlocuteur pour tous
        vos espaces collectifs
      </h2>

      <p class="text-[#6b7a8d] text-base mb-8 max-w-xl leading-relaxed">
Un référent dédié à votre collectivité pour un suivi personnalisé, des comptes rendus d'intervention et une communication transparente.      </p>
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
