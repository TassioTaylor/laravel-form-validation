@extends('layouts.layout')

@section('content')

@include('form._form_errors')

    <form method="POST" action="{{ route('clients.store') }}">
        {{ csrf_field() }}
        @include('admin._form')
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>

@endsection