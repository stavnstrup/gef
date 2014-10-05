{{-- app/views/live.blade.php --}}

@extends('layouts.oeggef')


@section('myheader')
  <meta http-equiv="refresh" content="60; url="/kun/for/you/know/who/live">
@stop


@section('body')

<div class="row">
  <div class="small-12 columns">



    <div class="row gstatus">
      <div class="small-6 columns">Alle tilmeldinger:</div>
      <div class="small-6 columns">{{$all}}</div>
      <div class="small-6 columns">OD tilmeldinger:</div><div class="small-6 columns">{{$od}}</div>
    </div>

      <p><a href="/kun/for/you/know/who/">Tilbage til administrationssiden</a></p>


  </div>
</div>

@stop
