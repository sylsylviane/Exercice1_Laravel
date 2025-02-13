@extends('master')
@section('titre', 'Contact')
@section('contenu')

<!-- CONTACT-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Nous contacter</h2>
            <h3 class="section-subheading text-light">"Besoin d'aide ou envie d'en savoir plus ? Nous sommes à votre écoute !</h3>
        </div>

        <!-- MESSAGE DE CONFIRMATION D'ENVOI DU FORMULAIRE -->
        @isset($donnee)
        <div class="container">
            <div class="text-center bg-light pt-4 pb-4">
                <h4 class=" section-subheading text-secondary mb-4">Merci pour votre message !</h4>
                <p class="text-secondary"><strong class="text-secondary">Name: </strong>{{ $donnee->name ?? '' }}</p>
                <p class="text-secondary"><strong class="text-secondary">Courriel: </strong>{{ $donnee->email ?? ''}}</p>
                <p class="text-secondary"><strong class="text-secondary">Téléphone: </strong>{{ $donnee->phone ?? ''}}</p>
                <p class="text-secondary"><strong class="text-secondary">Message: </strong>{{ $donnee->message ?? ''}}</p>
                <a href="/accueil" class="btn bg-primary btn-xl text-uppercase mt-4 text-light">Retour à l'accueil</a>
            </div>
        </div>

        <!-- FORMULAIRE -->
        @else
        <form id="contactForm" method="post">
            @csrf
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- NAME INPUT-->
                        <input class="form-control" id="name" name="name" type="text" placeholder="Votre nom *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">Un nom est requis</div>
                    </div>
                    <div class="form-group">
                        <!-- EMAIL INPUT-->
                        <input class="form-control" id="email" name="email" type="email" placeholder="Votre courriel *" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">Un courriel est requis</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Courriel non valide</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- PHONE INPUT-->
                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="Votre téléphone *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Un numéro de téléphone est requis</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- MESSAGE INPUT-->
                        <textarea class="form-control" id="message" name="message" placeholder="Votre message *" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Un message est requis</div>
                    </div>
                </div>
            </div>

            <!-- BOUTON SUBMIT-->
            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Envoyer votre message</button></div>
        </form>
        @endisset
    </div>
</section>
@endsection

<!-- FORMULAIRE JS -->
@section('formJS')
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection