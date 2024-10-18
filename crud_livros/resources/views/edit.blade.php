<!-- resources/views/livros/edit.blade.php -->
@extends('layout')

@section('content')
    <h1>Editar Livro</h1>

    <form action="{{ route('livros.update', $livro) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Título:</label>
            <input type="text" name="titulo" value="{{ $livro->titulo }}" required>
        </div>
        <div>
            <label>Autor:</label>
            <input type="text" name="autor" value="{{ $livro->autor }}" required>
        </div>
        <div>
            <label>ISBN:</label>
            <input type="text" name="isbn" value="{{ $livro->isbn }}" required>
        </div>
        <div>
            <label>Editora:</label>
            <input type="text" name="editora" value="{{ $livro->editora }}" required>
        </div>
        <div>
            <label>Ano de Publicação:</label>
            <input type="number" name="ano_publicacao" value="{{ $livro->ano_publicacao }}" required>
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection
