@extends('app')

@section('conteudo')

    <h1>Lista de mensagens</h1>

    <hr />

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Categoria</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Mensagem</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contatos as $row)
            <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->categoria->nome }}</td>
                <td>{{ $row->nome }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->mensagem }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection