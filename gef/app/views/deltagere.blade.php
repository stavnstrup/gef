{{-- app/views/deltagere.blade.php --}}

@extends('layouts.oeggef')

@section('body')

<div class="row">
  <div class="small-12">

  <h2>Workshop {{$deltagere->first()->workshop_id}} deltagere</h2>

    <table>
      <tr>
        <th>Efternavn</th>
        <th>Fornavn</th>
        <th>Klasse</th>
      </tr>
      @foreach($deltagere as $p)
        <tr>
          <td>{{ $p->lastname }}</td>
          <td>{{ $p->firstname }}</td>
          <td>{{ $p->pupilid }}</td>
        </tr>
      @endforeach
    </table>


   <p><a href="/">Tilbage til forsiden</a></


  </div>
</div>


@stop
