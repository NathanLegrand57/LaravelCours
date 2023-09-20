@extends('layouts.app')

@section('content')
  <a href="{{ route('professeur.create') }}" class="btn btn-primary">Ajouter</a>
  <ul>
    @forelse ($professeurs as $professeur)
      <li>
        <div>
          {{ $professeur->identite() }}
          @auth
            <a href="{{ route('professeur.edit', ['professeur' => $professeur->id]) }}" class="btn btn-sm btn-warning">Modifier</a>
          @endauth
        </div>
      </li>
    @empty
      <li>
        Aucun professeur connu
      </li>
    @endforelse
  </ul>
@endsection
