@extends('layouts/backofficelayout')

@section('content')

<style>
    .uper {
      margin-top: 40px;
    }
</style>
<div class="row">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('assets/imgs/Sans titre (1).png')}}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Liste des Produits</h5>
        <p class="card-text">En cliquant sur le bouton vous avez accés à la liste des produits de la base de donnée</p>
        <a href="{{ url('backoffice') }}" class="btn btn-primary">Voir la liste</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('assets/imgs/Sans titre (2).png')}}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Ajout d'un Produit</h5>
        <p class="card-text">En cliquant sur le bouton vous pouvez ajouter un produit à la liste des produits de la base de donnée</p>
        <a href="{{ url('backoffice/create') }}" class="btn btn-primary">Formulaire d'ajout</a>
        </div>
    </div>
</div>
