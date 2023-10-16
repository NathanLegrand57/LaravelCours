@extends('layouts.app')

@section('content')
  @can('matiere-create')
    <a href="{{ route('matiere.create') }}" class="btn btn-primary">Ajouter</a>
    <a href="locale/en">English</a>
    <a href="locale/fr">Français</a>
  @endcan

  <ul>
    @forelse ($matieres as $matiere)
      <li>
        <div class="mb-2">
          {{ $matiere->libelle }} [{{ $matiere->niveau }}]
          @cannot('matiere-update')
            <a href="{{ route('matiere.edit', ['matiere' => $matiere->id]) }}" class="btn btn-sm btn-warning">Modifier</a>
          @endcannot
        </div>
      </li>
    @empty
      <li>
        Aucune matière connue
      </li>
    @endforelse
  </ul>
@endsection
