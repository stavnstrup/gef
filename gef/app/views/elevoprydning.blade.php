{{-- app/views/elevoprydning.blade.php --}}

@extends('layouts.oeggef')

@section('body')

<div class="row">
  <div class="small-12">

  <h2>Oprydning af elever</h2>




    <table>
      <tr>
        <th>Workshop</th>
        <th>Klasse</th>
        <th>Efternavn</th>
        <th>Fornavn</th>
        <th>XXXX</th>
      </tr>
      @foreach($pupils as $p)
        <tr>
          <td>{{ $p->workshop_id }}</td>
          <td>{{ $p->pupilid }}</td>
          <td>{{ $p->lastname }}</td>
          <td>{{ $p->firstname }}</td>
          <td></td>
        </tr>
      @endforeach
    </table>


   <p><a href="/kun/for/you/know/who/">Tilbage til administrationssiden</a></

  </div>
</div>


@stop
