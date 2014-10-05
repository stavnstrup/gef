{{-- app/views/tempforside.blade.php --}}

@extends('layouts.oeggef')

@section('body')

<div class="row">
  <div class="small-12 columns">

  <h2>Tilmelding til workshop {{$ws->id}}</h2>
  <h2 class='subheader'>  {{$ws->title}}</h2>

{{ Form::open(array('url' => 'tilmelding/'.$ws->id)) }}


<div class="row">
@if ($errors->has('pupilid'))
  <div class="large-3 columns end error">
@else
  <div class="large-3 columns end">
@endif
    {{ Form::label('pupilid', 'Klasse') }}
    {{ Form::text('pupilid', '', array('size' => '2', 'placeholder' => '1a')) }}
@if ($errors->has('pupilid'))
    <small class="error">{{ $errors->first('pupilid') }}</small>
@endif
  </div>
</div>

<div class="row">
@if ($errors->has('firstname'))
  <div class="large-6 columns error">
@else
  <div class="large-6 columns">
@endif
    {{ Form::label('firstname', 'Fornavn') }}
    {{ Form::text('firstname', '', array('placeholder' => 'Isak')) }}
@if ($errors->has('firstname'))
    <small class="error">{{ $errors->first('firstname') }}</small>
@endif
  </div>

@if ($errors->has('lastname'))
  <div class="large-6 columns error">
@else
  <div class="large-6 columns">
@endif
    {{ Form::label('lastname', 'Efternavn') }}
    {{ Form::text('lastname', '', array('placeholder' => 'Sponholtz')) }}
@if ($errors->has('lastname'))
    <small class="error">{{ $errors->first('lastname') }}</small>
@endif
  </div>
</div>



<p>
   {{ Form::submit('Tilmeld') }}
</p>
{{ Form::close() }}


<p><a href="/">Tilbage til forsiden</a></p>


</div>
</div>

@stop
