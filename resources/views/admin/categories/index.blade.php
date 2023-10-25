@extends('layouts.admin')
@section('content')
    <!--Table-->
    <div class="container my-5">
        <div class="">
            <div class="text-center my-2">
                <a class="btn btn-success" href="{{ route('categories.create') }}">Creer une Cathegorie</a>
            </div>
            <table class="table bg-white">
                <thead class="bg-success">
                    <tr class="text-white">
                        <th scope="col">id</th>
                        <th scope="col">image</th>
                        <th scope="col">Nom</th>

                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>

                            <td>
                                <img src="{{ asset('storage/' . $category->image) }}" width="80px" alt="">
                            </td>
                            <td>{{ $category->name }}</td>


                            <td class="d-flex ">
                                <a class="btn btn-info btn-sm mx-1"
                                    href="{{ route('categories.edit', $category) }}">Modifier</a>

                                <form action="{{ route('categories.destroy', $category) }}" method="post">
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
