{{-- app/views/tempforside.blade.php --}}

@extends('layouts.oeggef')

@section('body')
  <h1>Midlertidig forside</h1>


<ul>
  <li><a href="{{url('alle')}}">Vis alle workshops (forside)</a></li>
  <li><a href="{{url('tilmeldinger')}}">Vis alle tilmeldinger</a></li>
  <li><a href="{{url('tilmeldinger2')}}">Vis alle tilmeldinger2 (for vibeke)</a></li>
  <li><a href="{{url('tilmelding')}}">Tilmeld en workshop</a></li>
  <li>Editer en elev ?</li>
</ul>



@stop
