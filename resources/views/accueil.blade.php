@extends('layouts.front')
@section('contenu')
    <div class="container-fluid my-5 p-5  bg-light">

        <div class="row">
            <div class="col-md-6">
                <img src="images/maison (1).jpg" class="img-fluid" alt="">
            </div>

            <div class="col-md-6 ">
                <h3>Qui sommes nous ?</h3>
                <p>IMMO intervient dans les secteurs clés de l’immobilier notamment les bureaux, les maisons
                    individuelles ainsi que le
                    immeubles. Nous participons à la modernisation du secteur immobilier au Sénégal et à
                    l’urbanisation de manière générale. Nous transformons notre environnement avec engagement,
                    détermination et respect</p>

            </div>
        </div>

        <div class="row text-center my-4 p-4 ">

            <div class="col-sm-6 col-md-4 py-4  mx-auto service" style="width: 300px;">
                <i class="fa-solid fa-house fa-4x my-1"></i>
                <h4>Projets immobibliers</h4>
                <p>Un large choix d'immeuble personnalisable present à Dakar, à Mbodiene et à Thiès</p>
            </div>

            <div class="col-sm-6 col-md-4 py-4 mx-auto  service" style="width: 300px;">
                <i class="fa-regular fa-building fa-4x my-1"></i>
                <h4>Architecture</h4>
                <p>Realisation des plans pour votre future Habitation et études techniques</p>
            </div>

            <div class="col-sm-6 col-md-4 py-4  mx-auto  service" style="width: 300px;">
                <i class="fa-regular fa-user fa-4x my-1"></i>
                <h4>Expertise en immobilier</h4>
                <p>Des Agents immobilier expert </p>
            </div>

        </div>
    </div>
    <section>
        <div class="container my-4">
            <div class="d-flex justify-content-between my-2">
                <h3>Nos derniers projets</h3>
                <a href="{{ route('biens') }}" class="btn btn-danger rounded-pill">Voir toutes les proprietes</a>
            </div>
            <div class="row">
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

    <section>
        <div class="container my-5">
            <h2>Nos cathegories</h2>
            <div class="row p-5">
                @foreach ($categories as $category)
                    <div class="col-md-6 col-xl-4">
                        <img src="{{ asset('storage/' . $category->image) }}" class="img-fluid" alt="">
                        <h3 class="text-center my-1 "><a href="#" class="btn btn-success ">{{ $category->name }}</a>
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
