@extends('layout')

@section('title', 'Voitures')

@section('content')


<div class="card text-white bg-secondary mb-3">
    <div class="card-header">
        <h4 class="card-title">{{$voiture->marque}} {{$voiture->modele}}</h4>
    </div>
    <div class="card-body">
        <p>{{$voiture->immat}}</p>
        <p>{{$voiture->annee}}</p>
    </div>
</div>


<div class="card text-white bg-secondary mb-3">
    <div class="card-header">Client</div>
    <div class="card-body">
        <p class="mb-0">Nom : {{$voiture->client->nom}}</p>
        <p class="mb-0">Prénom : {{$voiture->client->prenom}}</p>
        <p class="mb-0">Adresse : {{$voiture->client->adresse}}</p>
        <p class="mb-0">Ville : {{$voiture->client->ville}}</p>
        <p class="mb-0">Téléphone : {{$voiture->client->telephone}}</p>
        <p class="mb-0">Email : {{$voiture->client->email}}</p>
    </div>
</div>

<div class="card text-white bg-secondary mb-3">
    <div class="card-header">Mecaniciens</div>
    <div class="card-body">

      <form action="/voitures" method="post">
        {{ csrf_field() }}
        <select id="meca">
          @foreach ($mecaniciens as  $mecanicien)
              <option value="">{{$mecanicien->nom}}</option>
          @endforeach
          </select>
        <button class="btn-default" type="submit" name="button">Valider</button>
      </form>


    </div>
</div>




@endsection
