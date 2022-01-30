<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeController extends Controller
{

    public function index()
    {
        $employes = Employe::all();
        
        return $this->successResponse($employes);
    }

    public function show($id)
    {
        $employe = Employe::findOrFail($id);
        return $this->successResponse($employe);
    }

    public function store(Request $request)
    {
        $rules = [
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'telephone1' => 'required',
            'typePieceIdentite' => 'required',
            'numPieceIdentite' => 'required',
            'dateNaissance' => 'required|date_format:Y-m-d',
            'lieuNaissance' => 'required',
            'nationalite' => 'required',
            'adresseDomicile' => 'required',
            'email' => 'required'
        ];

        $this->validate($request, $rules);
        $employe = Employe::create($request->all());
        return $this->successResponse($employe);

    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'telephone1' => 'required',
            'typePieceIdentite' => 'required',
            'numPieceIdentite' => 'required',
            'dateNaissance' => 'required|date_format:Y-m-d',
            'lieuNaissance' => 'required',
            'nationalite' => 'required',
            'adresseDomicile' => 'required',
            'email' => 'required'
        ];

        $this->validate($request, $rules);
        $employe = Employe::findOrFail($id);
        $employe = $employe->fill($request->all());

        if ($employe->isClean()) {
            return $this->errorResponse('Vous devez changer au moins une valeur',
                Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $employe->save();
        return $this->successResponse($employe);
    }


    public function destroy($id)
    {

        $employe = Employe::findOrFail($id);
        $employe->delete();
        return $this->successResponse($employe);
    }

}