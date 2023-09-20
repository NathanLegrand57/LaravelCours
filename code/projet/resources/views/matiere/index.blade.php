@extends('layouts.app')

@section('content')
  <a href="{{ route('matiere.create') }}" class="btn btn-primary">Ajouter</a>
  <ul>
    @forelse ($matieres as $matiere)
      <li>
        <div class="mb-2">
          {{ $matiere->libelle }} [{{ $matiere->niveau }}]
          @auth
            <a href="{{ route('matiere.edit', ['matiere' => $matiere->id]) }}" class="btn btn-sm btn-warning">Modifier</a>
          @endauth
        </div>
      </li>
    @empty
      <li>
        Aucune matière connue
      </li>
    @endforelse
  </ul>
@endsection
