<!-- resources/views/livros/create.blade.php -->
@extends('layout')

@section('content')
    <h1>Adicionar Novo Livro</h1>

    <form action="{{ route('livros.store') }}" method="POST">
        @csrf
        <div>
            <label>Título:</label>
            <input type="text" name="titulo" required>
        </div>
        <div>
            <label>Autor:</label>
            <input type="text" name="autor" required>
        </div>
        <div>
            <label>ISBN:</label>
            <input type="text" name="isbn" required>
        </div>
        <div>
            <label>Editora:</label>
            <input type="text" name="editora" required>
        </div>
        <div>
            <label>Ano de Publicação:</label>
            <input type="number" name="ano_publicacao" required>
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection
