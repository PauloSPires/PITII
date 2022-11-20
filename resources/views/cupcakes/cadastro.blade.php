@extends('layouts.skeletom')
@section('content')
    <section class="p-5">
        <div class="card">
            <header class="card-header">
                <h1 class="h4">Cadastro de produtos</h1>
            </header>
            @include('cupcakes.nav')
            <form action="{{ route('cupcakes.store') }}" method="POST">
                <section class="card-body">
                    @csrf
                    <div class="form-group">
                        <label>Produto</label>
                        <input type="text" name="product" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Preço</label>
                        <input type="number" name="price" class="form-control" required>
                    </div>
                </section>
                <section class="card-footer">
                    <input type="submit" class="btn btn-success btn-sm">
                </section>
            </form>
        </div>
    </section>
@endsection
