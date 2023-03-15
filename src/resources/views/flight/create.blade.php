@extends('layouts.app')
@section("title", 'Create Flight')
@section("subtitle", 'Create Flight')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
          <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
            @endif
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('flight.save') }}">
                @csrf
                <input type="text" class="form-control mb-2" placeholder="Enter name" name="name" value="{{ old('name') }}" />
                <select name="type" id="type">
                    <option value="">---Select Type---</option>
                    <option value="National">National</option>
                    <option value="International">International</option>
                </select>
                <input type="number" class="form-control mb-2" placeholder="Enter price" name="price" value="{{ old('price') }}" />
                <input type="submit" class="btn btn-primary" value="Send" />
            </form>
            </div>
        </div>
        </div>
    </div>
  </div>
</div>
@endsection
