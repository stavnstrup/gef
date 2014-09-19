{{-- app/views/home.blade.php --}}

@extends('layouts.oeggef')

@section('body')
  <p>Welcome to OEG GEF</p>

  <ol>
  @foreach($workshops as $ws)
  <li>{{ $ws->name }} ({{$ws->freeplaces}})</li>
  @endforeach
  </ol>
@stop
