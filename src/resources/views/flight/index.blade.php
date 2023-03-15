@extends('layouts.app')
@section('title', 'Flights')
@section('subtitle', 'List of flights')
@section('content')
<div class="row">
    @foreach ($viewData["flights"] as $flight)
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
            <div class="card-body text-center">
                @if($flight->getType() == 'International')
                    <p>{{ $flight->getId() }}.  <span style="font-weight: bold;">{{ $flight->getName() }}</span></p>
                @else
                    <p>{{ $flight->getId() }}.  {{ $flight->getName() }}</p>
                @endif
                <p>{{ $flight->getType() }}</p>
                @if($flight->getType() == 'National')
                    <p style="color:blue;">{{ $flight->getPrice() }}</p>
                @else
                    <p>{{ $flight->getPrice() }}</p>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
