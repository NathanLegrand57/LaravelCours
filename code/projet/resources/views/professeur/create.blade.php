@extends('layouts.app')

@section('content')
  <h2>Création</h2>
  <form action="{{ route('professeur.store') }}" method="post">

    @csrf

    <div>
      <label for="nom">Nom</label>
      <input type="text" name="nom" id="nom" required value="{{ old('nom') }}" maxlength="75">
    </div>

    <div>
      <label for="prenom">Prénom</label>
      <input type="text" name="prenom" id="prenom" required value="{{ old('prenom') }}" maxlength="75">
    </div>

    <div>
      <label for="date_entree">Date d'entrée</label>
      <input type="date" name="date_entree" id="date_entree" required value="{{ old('date_entree') }}">
    </div>

    <div>
      <label for="matiere">Matière</label>
      <select name="matiere_id" id="matiere_id">
        @foreach ($matieres as $matiere)
          <option value="{{ $matiere->id }}">{{ $matiere->libelle }}</option>
        @endforeach
      </select>
    </div>

    <div>
      <input type="submit" value="Valider" class="btn btn-success">
    </div>

  </form>
@endsection
