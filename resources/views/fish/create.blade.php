@extends('layouts.app')
@section("title", $viewData["title"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Create Fish</div>
          <div class="card-body">
            <form method="POST" action="{{ route('fish.save') }}">
              @csrf
              <input type="text" class="form-control mb-2" placeholder="Enter name" name="name"/>
              <select class="form-control" name="species" id="species" required placeholder="Enter species"> 
                <option value="">Select Species</option> 
                <option value="Sapo Perro">Sapo Perro</option> 
                <option value="Cabezón">Cabezón</option> 
              </select><br>
              <input type="text" class="form-control mb-2" placeholder="Enter weight" name="weight"/>
              <input type="submit" class="btn btn-primary" value="Send" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
