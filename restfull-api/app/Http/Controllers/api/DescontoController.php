<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Desconto;

class DescontoController extends Controller
{
    public function index()
    {
        return Desconto::all();
    }

    public function store(Request $request)
    {
        Desconto::create($request->all());
    }

    public function show($id)
    {
        return Desconto::findOrFail($id);
    }

    
    public function update(Request $request, $id)
    {
        $desconto = Desconto::findOrFail($id);
        $desconto->update($request->all());
    }

    public function destroy($id)
    {
        $desconto = Desconto::findOrFail($id);
        $desconto->delete();
    }
}
