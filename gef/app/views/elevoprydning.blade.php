{{-- app/views/elevoprydning.blade.php --}}

@extends('layouts.oeggef')

@section('body')

<div class="row">
  <div class="small-12">

  <h2>Oprydning af elever</h2>
  <table>
    <tr>
      <th>Klasse</th>
      <th>Efternavn</th>
      <th>Fornavn</th>
      <th>Workshop</th>
      <th>Aktion</th>
    </tr>
    @foreach($pupils as $p)
    <tr>
      <td>{{ $p->pupilid }}</td>
      <td>{{ $p->lastname }}</td>
      <td>{{ $p->firstname }}</td>
      <td>{{ $p->workshop_id }}</td>
      <td><a href="/kun/for/you/know/who/slet/{{$p->id}}">Slet tilmelding</a></td>
    </tr>
    @endforeach
  </table>


   <p><a href="/kun/for/you/know/who/">Tilbage til administrationssiden</a></

  </div>
</div>


@stop
