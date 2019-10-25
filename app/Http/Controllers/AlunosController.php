<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function create()
    {
    	return view('dashboard.alunos.create');
    }

    public function store(Request $request)
    {
    	dd($request->all());
    }
}
