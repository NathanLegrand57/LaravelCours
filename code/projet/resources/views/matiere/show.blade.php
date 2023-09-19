@extends('layouts.app')

@section('title', $matiere->libelle)

@section('content')
    <h1>Présentation de la matière</h1>
    <h2>Identité</h2>
    <p>{{$matiere->libelle}}</p>

    <h2>Date d'entrée</h2>
    <p>{{$matiere->libelle}}</p>

    <h2>Nombre de professeurs</h2>
    <p>{{$matiere->professeurs->count()}}</p>


</body>
</html>
