@extends('layouts.head')

@section('head')
    <div class="container">
        <div class="text-center my-2"> Creer une Option</div>

        <form method="post" enctype="multipart/form-data" action="{{ route('options.store') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prix</label>
                <input type="number" name="price" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Valider</button>
        </form>

    </div>
@endsection
