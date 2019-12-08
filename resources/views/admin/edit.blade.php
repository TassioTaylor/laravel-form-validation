@extends('layouts.layout')

@section('content')

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('clients.update',['client' => $client->id]) }}">
        {{method_field('PUT')}}
        @include('admin._form')
        <button type="submit" class="btn btn-default">Salvar</button>
    </form>

@endsection