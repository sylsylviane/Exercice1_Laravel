<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function accueil()
    {
        return view('accueil');
    }

    public function services()
    {
        return view('services');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function aPropos()
    {
        return view('a-propos');
    }

    public function equipe()
    {
        return view('equipe');
    }

    public function contact()
    {
        return view('contact');
    }

    public function formulaireContact(Request $requete)
    {
        return view('contact', ['donnee' => $requete]);
    }
}
