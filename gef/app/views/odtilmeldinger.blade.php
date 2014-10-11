{{-- app/views/tilmeldinger.blade.php --}}

@extends('layouts.oeggef')

@section('body')

<div class="row">
  <div class="small-12 columns">

  <h2>Operation Dagsværk tilmeldinger</h2>

  <p>Antal tilmeldte: {{$pupils->count()}}</p>

  @if ($pupils->count() > 0)
    <table>
      <tr>
        <th>Klasse</th>
        <th>Efternavn</th>
        <th>Fornavn</th>
        <th>Finder selv job</th>
        <th>Telefon</th>
        <th>Email</th>
        <th>Om mit arbejde</th>
      </tr>
      @foreach($pupils as $p)
        <tr>
          <td>{{ $p->pupilid }}</td>
          <td>{{ $p->lastname }}</td>
          <td>{{ $p->firstname }}</td>
@if ($p->workshop_id == 6)
  <td>Ja</td>
@else
  <td>Nej</td>
@endif
          <td>{{ $p->phone }}</td>
          <td>{{ $p->email }}</td>
@if ($p->workshop_id == 6)
  <td>{{$p->workplace}}</td>
@else
  <td/>
@endif
        </tr>
      @endforeach
    </table>
  @endif


   <p><a href="/kun/for/you/know/who/">Tilbage til administrationssiden</a></

  </div>
</div>


@stop
