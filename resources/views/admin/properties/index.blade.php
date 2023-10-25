@extends('layouts.admin')
@section('content')
    <!--Table-->
    <div class="container my-5">
        <div class="">
            <div class="text-center my-2">
                <a class="btn btn-success" href="{{ route('properties.create') }}">Creer une Propriété</a>
            </div>
            <table class="table bg-white">
                <thead class="bg-success">
                    <tr class="text-white">
                        <th scope="col">id</th>
                        <th scope="col">image</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Cathegorie</th>
                        <th scope="col">prix</th>
                        <th scope="col">surface</th>
                        <th scope="col">Pieces</th>
                        <th scope="col">Chambres</th>
                        <th scope="col">Etage</th>
                        <th scope="col">Ville</th>
                        <th scope="col">adresse</th>
                        <th scope="col">options</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($properties as $property)
                        <tr>
                            <th scope="row">{{ $property->id }}</th>
                            <td>
                                <img src="{{ asset('storage/' . $property->image1) }}" width="80px" alt="">
                            </td>
                            <td>{{ $property->name }}</td>
                            <td>{{ $property->category->name }}</td>
                            <td>{{ $property->price }}</td>
                            <td>{{ $property->surface }}</td>
                            <td>{{ $property->piece }}</td>
                            <td>{{ $property->room }}</td>
                            <td>{{ $property->etage }}</td>
                            <td>{{ $property->ville }}</td>
                            <td>{{ $property->adress }}</td>
                            <td>
                                @foreach ($property->options as $option)
                                    {{ $option->name }}; <br>
                                @endforeach
                            </td>
                            <td class="d-flex ">
                                <a class="btn btn-info btn-sm mx-1"
                                    href="{{ route('properties.edit', $property) }}">Modifier</a>

                                <form action="{{ route('properties.destroy', $property) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('etes vous sures?')" class="btn btn-danger btn-sm mx-1"
                                        type="submit">Suprimer</button>

                                </form>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <!--End Table-->
@endsection
