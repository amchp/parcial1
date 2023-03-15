@extends('layouts.app')
@section('title', 'Flight Statistics')
@section('subtitle', 'Flight Statistics')
@section('content')
<div class="text-center">
    <h1>National Flight</h1>
    <p>Count: {{ $viewData['nationalFlights']['count'] }}</p>
    <p>Average Price: {{ $viewData['nationalFlights']['averagePrice'] }}</p>
</div>
<div class="text-center">
    <h1>International Flight</h1>
    <p>Count: {{ $viewData['internationalFlights']['count']}}</p>
    <p>Average Price: {{ $viewData['internationalFlights']['averagePrice']}}</p>
</div>
@endsection
