<!-- resources/views/livros/index.blade.php -->
@extends('layout')

@section('content')
    <h1>Livros</h1>
    <a href="{{ route('livros.create') }}">Adicionar Novo Livro</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>ISBN</th>
                <th>Editora</th>
                <th>Ano</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($livros as $livro)
                <tr>
                    <td>{{ $livro->id }}</td>
                    <td>{{ $livro->titulo }}</td>
                    <td>{{ $livro->autor }}</td>
                    <td>{{ $livro->isbn }}</td>
                    <td>{{ $livro->editora }}</td>
                    <td>{{ $livro->ano_publicacao }}</td>
                    <td>
                        <a href="{{ route('livros.edit', $livro) }}">Editar</a>
                        <form action="{{ route('livros.destroy', $livro) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
