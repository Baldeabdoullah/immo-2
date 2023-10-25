@extends('layouts.front')

@section('contenu')
    <section>

        <div class="container my-4">
            <div class="">
                <h3>Nos projets</h3>

            </div>

            <div class="row my-2">

                @foreach ($properties as $property)
                    <div class="col-sm-6 col-md-4">
                        <img src="{{ asset('storage/' . $property->image1) }}" class="img-fluid" alt="">
                        <div class=" my-2">
                            <h5>{{ $property->price }} FCFA</h5>
                            <p>{{ $property->adress }}</p>
                            <h5>{{ $property->ville }}</h5>
                            <div class="d-flex justify-content-start ">
                                <div class="mx-1">
                                    <i class="fa-solid fa-bed"></i> {{ $property->room }}
                                </div>

                                <div>
                                    <i class="fa-solid fa-house-user"></i>
                                    {{ $property->piece }} pieces
                                </div>

                            </div>
                            <a href="{{ route('bien', $property->id) }}" class="btn btn-danger rounded-pill my-2">Voir
                                plus</a>
                        </div>

                    </div>
                @endforeach

            </div>


        </div>

    </section>
@endsection
