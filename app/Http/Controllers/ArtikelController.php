<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index() {
        $artikel = ArtikelModel::get_all();
        // dd($pertanyaan);
        return view('artikel.index', compact('artikel'));
    }

    public function create() {
        return view('artikel.create');
    }

    public function store(Request $request) {
        $artikel = ArtikelModel::save($request);
        if($artikel){
            return redirect('artikel');
        }
    }

    public function show($id) {
        $artikel = ArtikelModel::find_By_Id($id);
        return view('artikel.show', compact('artikel'));
    }

    public function edit($id) {
        $artikel = ArtikelModel::find_By_Id($id);
        return view('artikel.edit', compact('artikel'));
    }

    public function update($id, Request $request) {
        $artikel = ArtikelModel::update($id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($id) {
        $destroy = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }
}
