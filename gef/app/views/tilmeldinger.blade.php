{{-- app/views/tilmeldinger.blade.php --}}

@extends('layouts.oeggef')

@section('body')
  <h1>Alle tilmeldinger</h1>


  @if ($pupils->count() > 0)
    <table>
      <tr>
        <th>Elev Id</th>
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
@stop
