@extends('layouts.layout')

@section('content')

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('clients.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="document_number">CNPJ/CGC</label>
            <input type="text" class="form-control" id="document_number" name="document_number">
        </div>
        <div class="form-group">
            <label for="data_birth">Data Nasc.</label>
            <input type="date" class="form-control" id="data_birth" name="data_birth">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="">Telefone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone">
        </div>

        <div class="form-group">

                <label for="marital_status" >Estado Civil</label>
                <select class="form-control" id="marital_status" name="marital_status" >
                    <option value="">Escolher...</option>
                    <option value="1">Solteiro</option>
                    <option value="2">Casado</option>
                    <option value="3">Divorciado</option>
                </select>

        </div>

        <div class="custom-radio">
            <label for="">
                <input type="radio" name="sex" value="m">Masculino
            </label>
        </div>

        <div class="custom-radio">
            <label for="">
                <input type="radio" name="sex" value="f">Feminino
            </label>
        </div>

        <div class="form-group">
            <label for="physical_disability">Deficiência Física</label>
            <input class="form-control" id="physical_disability">
        </div>

        <div class="custom-checkbox">
            <label>
                <input type="checkbox" id="defaulter">Inadimplente?
            </label>
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>

@endsection