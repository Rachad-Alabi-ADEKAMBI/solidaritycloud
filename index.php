    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php include 'parts/meta.php'; ?>

        <title>Solidairecloud - Accueil</title>

    </head>

    <body>
        <?php include 'parts/header.php'; ?>

        <div class='content' id='app'> <br>
            <div class=' v-if=' showHome'>
                <section class='section'>
                    <div class='container'>
                        <div class='hero'>
                            <div class='hero__content'>
                                <h1>
                                    SOLIDAIRE CLOUD
                                </h1>

                                <p class='text text-white'>
                                    Une offre low-cost sur votre hébergement, pour lancer votre business à moindre coût.
                                    Mais pas que...
                                </p>
                                <a href='#about' class='btn btn-primary'>
                                    A propos
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class='section boxes' id='offer'>
                    <div class='container bg-light'>
                        <h2 class='subbtitle text-center mx-auto mt-4'>
                            L'offre unique
                        </h2>

                        <div class='row mt-3'>
                            <div class='col-sm-12 col-md-6'>
                                <div class='box'>
                                    <div class='round'>
                                        <span>
                                            30 €
                                        </span>

                                        <p class='text fw-thin'>
                                            avant le <strong>
                                                31/04/2023
                                            </strong>
                                        </p>


                                    </div>

                                    <p class='text text-justify'>
                                        Cette <strong>OFFRE EXCEPTIONNELLE </strong> est aussi notre façon de vous
                                        remercier de
                                        votre accueil
                                        chaleureux sur nos différents médias concernant notre communauté (qui s’élargit
                                        constamment par de nouveaux contributeurs de tous pays francophones). <br>
                                        En espérant vous rendre la pareille avec cette offre: <br>

                                        Si besoin d’un nom de domaine (.com, .fr, .net(13euro/an), .org(11euro)): nom de
                                        domaine
                                        en plus (11,90 euros/an). <br>
                                        Si vous l’avez déjà : coût de transfert de domaine existant (11,99 euros) <br>

                                    </p>
                                    <h3>
                                        Offre auto-hébergement
                                    </h3>
                                    <p class='text text-justify'>
                                        Nous installons votre serveur sur votre machine pour avoir un contrôle total sur
                                        votre
                                        hébergement et qu’il ne soit pas chez un tiers.
                                    </p>

                                    <h3>
                                        Quand ?
                                    </h3>

                                    <p class='text text-justify'>
                                        Disponible sous 48 heures après paiement.
                                    </p>


                                </div>
                            </div>

                            <div class='col-sm-12 col-md-6'>
                                <div class='box'>
                                    <h3>
                                        Avantages:
                                    </h3>

                                    <p class='text text-justify'><i class='fas fa-circle-check'></i> Multi-Sites + Sites
                                        illimités</p>

                                    <ul>
                                        <li> <i class='fas fa-check'> </i> disque illimité</li>
                                        <li> <i class='fas fa-check'></i> Bande passante et trafic illimités</li>
                                        <li> <i class='fas fa-check'></i> Plateforme intelligente CMS</li>
                                        <li> <i class='fas fa-check'></i> Plusieurs versions PHP, Python, Node.js, Ruby
                                        </li>
                                        <li> <i class='fas fa-check'></i> Bases de données illimitées</li>
                                        <li> <i class='fas fa-check'></i> Comptes Emails Illimités</li>
                                        <li> <i class='fas fa-check'></i> Certificats SSL dédiés</li>
                                        <li> <i class='fas fa-check'></i> SiteBuilder inclus</li>
                                        <li> <i class='fas fa-check'></i> Protection Anti-DDoS</li>
                                        <li> <i class='fas fa-check'></i> Protection Anti-Malware</li>
                                        <li> <i class='fas fa-check'></i> 14 jours garantie ou argent remis</li>
                                        <li> <i class='fas fa-check'></i> Panneau de contrôle (Cpanel)</li>
                                        <li> <i class='fas fa-check'></i> Migration entrante gratuite</li>
                                        <li> <i class='fas fa-check'></i> Support et assistance disponible avec des
                                            contacts
                                            de
                                            chaque pays ainsi que les
                                            réseaux sociaux 24/7</li>
                                        <li> <i class='fas fa-check'></i> Activation instantanée</li>
                                        <li> <i class='fas fa-check'></i> Devenez revendeur et obtenez des revenus
                                            récurrents</li>
                                        <li> <i class='fas fa-check'></i> pour des sites en java nous avons aussi
                                            un serveur, se renseigner ;)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class='row mt-2'>
                            <div class='col-sm-12 col-md-6'>
                                <div class='box'>
                                    <h3>
                                        Bonus:
                                    </h3>

                                    <span>
                                        Contrat clients
                                    </span>

                                    <p class='text text-justify'>
                                        Contrats clients
                                        Vous voulez vendre des sites web et des services de création
                                        d’applications mobiles et de marketing à vos clients, tout en restant
                                        professionnel ? ...


                                        <btn class='btn btn-primary' @click='displayContracts()'>En
                                            savoir plus</btn>
                                    </p>


                                    <span>
                                        FB BLASTER
                                    </span> <br>

                                    <p class='text text-justify'>
                                        Créez, planifiez et republiez quatre types d'offres (pourcentage de remise,
                                        remise
                                        en
                                        espèces, gratuit, Bogo) avec trois types de publication (image, vidéo,
                                        carrousel)
                                        pour
                                        vos pages Facebook ...
                                        <btn class='btn btn-primary' @click='displayBlaster()'>En savoir plus</btn>
                                    </p>

                                    <span>
                                        WP WEB TRANSFORMER
                                    </span>

                                    <p class='text text-justify'>
                                        Il s'agit du plugin WordPress Popup tout-en-un qui transforme votre site Web en
                                        une
                                        centrale de génération de leads. Construisez votre liste de diffusion ... <btn
                                            class='btn btn-primary' @click='displayWeb()'>En
                                            savoir plus</btn>
                                    </p>
                                    <span>
                                        Machine site clone
                                    </span>

                                    <p class='text text-justify'>
                                        SiteClone Machine est un script PHP qui vous permet de faire des copies, des
                                        clones ou des archives de tout site Web
                                        <btn class='btn btn-primary' @click='displayClone()'>En savoir plus</btn>
                                    </p>
                                </div>
                            </div>

                            <div class='col-sm-12 col-md-6'>
                                <div class='box'>
                                    <h3>
                                        Cette offre est accessible pour une durée limitée bien sûr.
                                    </h3>

                                    <p class='text text-justify'>
                                        Après le 31 février, ce prix
                                        sera augmenté (tout en restant attractif !) et les bonus peut-être supprimés.
                                        Cette offre exceptionnelle est aussi notre façon de vous remercier de votre
                                        accueil
                                        chaleureux sur nos différents médias concernant notre communauté (qui s’élargit
                                        constamment par de nouveaux contributeurs de tous pays francophones).
                                        En espérant vous rendre la pareille avec cette offre.
                                    </p>


                                    <h3>
                                        Le meilleur:
                                    </h3>

                                    <p class='text text-justify'>vous pouvez devenir revendeur de nos solutions et
                                        obtenir
                                        20%
                                        de
                                        commissions ! Si intéressé il faut bien sûr au préalable avoir son site hébergé
                                        chez
                                        nous.
                                        Ensuite nous contacter pour signaler votre intérêt à devenir revendeur. Vous
                                        recevrez
                                        plus
                                        d'informations sur notre programme.
                                    </p>

                                    <div class='center text-center mt-5'>
                                        <button class='btn btn-success mx-auto text-center'>
                                            Acheter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class='section mt-5'>
                    <div class='container' id='check'>
                        <div class='row check text-center   '>
                            <p class='text text-center mx-auto fw-bold'>
                                Pour permettre à tous les entrepreneurs de lancer leur site ou boutique en ligne
                                sans
                                dépenser trop au début de leur activité.
                            </p> <br>
                            <form>
                                <label for=''>
                                    <input type='text' required placeholder='Nom de domaine'>
                                </label>

                                <button class='btn btn-primary' @click='proceed()'>
                                    Vérifier
                                </button>
                            </form>
                        </div>
                    </div>
                </section>

                <section class='section mt-3'>
                    <div class='container about' id='about'>
                        <h2 class='subtitle mx-auto text-center'>
                            A propos
                        </h2>

                        <div class='row about__content '>
                            <div class='col-sm-12 col-md-6 text-center about__content__image '>
                                <img class='mx-auto' src='public/img/alex-knight-2EJCSULRwC8-unsplash.jpg' alt=''>
                            </div>

                            <div class='col-sm-12 col-md-6 about__content__text'>
                                <p class='text text-justify'>
                                    Alors qu’est-ce que Solidarityword ?
                                    Une association à but non lucratif.
                                    Elle a pour but de soutenir des projets citoyens innovants.
                                    Dont notre structure au Togo
                                    <br>

                                <ul>
                                    <li class='mt-2'> <i class='fas fa-arrow-right mr-1'></i> Entreprise d'Action du
                                        Millenaire.</li>
                                    <li class='mt-2'> <i class='fas fa-arrow-right mr-1'></i> L'entreprise est basée sur
                                        Lomé
                                        au Togo.</li>
                                    <li class='mt-2'><i class='fas fa-arrow-right mr-1'></i> Lomé, Hedzranawoe, rue 206,
                                        maison 114.</li>
                                    <li class='mt-2'> <i class='fas fa-arrow-right mr-1'></i> Elle fait partie de
                                        l'organisation iAmeAI.
                                    </li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class='section bg-light mt-4'>
                    <div class='container about' id='about'>
                        <h2 class='subtitle mx-auto text-center'>
                            Contact
                        </h2>

                        <div class='row about__content '>
                            <div class='col-sm-12 col-md-6 about__content__image text-left'>
                                <form class='form' method='POST' action='./api/api.php?action=contact'>
                                    <div class='form-group'>
                                        <label for='inputAddress'>Email: </label> <span class='red'>*</span>
                                        <input type='Email' class='form-control' id='inputAddress' placeholder='Email'
                                            name='email' required>
                                    </div>
                                    <div class='form-row mx-auto'>
                                        <div class='form-group col-md-6'>
                                            <label for='inputEmail4'>Nom: </label> <span class='red'>*</span>
                                            <input type='text' class='form-control' id='inputEmail4' placeholder='Nom'
                                                name='first_name' required>
                                        </div>
                                        <div class='form-group col-md-6'>
                                            <label for='inputPassword4'>Prénoms:</label><span class='red'>*</span>
                                            <input type='text' class='form-control' id='inputPassword4'
                                                placeholder='Prénoms' required name='last_name'>
                                        </div>
                                    </div>

                                    <div class='form-row mx-auto mt-2'>
                                        <div class='form-group  col-4'>
                                            <label for='inputEmail4'>Indicatif : </label> <span class='red'>*</span>
                                            <input type='text' class='form-control' id='inputEmail4'
                                                placeholder='Indicatif de téléphone'
                                                onkeyup='if(this.value<0){this.value= this.value * -1}'
                                                name='phone_code'>
                                        </div>
                                        <div class='form-group  col-8'>
                                            <label for='inputPassword4'>Num de téléphone: </label> <span
                                                class='red'>*</span>
                                            <input type='text' class='form-control' id='inputPassword4'
                                                placeholder='Numéro de téléphone' name='phone_number'
                                                onkeyup='if(this.value<0){this.value= this.value * -1}' required>
                                        </div>
                                    </div>

                                    <div class='form-group'>
                                        <label for='exampleFormControlTextarea1'>Message:</label>
                                        <textarea class='form-control' id='exampleFormControlTextarea1'
                                            rows='3'></textarea>
                                    </div>

                                    <p class='text-left'>
                                        (Les cases obligatoires sont précédées de <span class='red'>*</span>)
                                    </p>

                                    <div class='form-group mt-3'>
                                        <div class='form-check'>
                                            <input class='form-check-input' type='checkbox' value='' id='invalidCheck'
                                                required>
                                            <label class='form-check-label' for='invalidCheck'>
                                                Oui je comprends et j'accepte que ces informations soient <br> stockées
                                                afin de me recontacter
                                            </label>
                                        </div>
                                    </div>
                                    <button type='submit' class='btn btn-primary'>Envoyer</button>
                                </form>
                            </div>

                            <div class='col-sm-12 col-md-6 about__content__image'>
                                <img class='mt-2' src='public/img/possessed-photography-jIBMSMs4_kA-unsplash(1).jpg'
                                    alt=''>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class='bonus' v-if='showContracts'>
                <div class='close' @click='displayHome()'>
                    X
                </div> <br>

                <h2 class='subtitle'>
                    Contrats clients
                </h2> <br>
                <p>
                    Vous voulez vendre des sites web et des services de création
                    d’applications mobiles et de marketing à vos clients, mais vous voulez
                    avoir l’air professionnel ? Vous allez obtenir un accès à des « contrats
                    clients » professionnels que vous pouvez utiliser lors de la vente de vos
                    services à des clients locaux ou en ligne et avoir l’air plus légitime et
                    professionnel. Le moyen le plus simple de rester en sécurité et de facturer
                    plus !
                </p>
            </div>

            <div class='bonus' v-if='showBlaster'>
                <div class='close' @click='displayHome()'>
                    X
                </div> <br>
                <h2>
                    FB BLASTER
                </h2> <br>
                <p>Créez, planifiez et republiez quatre types d'offres (pourcentage de remise, remise en
                    espèces, gratuit, Bogo) avec trois types de publication (image, vidéo, carrousel) pour
                    vos pages Facebook. C'est la première application qui peut créer des publications
                    d'offres similaires aux annonces d'offres Facebook !
                    Vous pouvez démarrer votre propre entreprise et offrir des services d'affichage à vos
                    clients en quelques minutes ! C'est une application SaaS multi-utilisateurs. PayPal et
                    Stripe sont intégrés pour recevoir des paiements.
                </p>
            </div>

            <div class='bonus' v-if='showWeb'>
                <div class='close' @click='displayHome()'>
                    X
                </div> <br>
                <h2>
                    WP WEB TRANSFORMER
                </h2> <br>
                <p>
                    Il s'agit du plugin WordPress Popup tout-en-un qui transforme votre site Web en une
                    centrale de génération de leads. Construisez votre liste de diffusion, plus grande,-
                    plus rapide et plus ciblée que jamais. Vous pouvez créer de superbes pop-ups en
                    quelques minutes et commencer à convertir les visiteurs de votre site Web en
                    abonnés, abonnés sociaux et clients. Plugin contextuel WordPress d'optimisation de
                    la conversion de classe mondiale avec plus de 10 positions d'affichage contextuelle,
                    plus de 12 déclencheurs et filtres de comportement des visiteurs différents. La
                    meilleure chose à propos de ce plugin contextuel est qu'il possède une énorme
                    bibliothèque de plus de 100 modèles prêts à l'emploi magnifiquement conçus et à
                    haute conversion. Des fonctionnalités telles que la fenêtre contextuelle de sortie, la
                    fenêtre contextuelle opt-in, la fenêtre contextuelle coulissante, la fenêtre contextuelle
                    vidéo, la fenêtre contextuelle au clic, la fenêtre contextuelle sociale, les formulaires
                    intégrés, les boîtes de widgets, les barres d'informations en font le plugin de
                    génération de popup et de leads le plus puissant.
                </p>
            </div>

            <div class='bonus' v-if='showClone'>
                <div class='close' @click='displayHome()'>
                    X
                </div> <br>
                <h2>
                    MACHINE SITE CLONE
                </h2> <br>
                <p>
                    SiteClone Machine est un script PHP qui vous permet de faire des copies, des
                    clones ou des archives de tout site Web . Peu importe que ce site Web soit créé avec
                    des fichiers HTML réguliers ou qu'il ait été construit à l'aide d'un CMS comme
                    Wordpress ou Joomla ; SiteClones les clone tous ! Une fois qu'un clone ou une copie
                    a été créé ; vous pouvez choisir de parcourir le clone en ligne, de le télécharger sous
                    forme d'archive ZIP, de l'envoyer par e-mail ou de le télécharger sur un serveur
                    distant via FTP. Avec SiteClone Machine, vous pouvez commencer à gagner de
                    l'argent grâce à la conception web et à utiliser intelligemment cet outil pour démarrer
                    l'ensemble du processus de conception web... Non seulement SiteClone Machine
                    génère une copie exacte du site mais il réécrit également toutes les URL pour
                    qu'elles soient entièrement relatives, ce qui vous permet d'utiliser le site cloné soit
                    sur un serveur Web, soit localement sur votre ordinateur.
                </p>
            </div>


        </div>


        <?php include 'parts/footer.php'; ?>
    </body>

    </html>