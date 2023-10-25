@extends('layouts.front')
@section('contenu')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex ">
                    <div class="mx-1">
                        <i class="fa-solid fa-phone fa-2x"></i>
                    </div>
                    <div class="mx-1">
                        <h5>Telephone</h5>
                        <p>+221 74757589</p>
                    </div>
                </div>

                <div class="d-flex ">
                    <div class="mx-1">
                        <i class="fa-solid fa-location-dot fa-2x"></i>
                    </div>
                    <div class="mx-1">
                        <h5>Localisation</h5>
                        <p>Dakar avenue 6 rue 4</p>
                    </div>
                </div>

                <div class="d-flex ">
                    <div class="mx-1">
                        <i class="fa-regular fa-clock fa-2x"></i>
                    </div>
                    <div class="mx-1">
                        <h5>Heures d'ouvertures</h5>
                        <p>Lundi/vendredi <br>
                            9h/17h </p>

                    </div>
                </div>

                <div class="d-flex ">
                    <div class="mx-1">
                        <i class="fa-regular fa-envelope fa-2x"></i>
                    </div>
                    <div class="mx-1">
                        <h5>Email</h5>
                        <p>infos@imo.com</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ">
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
                        <label for="" class="form-label">Message</label>
                        <textarea name="" class="form-control" id="" cols="30" rows="2"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-1">Valider</button>
                </form>
            </div>
        </div>
    </div>
@endsection
