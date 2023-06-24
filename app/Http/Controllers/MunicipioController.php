<?php

namespace App\Http\Controllers;

use App\Models\departamento;
use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function index()
    {
        $municipios = Municipio::paginate();

        return view('municipio.index', compact('municipios'))
            ->with('i', (request()->input('page', 1) - 1) * $municipios->perPage());
    }

    public function create()
    {
        $municipio = new municipio();
        $departamentos = departamento::pluck('name','id');
        return view('municipio.create', compact('municipio','departamentos'));
    }

    public function store(Request $request)
    {
        request()->validate(Municipio::$rules);

        $municipio = Municipio::create($request->all());

        return redirect()->route('municipios.index')
            ->with('success', 'municipio created successfully.');
    }
}
