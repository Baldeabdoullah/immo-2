@extends('layouts.head')

@section('head')
    <div class="container">
        <div class="text-center my-2"> Creer une Propriété</div>

        <form method="post" enctype="multipart/form-data" action="{{ route('properties.update', $property) }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" name="name" value="{{ $property->name }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Description</label>
                <textarea name="description" cols="30" class="form-control" rows="10">{{ $property->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prix</label>
                <input type="number" name="price" value="{{ $property->price }}" class="form-control">
            </div>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Surface</label>
                <input type="number" value="{{ $property->surface }}"name="surface" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de Piece</label>
                <input type="number" name="piece" value="{{ $property->piece }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de chambre</label>
                <input type="number" name="room" value="{{ $property->room }}" class="form-control">
            </div>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ville</label>
                <input type="text" value="{{ $property->ville }}" name="ville" class="form-control">

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse</label>
                <input type="text" name="adress" value="{{ $property->adress }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Etage</label>
                <input type="number" value="{{ $property->etage }}" name="etage" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image1</label>
                <input type="file" name="image1" class="form-control">

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image2</label>
                <input type="file" name="image2" class="form-control">

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image3</label>
                <input type="file" name="image3" class="form-control">

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image4</label>
                <input type="file" name="image4" class="form-control">

            </div>

            <div class="mb-3 form-check">
                <label for="">Cathegorie</label>

                <select name="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $property->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}
                        </option>
                    @endforeach
                </select>


            </div>

            <div class="mb-3 form-check">

                @foreach ($options as $option)
                    <div class="my-2">

                        <input type="checkbox" name="options[]" value="{{ $option->id }}" @checked($property->HasOptions($option))
                            class="form-check-input">
                        <label class="form-check-label">{{ $option->name }}</label>

                    </div>
                @endforeach

            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>

    </div>
@endsection
