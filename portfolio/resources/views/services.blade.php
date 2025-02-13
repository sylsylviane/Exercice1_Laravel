@extends('master')
@section('titre', 'Services')
@section('contenu')

<!-- GRANDE IMAGE-->
<header class="masthead service">
    <div class="container">
        <div class="masthead-subheading">Services de Programmation Web de Pointe</div>
        <div class="masthead-heading text-uppercase">Des solutions sur mesure pour propulser votre entreprise en ligne</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="/portfolio">Portfolio</a>
    </div>
</header>
<!-- FIN GRANDE IMAGE-->

<!-- SERVICES -->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Découvrez comment nous pouvons transformer votre présence en ligne.</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Développement de Sites Web Personnalisés</h4>
                <p class="text-muted">Nous créons des sites web uniques et fonctionnels qui reflètent l'identité de votre marque. Du design à la mise en œuvre, chaque étape est soigneusement réalisée pour garantir une expérience utilisateur optimale.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Optimisation SEO</h4>
                <p class="text-muted">Augmentez la visibilité de votre site web sur les moteurs de recherche grâce à nos stratégies d'optimisation SEO. Nous analysons et améliorons le contenu, les mots-clés et la structure de votre site pour attirer un trafic qualifié.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Maintenance et Support Technique</h4>
                <p class="text-muted">Assurez la pérennité de votre site web avec notre service de maintenance et de support technique. Nous offrons des mises à jour régulières, des sauvegardes de données et une assistance rapide en cas de problème.</p>
            </div>
        </div>
    </div>
</section>

@endsection