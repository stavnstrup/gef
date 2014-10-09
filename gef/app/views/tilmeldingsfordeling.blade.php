{{-- app/views/tilmeldingsfordeling.blade.php --}}

@extends('layouts.oeggef')

@section('body')

<div class="row">
  <div class="small-12">

  <h2>Tilmeldingsfordeling</h2>

    <table>
      <tr>
        <th>Klasse</th>
        <th>Tilmeldte</th>
        <th>Mangler</th>
      </tr>

      @foreach($stat as $s)
        <tr>
          <td>{{ $s['class'] }}</td>
          <td>{{ $s['tilmeldte'] }}</td>
          <td>{{ $s['mangler'] }}</td>
        </tr>
      @endforeach
    </table>

   <p><a href="/">Tilbage til forsiden</a></p>

  </div>
</div>


@stop
