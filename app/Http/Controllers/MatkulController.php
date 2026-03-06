<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{

    public function index()
    {
        $matkuls = Matkul::all();
        return view('matkul.index', compact('matkuls'));
    }

    public function store(Request $request)
    {
        Matkul::create($request->all());
        return redirect('/matkul');
    }

    public function edit($id)
    {
        $matkul = Matkul::findOrFail($id);
        return view('matkul.edit', compact('matkul'));
    }

    public function update(Request $request, $id)
    {
        $matkul = Matkul::findOrFail($id);
        $matkul->update($request->all());

        return redirect('/matkul');
    }

    public function destroy($id)
    {
        $matkul = Matkul::findOrFail($id);
        $matkul->delete();

        return redirect('/matkul');
    }

}