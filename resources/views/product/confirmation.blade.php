@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <div class="container mt-4">
        <div class="alert alert-success">
            <h4 class="alert-heading">Product created</h4>
            <p>Product successfully created</p>
            <hr>
            <a href="{{ route('product.create') }}" class="btn btn-primary">Create another product</a>
        </div>
    </div>
@endsection
