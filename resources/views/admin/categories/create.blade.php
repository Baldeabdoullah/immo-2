@extends('layouts.head')

@section('head')
    <div class="container">
        <div class="text-center my-2"> Creer une Propriété</div>

        <form method="post" enctype="multipart/form-data" action="{{ route('categories.store') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image</label>
                <input type="file" name="image" class="form-control">

            </div>

            <button type="submit" class="btn btn-primary">Valider</button>
        </form>

    </div>
@endsection
