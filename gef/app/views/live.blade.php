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


    <table>
      <tr>
        <th>Nr.</th>
        <th>Titel</th>
        <th>Ledige pladser</th>
      </tr>

      

      @foreach($wsall['workshops'] as $ws)
        <tr>
          <td>{{ $ws->id }}</td>
          <td>{{ $ws->title }}</td>
          <td>
          @if ($ws->freeplaces > 0)
            {{$ws->freeplaces}}
          @else
            Ikke flere pladser
          @endif
          </td>
        </tr>
      @endforeach

    </table>  


    <p><a href="/kun/for/you/know/who/">Tilbage til administrationssiden</a></p>


  </div>
</div>

@stop
