@extends('layouts.front')

@section('contenu')
    <div class="container-fluid my-5 ">
        <div class="row">
            <div class="col-md-7 px-3">
                <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner carouse-biens  ">
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/' . $property->image1) }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $property->image2) }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $property->image3) }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $property->image4) }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-md-5 px-5">
                <h5>{{ $property->name }}</h5>
                <h4>{{ $property->price }} FCFA</h4>
                <p>{{ $property->description }}</p>

                <p>Interessé par ce bien ?</p>

                <form>
                    <div class="row">
                        <div class="mb-1 col-6">
                            <label for="exampleInputEmail1" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-1 col-6">
                            <label for="exampleInputPassword1" class="form-label">Prenom</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-1 col-6">
                            <label for="exampleInputEmail1" class="form-label">Telephone</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-1 col-6">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                    </div>

                    <div class="mb-1">
                        <label for="">Je voudrais le bien le bien</label>
                        <select class="form-control" name="property_id" id="">
                            @foreach ($properties as $property)
                                <option value="{{ $property->id }}">{{ $property->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-1">
                        <label for="" class="form-label">Message</label>
                        <textarea name="" class="form-control" id="" cols="30" rows="2"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-1">Valider</button>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Caractéristiques</h4>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Surface
                            <span class="badge bg-primary rounded-pill">{{ $property->surface }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pieces
                            <span class="badge bg-primary rounded-pill">{{ $property->piece }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Chambre
                            <span class="badge bg-primary rounded-pill">{{ $property->room }}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Etage
                            <span class="badge bg-primary rounded-pill">{{ $property->etage }}</span>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h4>Options</h4>
                    <ul class="list-group">
                        @foreach ($property->options as $option)
                            <li class="list-group-item ">{{ $option->name }}</li>
                        @endforeach

                    </ul>
                </div>
            </div>


        </div>

    </div>
@endsection
