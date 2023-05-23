@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card h-100 bg-light">
                    <div class="card-header bg-dark text-light">
                        <h4 class="font-weight-bold text-center">Lancer un marche</h4>
                    </div>
                    <div class="card-body custom-bg-color">
                        <form method="POST" action="/addMarche" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="font-weight-bold mb-3">Appel d'offre</h4>
                                    <hr style="height: 4px; background-color: black;">
                                    <div class="form-group">
                                        <label for="numero">Numero</label>
                                        <input type="text" id="numero" name="numero"
                                               class="form-control border-dark custom-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="date_douverture_des_plis">Date d'ouverture des plis</label>
                                        <input type="date" id="date_douverture_des_plis" name="date_douverture_des_plis"
                                               class="form-control border-dark custom-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="estimation_globale">Estimation globale</label>
                                        <input type="number" id="estimation_globale" name="estimation_globale"
                                               class="form-control border-dark custom-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="objet">Objet</label>
                                        <input type="text" id="objet" name="objet"
                                               class="form-control border-dark custom-input">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="estimation_detaillee">Estimation détaillée</label>
                                        <div>
                                            <input type="file" id="estimation_detaillee" name="estimation_detaillee"
                                                   class="form-control-file border-dark custom-file-input">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h4 class="font-weight-bold mb-3">Marche</h4>
                                    <hr style="height: 4px; background-color: black;">
                                    <div class="form-group">
                                        <label for="numero_marche">Numero Marche</label>
                                        <input type="number" id="numero_marche" name="numero_marche"
                                               class="form-control border-dark custom-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="exercice">Exercice</label>
                                        <input type="number" id="exercice" name="exercice"
                                               class="form-control border-dark custom-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="type_de_marche">Type Marche</label>
                                        <select name="type_de_marche" id="type_de_marche"
                                                class="form-control arrow-select border-dark custom-input">
                                            @foreach ($typemarches as $typemarche)
                                                <option value="{{$typemarche->type}}">{{$typemarche->type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="responsable_de_suivi">Responsable de Suivi</label>
                                        <input type="text" id="responsable_de_suivi" name="responsable_de_suivi"
                                               class="form-control border-dark custom-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="montant">Montant</label>
                                        <input type="text" id="montant" name="montant"
                                               class="form-control border-dark custom-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="prix_revisable">Prix Revisable</label>
                                        <select name="prix_revisable" id="prix_revisable"
                                                class="form-control arrow-select border-dark custom-input">
                                            <option value="true">True</option>
                                            <option value="false">False</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block w-50 my-1">Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
