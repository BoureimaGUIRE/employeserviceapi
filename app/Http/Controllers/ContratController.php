<?php

namespace App\Http\Controllers;

use App\Models\Contrat;



class ContratController extends Controller
{

    public function index()
    {
        $contrats = Contrat::with(['employe', 'poste'])
                            ->orderBy('dateDebut', 'asc')
                            ->get();
        return $this->successResponse($contrats);
    }

    public function show($id)
    {
        $contrat = Contrat::findOrFail($id);
        return $this->successResponse($contrat);
    }

}