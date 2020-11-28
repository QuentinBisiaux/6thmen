<?php

namespace App\Http\Controllers;

use App\Models\NBATeams;
use Inertia\Inertia;
use Inertia\Response;

class PronosticController extends Controller
{

    public function index(): Response
    {
        if(null /** User doesn't have a pronostic */) {
            //Create new Pronostic
            //$pronostic = User->initPronostic()
        } else{
            //Get User's Pronostic
            //$pronostic = User->getPronostic()
        }
        //Organize Pronostic
        $teams = NBATeams::getByConference();
        return Inertia::render('Pronostic/Index', ['teams' => $teams]);
    }
}
