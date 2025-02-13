@extends('master')
@section('titre', 'Portfolio')
@section('contenu')

<!-- GRANDE IMAGE-->
<header class="masthead portfolio">
    <div class="container">
        <div class="masthead-subheading">Nos Réalisations !</div>
        <div class="masthead-heading text-uppercase">Nous transformons des idées en réalité</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="/a-propos">Notre histoire</a>
    </div>
</header>
<!-- FIN GRANDE IMAGE-->

<!-- PORTFOLIO GRID -->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
            <h3 class="section-subheading text-muted">Témoignages de Notre Savoir-Faire en Développement Web</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/portfolio-1.jpg" alt="Image de site web" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Green Energy Hub</div>
                        <div class="portfolio-caption-subheading text-muted">Site Informatif</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/portfolio-2.jpg" alt="Image de site web" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Gourmet Delight</div>
                        <div class="portfolio-caption-subheading text-muted">Site de Restaurant</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/portfolio-3.jpg" alt="Image de site web" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Artiste Showcase</div>
                        <div class="portfolio-caption-subheading text-muted">Site Portfolio</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <!-- Portfolio item 4-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/portfolio-6.jpg" alt="Image de site web" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Fashion Avenue</div>
                        <div class="portfolio-caption-subheading text-muted">Site de Boutique en Ligne</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <!-- Portfolio item 5-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/portfolio-5.jpg" alt="Image de site web" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Travel Explorer</div>
                        <div class="portfolio-caption-subheading text-muted">Site de Voyage</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- Portfolio item 6-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/portfolio-7.jpg" alt="Image de site web" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">HealthCare Connect</div>
                        <div class="portfolio-caption-subheading text-muted">Site Médical</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FIN PORTFOLIO GRID-->
@endsection

@section('modaleJS')
<!-- PORTFOLIO MODALS -->

<!-- Portfolio item 1 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Green Energy Hub</h2>
                            <p class="item-intro text-muted">Site web informatif</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/portfolio-1.jpg" alt="Image de site web" />
                            <p>Développement d'un site d'information et de promotion des énergies renouvelables avec des sections dédiées aux projets et aux innovations.</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Client:</strong>
                                    EcoPower Solutions
                                </li>
                                <li>
                                    <strong>Categorie:</strong>
                                    Site Informatif
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-xmark me-1"></i>
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio item 2 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Gourmet Delight</h2>
                            <p class="item-intro text-muted">Restaurant</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/portfolio-2.jpg" alt="Image de site web" />
                            <p>Développement d'un site web attrayant pour un restaurant haut de gamme, incluant un menu interactif, un système de réservation en ligne et des témoignages de clients.</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Client:</strong>
                                    Gourmet Bistro
                                </li>
                                <li>
                                    <strong>Catégorie:</strong>
                                    Site de Restaurant
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-xmark me-1"></i>
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio item 3 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Artiste Showcase</h2>
                            <p class="item-intro text-muted">Portfolio</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/portfolio-3.jpg" alt="Image de site web" />
                            <p>Création d'un portfolio en ligne pour un artiste, mettant en valeur ses œuvres et facilitant les commandes personnalisées.</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Client:</strong>
                                    ArtVision Studio
                                </li>
                                <li>
                                    <strong>Catégorie:</strong>
                                    Site Portfolio
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-xmark me-1"></i>
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio item 4 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Fashion Avenue</h2>
                            <p class="item-intro text-muted">Boutique en ligne</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/portfolio-6.jpg" alt="Image de site web" />
                            <p>Création d'une boutique en ligne élégante pour une marque de vêtements, intégrant une fonctionnalité de panier d'achat, des options de paiement sécurisées et une galerie de produits.</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Client:</strong>
                                    Chic Boutique
                                </li>
                                <li>
                                    <strong>Category:</strong>
                                    Site de boutique en ligne
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-xmark me-1"></i>
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio item 5 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Travel Explorer</h2>
                            <p class="item-intro text-muted">Voyage</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/portfolio-5.jpg" alt="Image de site web" />
                            <p>Conception d'un site web pour une agence de voyages offrant des fonctionnalités de réservation en ligne et des guides de voyage interactifs.

                            </p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Client:</strong>
                                    Voyageurs Modernes
                                </li>
                                <li>
                                    <strong>Category:</strong>
                                    Site de voyage
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-xmark me-1"></i>
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio item 6 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">HealthCare Connect</h2>
                            <p class="item-intro text-muted">Santé</p>
                            <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/portfolio-7.jpg" alt="Image de site web" />
                            <p>Développement d'un portail de santé en ligne permettant la prise de rendez-vous et le suivi des dossiers médicaux.</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Client:</strong>
                                    MedBridge Inc.
                                </li>
                                <li>
                                    <strong>Category:</strong>
                                    Site Médical
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-xmark me-1"></i>
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FIN PORTFOLIO MODALS -->

@endsection