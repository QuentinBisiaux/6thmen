<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PronosticController extends Controller
{

    public function index(Request $request): Response
    {
        $user = $request->user();
        if($user->has('pronostic')->get()->isEmpty()) {
            //Create new Pronostic
            $pronostic = $user->newPronostic();
        } else{
            //Get User's Pronostic
            $pronostic = $user->pronostic()
                ->with(['details', 'details.team'])
                ->orderBy('conference', 'DESC')->orderBy('wins', 'DESC')->orderBy('team.name')
                ->get();
        }
        //Organize Pronostic
        dump($pronostic);

        return Inertia::render('Pronostic/Index', ['pronostic' => $pronostic]);
    }
}
