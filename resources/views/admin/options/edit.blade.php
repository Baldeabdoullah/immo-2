@extends('layouts.head')

@section('head')
    <div class="container">
        <div class="text-center my-2"> Mofifier une Option</div>

        <form method="post" enctype="multipart/form-data" action="{{ route('options.update', $option) }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" value="{{ $option->name }}" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prix</label>
                <input type="number" value="{{ $option->price }}" name="price" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Valider</button>
        </form>

    </div>
@endsection
