{{-- app/views/tilmeldinger.blade.php --}}

@extends('layouts.oeggef')

@section('body')

<div class="row">
  <div class="small-12">

  <h2>GEF tilmeldinger</h2>

  <p>Antal tilmeldte: {{$pupils->count()}}</p>

  @if ($pupils->count() > 0)
    <table>
      <tr>
        <th>Klasse</th>
        <th>Efternavn</th>
        <th>Fornavn</th>
        <th>Workshop</th>
      </tr>
      @foreach($pupils as $p)
        <tr>
          <td>{{ $p->pupilid }}</td>
          <td>{{ $p->lastname }}</td>
          <td>{{ $p->firstname }}</td>
          <td>{{ $p->workshop_id }}</td>
        </tr>
      @endforeach
    </table>
  @endif

   <p><a href="/kun/for/you/know/who/">Tilbage til administrationssiden</a></


  </div>
</div>


@stop
