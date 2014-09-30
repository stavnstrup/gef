{{-- app/views/workshop.blade.php --}}

@extends('layouts.oeggef')

@section('body')
  <h1>Workshop {{$ws->id}}: {{$ws->name}}</h1>


  <p>{{$ws->description}}</p>


<p><a href="/">Tilbage til forsiden</a></p>

@stop
