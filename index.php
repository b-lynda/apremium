<!DOCTYPE html>
<html lang="fr">
    <head>
      <title>A PREMIUM GROUP | Accueil</title>
      <?php include __DIR__ . '/components/head.php'; ?>
    </head>


  <body class="m-0 p-0">
  <?php include __DIR__ . '/components/header.php'; ?>

    <!---- Hero Section ---->
    <section
      class="relative video-fade flex items-center overflow-hidden -mt-30"
    >
      <video
        autoplay
        muted
        loop
        playsinline
        poster="/assets/images/hero-poster.jpg"
        class="absolute top-0 left-0 w-full h-[90vh] object-cover"
      >
        <source
          src="/assets/videos/2137084_Bed_Hotel_1920x1080.mp4"
          type="video/mp4"
        />
      </video>

      <div class="absolute top-0 left-0 w-full h-full bg-white/75"></div>

      <div class="relative z-10 w-full max-w-7xl my-20 mx-auto px-4 py-20">
        <div
          class="flex flex-col w-fit md:items-start gap-2 pb-0 pt-10 md:py-20"
        >
          <h1
            class="text-center text-5xl text-[#244163] md:text-6xl md:text-left font-bold"
          >
            Ensemble, faisons<br />
            <span class="text-6xl text-shine font-alex-brush md:text-7xl"
              >briller</span
            >
            vos espaces
          </h1>
          <p
            class="text-[#244163] py-2 text-center font-medium md:text-xl md:text-left max-w-2xl"
          >
            Parce qu'un environnement propre et sain est la clé d'une
            <span class="font-bold">expérience réussie</span>, nous mettons
            notre expertise au service de votre tranquillité.
          </p>
          <a
            href="#ourStory"
            class="text-center rounded-lg bg-[#1a7e6c] w-full py-3 px-6 text-white font-bold md:w-fit hover:bg-[#299a85] transition-all"
          >
            En savoir plus
          </a>
        </div>
      </div>
    </section>

    <!--- Our Story Section ---->
    <section class="flex max-w-7xl mx-auto">
      <div
        class="flex flex-col md:flex-row justify-between items-center w-full gap-8 p-4"
      >
        <div class="w-full md:w-1/2">
          <img
            src="/assets/images/img-story-aprem.png"
            alt="grenoble ville"
            class="w-full rounded-xl"
          />
          <p class="text-xs text-slate-600 font-extralight italic pt-2">
            Fort de plus de vingt années d'expertise dans les domaines du
            tertiaire et du tourisme, notre directeur développement a choisi de
            valoriser l'ensemble de son parcours professionnel en proposant sa
            vision personnelle du secteur du nettoyage.
          </p>
        </div>

        <div class="flex flex-col gap-2.5 w-full md:w-1/2">
          <h2 class="text-3xl font-bold text-[#244163]">Notre parcours</h2>
          <h3 class="font-semibold italic text-[#1a7e6c]">
            Découvrez comment nous avons bâti notre expertise au fil des années
          </h3>
          <div class="flex flex-col gap-2">
            <p>
              Originaires de l'agglomération Grenobloise, acteurs du tourisme
              depuis plusieurs décennies, nous avons choisi de réinventer le
              nettoyage en alliant qualité, fiabilité et respect de
              l'environnement.
            </p>
            <p>
              <span class="text-[#1a7e6c] font-bold">Notre mission </span>:
              offrir des prestations adaptées à chaque besoin et réalisées avec
              rigueur, qu'il s'agisse de résidences touristiques, d'espaces
              professionnels ou de lieux de vie.
            </p>
            <p>
              Nous croyons en des partenariats solides, basés sur la confiance
              et des objectifs communs ; la satisfaction de vos clients et
              collaborateurs est au cœur de notre mission, car leur bien-être
              garantit la pérennité de notre collaboration. Sur le terrain, nous
              agissons comme une seule équipe, engagée et à l'écoute.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Services Section -->
    <section
      class="flex flex-col px-4 py-8 md:py-16 gap-2.5 max-w-7xl mx-auto"
      id="ourStory"
    >
      <div>
        <h2 class="text-3xl font-bold text-[#244163]">
          Nos solutions sur mesure
        </h2>
      </div>
      <div>
        <p>
          Sachez que chaque espace a ses
          <span class="font-bold text-[#1a7e6c]">besoins spécifiques</span>.
          C'est pourquoi nous proposons des prestations de nettoyage
          <span class="font-bold text-[#1a7e6c]">entièrement adaptées</span> à
          votre environnement et à votre rythme. Avec nous, chaque intervention
          est pensée pour être efficace, fiable et parfaitement adaptée à vos
          attentes.
        </p>
      </div>

      <!-- Service Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
        <!-- Card Tourisme -->
        <div
          class="relative h-[200px] flex flex-col justify-center items-end p-12 rounded-tr-4xl rounded-br-4xl rounded-bl-4xl bg-white/10 backdrop-blur-lg backdrop-saturate-150 border border-white/20 overflow-hidden transition-all shadow-lg hover:shadow-2xl hover:border-white/40 hover:bg-white/15 group"
        >
          <div
            class="absolute inset-0 from-white/10 via-transparent to-transparent pointer-events-none"
          ></div>
          <div
            class="absolute inset-0 from-white/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
          ></div>
          <div
            class="absolute left-0 top-1/2 -translate-y-1/2 z-0 opacity-15 group-hover:opacity-30 group-hover:scale-110 transition-all duration-500"
          >
            <img
              src="/assets/images/hotel (1).svg"
              alt="hotel icon"
              class="w-[150px] h-[150px] -rotate-12 group-hover:-rotate-6 transition-transform duration-500"
              style="filter: drop-shadow(0 0 20px #1a7e6c)"
            />
          </div>
          <h3
            class="relative z-10 font-bold text-[#1a7e6c] text-xl mb-4 text-right"
          >
            Tourisme
          </h3>
          <p
            class="relative z-10 text-right opacity-80 leading-relaxed text-gray-700"
          >
            Résidences hôtelières, chalets, clubs de vacances, campings.
          </p>
        </div>

        <!-- Card Tertiaire -->
        <div
          class="relative h-[200px] flex flex-col justify-center items-end p-12 rounded-tr-4xl rounded-br-4xl rounded-bl-4xl bg-white/10 backdrop-blur-lg backdrop-saturate-150 border border-white/20 overflow-hidden transition-all shadow-lg hover:shadow-2xl hover:border-white/40 hover:bg-white/15 group"
        >
          <div
            class="absolute inset-0 from-white/10 via-transparent to-transparent pointer-events-none"
          ></div>
          <div
            class="absolute inset-0 from-white/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
          ></div>
          <div
            class="absolute left-0 top-1/2 -translate-y-1/2 z-0 opacity-15 group-hover:opacity-30 group-hover:scale-110 transition-all duration-500"
          >
            <img
              src="/assets/images/chaise (1).svg"
              alt="chaise icon"
              class="w-[150px] h-[150px] -rotate-12 group-hover:-rotate-6 transition-transform duration-500"
              style="filter: drop-shadow(0 0 20px #1a7e6c)"
            />
          </div>
          <h3
            class="relative z-10 font-bold text-[#1a7e6c] text-xl mb-4 text-right"
          >
            Tertiaire
          </h3>
          <p
            class="relative z-10 text-right opacity-80 leading-relaxed text-gray-700"
          >
            Bureaux, banques, cabinets médicaux, agences...
          </p>
        </div>

        <!-- Card Syndic-Copro -->
        <div
          class="relative h-[200px] flex flex-col justify-center items-end p-12 rounded-tr-4xl rounded-br-4xl rounded-bl-4xl bg-white/10 backdrop-blur-lg backdrop-saturate-150 border border-white/20 overflow-hidden transition-all shadow-lg hover:shadow-2xl hover:border-white/40 hover:bg-white/15 group"
        >
          <div
            class="absolute inset-0 from-white/10 via-transparent to-transparent pointer-events-none"
          ></div>
          <div
            class="absolute inset-0 from-white/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
          ></div>
          <div
            class="absolute left-0 top-1/2 -translate-y-1/2 z-0 opacity-15 group-hover:opacity-30 group-hover:scale-110 transition-all duration-500"
          >
            <img
              src="/assets/images/bureau.svg"
              alt="bureau icon"
              class="w-[150px] h-[150px] -rotate-12 group-hover:-rotate-6 transition-transform duration-500"
              style="filter: drop-shadow(0 0 20px #1a7e6c)"
            />
          </div>
          <h3
            class="relative z-10 font-bold text-[#1a7e6c] text-xl mb-4 text-right"
          >
            Syndic-Collectivités
          </h3>
          <p
            class="relative z-10 text-right opacity-80 leading-relaxed text-gray-700"
          >
            Copropriétés, mairies, écoles, gymnases, salles de sport.
          </p>
        </div>

        <!-- Card Industrie -->
        <div
          class="relative h-[200px] flex flex-col justify-center items-end p-12 rounded-tr-4xl rounded-br-4xl rounded-bl-4xl bg-white/10 backdrop-blur-lg backdrop-saturate-150 border border-white/20 overflow-hidden transition-all shadow-lg hover:shadow-2xl hover:border-white/40 hover:bg-white/15 group"
        >
          <div
            class="absolute inset-0 from-white/10 via-transparent to-transparent pointer-events-none"
          ></div>
          <div
            class="absolute inset-0 from-white/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
          ></div>
          <div
            class="absolute left-0 top-1/2 -translate-y-1/2 z-0 opacity-15 group-hover:opacity-30 group-hover:scale-110 transition-all duration-500"
          >
            <img
              src="/assets/images/chimique.svg"
              alt="chimique icon"
              class="w-[150px] h-[150px] -rotate-12 group-hover:-rotate-6 transition-transform duration-500"
              style="filter: drop-shadow(0 0 20px #1a7e6c)"
            />
          </div>
          <h3
            class="relative z-10 font-bold text-[#1a7e6c] text-xl mb-4 text-right"
          >
            Industrie
          </h3>
          <p
            class="relative z-10 text-right opacity-80 leading-relaxed text-gray-700"
          >
            Usines, entrepôts, salles blanche, commerces ...
          </p>
        </div>

        <!-- Card Travaux Publics -->
        <div
          class="relative h-[200px] flex flex-col justify-center items-end p-12 rounded-tr-4xl rounded-br-4xl rounded-bl-4xl bg-white/10 backdrop-blur-lg backdrop-saturate-150 border border-white/20 overflow-hidden transition-all shadow-lg hover:shadow-2xl hover:border-white/40 hover:bg-white/15 group"
        >
          <div
            class="absolute inset-0 from-white/10 via-transparent to-transparent pointer-events-none"
          ></div>
          <div
            class="absolute inset-0 from-white/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
          ></div>
          <div
            class="absolute left-0 top-1/2 -translate-y-1/2 z-0 opacity-15 group-hover:opacity-30 group-hover:scale-110 transition-all duration-500"
          >
            <img
              src="/assets/images/casque-de-chantier.svg"
              alt="casque icon"
              class="w-[150px] h-[150px] -rotate-12 group-hover:-rotate-6 transition-transform duration-500"
              style="filter: drop-shadow(0 0 20px #1a7e6c)"
            />
          </div>
          <h3
            class="relative z-10 font-bold text-[#1a7e6c] text-xl mb-4 text-right"
          >
            Travaux Publics
          </h3>
          <p
            class="relative z-10 text-right opacity-80 leading-relaxed text-gray-700"
          >
            Fins de chantier, rénovations, vitrerie
          </p>
        </div>

        <!-- Card Désinfection -->
        <div
          class="relative h-[200px] flex flex-col justify-center items-end p-12 rounded-tr-4xl rounded-br-4xl rounded-bl-4xl bg-white/10 backdrop-blur-lg backdrop-saturate-150 border border-white/20 overflow-hidden transition-all shadow-lg hover:shadow-2xl hover:border-white/40 hover:bg-white/15 group"
        >
          <div
            class="absolute inset-0 from-white/10 via-transparent to-transparent pointer-events-none"
          ></div>
          <div
            class="absolute inset-0 from-white/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
          ></div>
          <div
            class="absolute left-0 top-1/2 -translate-y-1/2 z-0 opacity-15 group-hover:opacity-30 group-hover:scale-110 transition-all duration-500"
          >
            <img
              src="/assets/images/anti-virus.svg"
              alt="anti-virus icon"
              class="w-[150px] h-[150px] -rotate-12 group-hover:-rotate-6 transition-transform duration-500"
              style="filter: drop-shadow(0 0 20px #1a7e6c)"
            />
          </div>
          <h3
            class="relative z-10 font-bold text-[#1a7e6c] text-xl mb-4 text-right"
          >
            Désinfection
          </h3>
          <p
            class="relative z-10 text-right opacity-80 leading-relaxed text-gray-700"
          >
            Copropriétés, mairies, écoles, gymnases, salles de sport.
          </p>
        </div>
      </div>
    </section>

    <!-- Section Partenaires -->
    <section>
      <div class="text-center mb-2.5">
        <h2 class="text-3xl font-bold text-[#244163]">Nos Partenaires</h2>
        <p class="text-lg text-gray-600">Ils nous font confiance</p>
      </div>

      <div class="overflow-hidden scroll-container">
        <div
          class="flex gap-16 items-center animate-scroll px-6"
          id="scrollContent"
        >
          <div
            class="min-w-[130px] w-[130px] h-[130px] flex items-center justify-center"
          >
            <img src="/assets/images/belambra-logo.svg" alt="Belambra" />
          </div>
          <div
            class="min-w-[130px] w-[130px] h-[130px] flex items-center justify-center"
          >
            <img src="/assets/images/goelia.svg" alt="Goelia" />
          </div>
          <div
            class="min-w-[130px] w-[130px] h-[130px] flex items-center justify-center"
          >
            <img
              src="/assets/images/location-alpe-d-huez-logo-gris.svg"
              alt="Alpe d'Huez"
            />
          </div>
          <div
            class="min-w-[130px] w-[130px] h-[130px] flex items-center justify-center"
          >
            <img
              src="/assets/images/Logo-groupe_Vertical-Couleur.png"
              alt="Logo Groupe"
            />
          </div>
          <div
            class="min-w-[130px] w-[130px] h-[130px] flex items-center justify-center"
          >
            <img src="/assets/images/eiffage.png" alt="Eiffage" />
          </div>
        </div>
      </div>
    </section>

    <!-- Section Formulaire de Contact -->
    <section
      class="relative min-h-screen flex items-center justify-center py-10 px-4"
    >
      <!-- Fondus haut et bas -->
      <div class="absolute inset-0 z-5 pointer-events-none">
        <div
          class="absolute top-0 left-0 right-0 h-32 bg-linear-to-b from-white via-white/60 to-transparent"
        ></div>
        <div
          class="absolute bottom-0 left-0 right-0 h-32 bg-linear-to-t from-white via-white/60 to-transparent"
        ></div>
      </div>

      <!-- Container principal -->
      <div class="w-full max-w-7xl relative z-10 mx-auto">
        <div
          class="grid lg:grid-cols-2 gap-0 rounded-3xl overflow-hidden shadow-2xl min-h-[800px]"
        >
          <!-- Partie gauche - Formulaire -->
          <div
            class="bg-white py-8 lg:p-12 lg:pl-16 lg:pr-12 flex flex-col justify-center opacity-0 -translate-x-8 animate-slide-left"
            style="padding-left: 56px;"
          >
            <div class="mb-8">
              <h2 class="text-3xl font-bold text-[#244163] mb-4">
                Contactez-nous
              </h2>
              <p class="text-gray-600 text-lg mb-6">
                Besoin d'une intervention, candidater ou toute autre question,
                notre équipe vous répond rapidement avec une solution adaptée.
              </p>

              <div class="space-y-3 mb-8">
                <a
                  href="tel:+33988327743"
                  class="flex items-center gap-3 text-[#1a7e6c] hover:text-[#244163] transition-colors group"
                >
                  <div
                    class="w-10 h-10 bg-[#1a7e6c]/10 rounded-full flex items-center justify-center group-hover:bg-[#1a7e6c]/20 transition-colors"
                  >
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"
                      ></path>
                    </svg>
                  </div>
                  <span class="font-medium">Appelez-nous</span>
                </a>
              </div>
            </div>

            <!-- Formulaire -->
            <form class="space-y-6" id="contactForm">
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2"
                    >Prénom</label
                  >
                  <input
                    type="text"
                    name="prenom"
                    placeholder="Prénom"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-800 bg-gray-50 transition-all duration-300 focus:border-[#1a7e6c] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#1a7e6c]/20"
                  />
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2"
                    >Nom</label
                  >
                  <input
                    type="text"
                    name="nom"
                    placeholder="Nom"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-800 bg-gray-50 transition-all duration-300 focus:border-[#1a7e6c] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#1a7e6c]/20"
                  />
                </div>
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2"
                  >Email</label
                >
                <input
                  type="email"
                  name="email"
                  placeholder="vous@exemple.com"
                  required
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-800 bg-gray-50 transition-all duration-300 focus:border-[#1a7e6c] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#1a7e6c]/20"
                />
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2"
                  >Téléphone</label
                >
                <input
                  type="tel"
                  name="tel"
                  placeholder="+33 (0)6 00 00 00 00"
                  required
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-800 bg-gray-50 transition-all duration-300 focus:border-[#1a7e6c] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#1a7e6c]/20"
                />
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2"
                  >Service</label
                >
                <select
                  name="service"
                  required
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-800 bg-gray-50 transition-all duration-300 focus:border-[#1a7e6c] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#1a7e6c]/20"
                >
                  <option value="">Sélectionnez un service</option>
                  <option value="tourisme">Tourisme</option>
                  <option value="syndic">Gestion locative / Syndic</option>
                  <option value="tertiaire">Tertiaire</option>
                  <option value="industriel">Industriel</option>
                  <option value="desinfection">Désinfection</option>
                  <option value="tp">Travaux publics</option>
                  <option value="candidature">Candidature</option>
                </select>
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2"
                  >Message</label
                >
                <textarea
                  name="message"
                  placeholder="Décrivez votre besoin..."
                  rows="4"
                  required
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-800 bg-gray-50 transition-all duration-300 focus:border-[#1a7e6c] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#1a7e6c]/20 resize-none"
                ></textarea>
              </div>

              <button
                type="submit"
                class="w-full bg-linear-to-r from-[#1a7e6c] to-[#244163] text-white py-4 rounded-lg font-semibold text-lg shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-[#1a7e6c]/50"
              >
                Envoyer le message
              </button>
            </form>
          </div>

          <!-- Partie droite - Map -->
          <div
            class="relative bg-gray-200 opacity-0 translate-x-8 animate-slide-right"
          >
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2810.87507754195!2d5.78273807634918!3d45.20986335037247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478af5cf86cfc695%3A0xa15109e6ef952261!2sAPG%20(ANYX%20PREMIUM%20GROUP)!5e0!3m2!1sfr!2sfr!4v1765159654412!5m2!1sfr!2sfr"
              width="100%"
              height="100%"
              style="
                border: 0;
                position: absolute;
                top: 0;
                left: 0;
                filter: grayscale(20%);
              "
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
       <?php include __DIR__ . '/components/footer.php'; ?>
  </body>
</html>
