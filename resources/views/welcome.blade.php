@extends('layouts.skeletom')
@section('content')
    <div class="content-home">
        <img class="image-home" src="{{ asset('images/bg-home.jpg') }}" alt="Cupcakes">
        <a href="{{ route('cupcakes.index') }}" class="btn btn-info btn-xl btn-home"> Cadastrar novo produto</a>
    </div>
@endsection
