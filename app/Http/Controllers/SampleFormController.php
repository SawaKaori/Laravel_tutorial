<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;

class SampleFormController extends Controller
{
    public function index()
    {
        $pets = Pet::orderBy('id', 'asc')->get();

        return view('sample_form', [
            "pets" => $pets
        ]);
    }

    public function show($id){

        $pet = Pet::find($id);
        
        return view('sample_show', [
            "pet" => $pet
        ]);

    }

    public function store(Request $request){

            $pet = new Pet();

            $pet->name = $request->pet;
            $pet->birthday = "";
            $pet->gender = "";

            $pet->seve;

            return redirect('/form/index');

          //  dd($request);
            
    }
}
