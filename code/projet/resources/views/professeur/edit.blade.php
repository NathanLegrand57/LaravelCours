@extends('layouts.app')

@section('content')
  <h2>Mise à jour</h2>
  <form action="{{ route('professeur.update', ['professeur' => $professeur->id]) }}" method="post">

    @csrf
    @method('put')

    <div>
      <label for="nom">Nom</label>
      <input type="text" name="nom" id="nom" required maxlength="75" value="{{ old('nom', $professeur->nom) }}">
    </div>
    @error('nom')
      <p class="text-danger">{{ $message }}</p>
    @enderror

    <div>
      <label for="prenom">Prénom</label>
      <input type="text" name="prenom" id="prenom" required maxlength="75" value="{{ old('prenom', $professeur->prenom) }}">
    </div>
    @error('prenom')
      <p class="text-danger">{{ $message }}</p>
    @enderror

    <div>
      <label for="date_entree">Date d'entrée</label>
      <input type="date" name="date_entree" id="date_entree" required value="{{ old('date_entree', $professeur->date_entree) }}">
    </div>
    @error('date_entree')
      <p class="text-danger">{{ $message }}</p>
    @enderror

    <div>
      <label for="matiere">Matière</label>
      <select name="matiere_id" id="matiere_id">
        @foreach ($matieres as $matiere)
          <option value="{{ $matiere->id }}" {{ $professeur->matiere_id == $matiere->id ? 'selected' : '' }}>
            {{ $matiere->libelle }}
          </option>
        @endforeach
      </select>
      @error('matiere')
        <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <input type="submit" value="Valider" class="btn btn-success">
    </div>

  </form>
@endsection
