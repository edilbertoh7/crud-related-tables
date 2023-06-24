<?php

namespace App\Http\Controllers;

use App\Models\departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        $departamentos = departamento::paginate();

        return view('departamento.index', compact('departamentos'))
            ->with('i', (request()->input('page', 1) - 1) * $departamentos->perPage());
    }

    public function create()
    {
        echo
        $departamento = new departamento();
        return view('departamento.create', compact('departamento'));
    }

    public function store(Request $request)
    {
        request()->validate(departamento::$rules);

        $departamento = departamento::create($request->all());

        return redirect()->route('departamentos.index')
            ->with('success', 'departamento created successfully.');
    }
}
