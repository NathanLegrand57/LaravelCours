@extends('layouts.app')

@section('title')

@section('content')
<form action="ProfesseurController.php" method="POST">
    @csrf

    <label for="nom">Nom</label>
    <input type="text" name="nom"/>
     <br/>
    <label for="prenom">Prénom</label>
    <input type="text" nom="prenom">
    <br/>
    <label for="date_entree">Date d'entrée</label>
    <input type="text" nom="date_entree">
    <br/>
    <input type="submit">


</form>
