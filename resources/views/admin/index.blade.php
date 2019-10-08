@extends('layouts.layout')

@section('content')
<h3>Listagem de Clientes</h3>
<br/>
<a  class="btn btn-primary" href="{{ route('clients.create') }}">Cadastrar</a>
<table class="table table-dark">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">CNPJ/CPF</th>
        <th scope="col">Data Nasc.</th>
        <th scope="col">E-mail</th>
        <th scope="col">Telefone</th>
        <th scope="col">Sexo</th>
        <th scope="col">Ação</th>
    </tr>
    </thead>

    <tbody>
    @foreach($clients as $client)
        <tr>
            <th scope="row">{{ $client->id }}</th>
            <td>{{ $client->name }}</td>
            <td>{{ $client->document_number }}</td>
            <td>{{ $client->date_birth }}</td>
            <td>{{ $client->email }}</td>
            <td>{{ $client->phone}}</td>
            <td>{{ $client->sex}}</td>
            <td>
                <a href="{{ route('clients.edit',['$client' => $client->id]) }}">Editar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection