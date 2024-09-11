@extends('layouts.app')
 
@section('title', 'Statistics de Peces')
 
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Estadísticas de Peces</div>
        <div class="card-body">
 
          <h4>Number of fish per species</h4>
          <ul class="list-group mb-4">
            @foreach($speciesCount as $species)
              <li class="list-group-item">
                {{ $species->species }}: {{ $species->total }} pez/peces
              </li>
            @endforeach
          </ul>
 
          <h4>Maximum recorded weight</h4>
          <p class="alert alert-info">
          The heaviest fish on record weighs:{{ $maxWeight }} kg.
          </p>
 
        </div>
      </div>
    </div>
  </div>
</div>
@endsection