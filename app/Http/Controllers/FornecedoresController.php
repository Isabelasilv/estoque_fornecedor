<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fornecedor;
use App\Http\Requests\FornecedorRequest;

class FornecedorController extends Controller
{
    
    public function index()
    {
        $fornecedor = Fornecedor::all();
        return view('fornecedor.index', compact('fornecedor'));
    }

    
    public function create()
    {
        $fornecedor = Fornecedor::all();
        return view('fornecedor.create', compact('fornecedor'));
    }

    
    public function store(FornecedorRequest $request)
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome_fantasia = $request->input('nome_fantasia');
        $fornecedor->cnpj = $request->input('cnpj');
        $fornecedor->estado = $request->input('estado');
        $fornecedor->save();
        return redirect()->route('fornecedor.index', compact('fornecedor'));
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $fornecedor = Fornecedor::find($id);
        if(isset($fornecedor)){
            return view('fornecedor.edit', compact('fornecedor'));
        }
        return view('fornecedor.index');
    }

    
    public function update(FornecedorRequest $request, $id)
    {
        $fornecedor = Fornecedor::find($id);
        if(isset($fornecedor)){
        $fornecedor->nome_fantasia = $request->input('nome_fantasia');
        $fornecedor->cnpj = $request->input('cnpj');
        $fornecedor->estado = $request->input('estado');
        $fornecedor->save();

        }
        return redirect()->route('fornecedor.index', compact('fornecedor'));
    }

   
    public function destroy($id)
    {
        $fornecedor = Fornecedor::find($id);
        if(isset($fornecedor))
    {
        $fornecedor->delete();
    }
        return redirect()->route('fornecedor.index');
    
    }
}
