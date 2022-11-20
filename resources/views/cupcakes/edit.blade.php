@extends('layouts.skeletom')
@section('content')
    <section class="p-5">
        <div class="card">
            <header class="card-header">
                <h1 class="h4">Cadastro de produtos</h1>
            </header>
            @include('cupcakes.nav')
            <form action="{{ route('cupcakes.update', ['cupcake' => $id]) }}" method="POST">
                <section class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Produto</label>
                        <input type="text" name="product" class="form-control" value="{{ $data->product }}" required>
                    </div>
                    <div class="form-group">
                        <label>Preço</label>
                        <input type="number" name="price" class="form-control" value="{{ $data->price }}" required>
                    </div>
                </section>
                <div class="btn-group m-2" role="group">
                    <a href="{{ route('cupcakes.show', ['cupcake' => $id - 1]) }}" class="btn btn-secondary">◀</a>
                    <a href="{{ route('cupcakes.show', ['cupcake' => $id + 1]) }}" class="btn btn-secondary">▶</a>
                </div>
                <section class="card-footer">
                    <input type="submit" class="btn btn-success btn-sm">
                </section>
            </form>
        </div>
    </section>
@endsection
