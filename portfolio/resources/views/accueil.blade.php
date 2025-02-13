@extends('master')
@section('titre', 'Accueil')
@section('contenu')

<!-- GRANDE IMAGE-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Élevez Votre Présence en Ligne avec InnovaWeb</div>
        <div class="masthead-heading text-uppercase">Des solutions web innovantes pour des résultats exceptionnels</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="/contact">Contactez-nous</a>
    </div>
</header>
<!-- FIN GRANDE IMAGE-->

<!-- ACCUEIL-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Notre Engagement</h2>
            <h3 class="section-subheading text-muted">Nous croyons en une collaboration étroite avec nos clients, en écoutant attentivement leurs besoins et en offrant des solutions sur mesure.</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fas fa-cogs fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Découvrez nos services</h4>
                <p class="text-muted">Que ce soit pour le développement, l'optimisation ou la maintenance de votre site web, nous sommes là pour vous ! </p>
                <a class="btn btn-secondary btn-m text-uppercase mb-4" href="/services">En Savoir plus</a>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-briefcase fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Découvrez notre portfolio et notre histoire</h4>
                <p class="text-muted">Nous sommes fiers de nos créations ! Découvrez nos nombreux projets dans la section Portfolio de notre site web et apprenez-en plus sur nous en visitant notre page À propos.</p>
                <a class="btn btn-secondary btn-m text-uppercase mb-4" href="/portfolio">En Savoir plus</a>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Contactez nous</h4>
                <p class="text-muted">Assurez la pérennité de votre site web avec notre service de maintenance et de support technique. Nous offrons des mises à jour régulières, des sauvegardes de données et une assistance rapide en cas de problème.</p>
                <a class="btn btn-secondary btn-m text-uppercase mb-4" href="/contact">En Savoir plus</a>
            </div>
        </div>
    </div>
</section>
@endsection