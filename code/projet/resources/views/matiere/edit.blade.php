@extends('layouts.app')

@section('content')
  <h2>Mise à jour</h2>
  <form action="{{ route('matiere.update', ['matiere' => $matiere->id]) }}" method="post">

    @csrf
    @method('put')

    <div>
      <label for="libelle">Libellé</label>
      <input type="text" name="libelle" id="libelle" value="{{ $matiere->libelle }}" required maxlength="75">
    </div>

    <div>
      <label for="libelle">Niveau</label>
      <input type="text" name="niveau" id="niveau" value="{{ $matiere->niveau }}" required maxlength="20">
    </div>

    <div>
      <input type="submit" value="Valider" class="btn btn-success">
    </div>

  </form>
@endsection
