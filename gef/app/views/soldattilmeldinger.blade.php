{{-- app/views/soldattilmeldinger.blade.php --}}

@extends('layouts.oeggef')

@section('body')

<div class="row">
  <div class="small-12 columns">

  <h2>GEF tilmeldinger til forsvaret</h2>

  <p>Antal tilmeldte: {{$pupils->count()}}</p>

  @if ($pupils->count() > 0)
    <table>
      <tr>
        <th>Klasse</th>
        <th>Fornavn</th>
        <th>Efternavn</th>
        <th>Adresse</th>
        <th>Postnr</th>
        <th>By</th>
      </tr>
      @foreach($pupils as $p)
        <tr>
          <td>{{ $p->pupilid }}</td>
          <td>{{ $p->firstname }}</td>
          <td>{{ $p->lastname }}</td>
          <td>{{ $p->road }}</td>
          <td>{{ $p->zip }}</td>
          <td>{{ $p->town }}</td>
        </tr>
      @endforeach
    </table>
  @endif

   <p><a href="/kun/for/you/know/who/">Tilbage til administrationssiden</a></p>

  </div>
</div>


@stop
