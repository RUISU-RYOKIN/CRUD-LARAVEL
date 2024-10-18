<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    }

  
    public function create()
    {
        return view('livros.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'isbn' => 'required|unique:livros',
            'editora' => 'required',
            'ano_publicacao' => 'required|integer',
        ]);

        Livro::create($request->all());

        return redirect()->route('livros.index')
                        ->with('success', 'Livro criado com sucesso!');
    }

   
    public function edit(Livro $livro)
    {
        return view('livro.edit', compact('livro'));
    }

   
    public function update(Request $request, Livro $livro)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'isbn' => 'required|unique:livros,isbn,' . $livro->id,
            'editora' => 'required',
            'ano_publicacao' => 'required|integer',
        ]);

        $livro->update($request->all());

        return redirect()->route('livros.index')
                        ->with('success', 'Livro atualizado com sucesso!');
    }

    
    public function destroy(Livro $livro)
    {
        $livro->delete();

        return redirect()->route('livros.index')
                        ->with('success', 'Livro excluído com sucesso!');
    }
}