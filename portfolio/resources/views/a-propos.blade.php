@extends('master')
@section('titre', 'À propos')
@section('contenu')

<!-- GRANDE IMAGE-->
<header class="masthead about">
    <div class="container">
        <div class="masthead-subheading">Notre Histoire et Notre Mission !</div>
        <div class="masthead-heading text-uppercase">Un parcours d'innovation et de croissance</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="/equipe">Notre équipe</a>
    </div>
</header>
<!-- FIN GRANDE IMAGE-->

<!-- À PROPOS-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">À propos</h2>
            <h3 class="section-subheading text-muted">Découvrez notre parcours entrepreneurial !</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/in-the-beginning.jpg" alt="Image in the beginning" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>2019</h4>
                        <h4 class="subheading">Fondation de l'Entreprise</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">L'entreprise a été fondée par Sylviane Paré, une développeuse passionnée par le web. Avec une vision claire et déterminée, Sylviane a posé les premières pierres de ce qui deviendrait une entreprise prospère.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/premier-projet.jpg" alt="Image d'une femme à l'ordinateur" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>2020</h4>
                        <h4 class="subheading">Premiers Projets et Partenariats</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Dès la première année, l'entreprise a réalisé plusieurs projets pour des clients locaux. Des partenariats stratégiques avec d'autres entreprises du secteur ont permis d'élargir notre offre de services et de renforcer notre expertise.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/expansion.jpg" alt="Image d'un meeting de travail" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>2022</h4>
                        <h4 class="subheading">Croissance et Expansion</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Forts de notre succès initial, nous avons élargi notre équipe et ouvert un second bureau. L'acquisition de nouveaux clients et la diversification de nos services ont été des étapes clés de notre croissance.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/innovation.jpg" alt="Image de travailleurs à leur bureau" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>2025</h4>
                        <h4 class="subheading">Innovation Continue et Vision Future</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Aujourd'hui, nous continuons d'innover et de repousser les limites de la technologie web. Notre vision est de devenir un leader dans le domaine de la programmation web, en offrant des solutions de pointe à nos clients du monde entier.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        Faites partie
                        <br />
                        de notre
                        <br />
                        histoire !
                    </h4>
                </div>
            </li>
        </ul>
    </div>
</section>
@endsection