<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Campanha;

class CampanhaController extends Controller
{
    public function index()
    {
        return Campanha::all();
    }

    public function store(Request $request)
    {
        Campanha::create($request->all());
    }

    public function show($id)
    {
        return Campanha::findOrFail($id);
    }

    
    public function update(Request $request, $id)
    {
        $campanha = Campanha::findOrFail($id);
        $campanha->update($request->all());
    }

    public function destroy($id)
    {
        $campanha = Campanha::findOrFail($id);
        $campanha->delete();
    }
}
