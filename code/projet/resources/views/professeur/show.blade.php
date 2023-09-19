@extends('layouts.app')

@section('title', $professeur->libelle)

@section('content')
    <h1>Présentation du professeur</h1>
    <h2>Identité</h2>
    <p>{{$professeur->identite()}}</p>

    <h2>Date d'entrée</h2>
    <p>{{$professeur->date_entree}}</p>

    <h2>Matière enseignée</h2>
    <p>{{$professeur->matiere->libelle}}</p>
