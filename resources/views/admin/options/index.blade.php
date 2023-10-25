@extends('layouts.admin')
@section('content')
    <!--Table-->
    <div class="container my-5">
        <div class="">
            <div class="text-center my-2">
                <a class="btn btn-success" href="{{ route('options.create') }}">Creer une Options</a>
            </div>
            <table class="table bg-white">
                <thead class="bg-success">
                    <tr class="text-white">
                        <th scope="col">id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">prix</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($options as $option)
                        <tr>
                            <td>{{ $option->id }}</td>

                            <td>{{ $option->name }}</td>

                            <td>{{ $option->price }}</td>

                            <td class="d-flex ">
                                <a class="btn btn-info btn-sm mx-1" href="{{ route('options.edit', $option) }}">Modifier</a>

                                <form action="{{ route('options.destroy', $option) }}" method="post">
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
