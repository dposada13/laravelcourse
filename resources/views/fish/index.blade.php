@extends('layouts.app')
@section('title', 'Fish - Fish')
@section('content')
<div class="text-center">
  @foreach ($viewData["fish"] as $fish)
  FISH
  <br>
  <P>Id Fish: {{ $fish ["id"] }}</p>
  <P @if($fish ["species"] <> "Sapo Perro")
    style="font-weight: bold;"
    @endif>
    Name: {{ $fish ["name"] }}</p>

  <P>Species: {{ $fish ["species"] }}</p>
  <P @if($fish ["species"]=="Sapo Perro" )
    style="color: blue;"
    @endif>Weight: {{ $fish ["weight"] }}</p>
  <br>
</div>
@endforeach
@endsection