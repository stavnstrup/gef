{{-- app/views/adminMain.blade.php --}}

@extends('layouts.oeggef')




@section('body')

<div class="row">
  <div class="small-12 columns">

  <h2>Administrations site</h2>


  <ul>
   <li><a href="/kun/for/you/know/who/live">Tilmeldinger live</a> - siden opdateres hvert minut.</li>
   <li><a href="/kun/for/you/know/who/tilmeldinger">Alle tilmeldinger</a><br/></li>
   <li><a href="/kun/for/you/know/who/odtilmeldinger">Kun OD tilmeldinger</a></li>
  </ul>


  <p>Når I har lukket for tilmelding, kan I importere elevernes tilmeldinger i et Google regneark, ved at følge nedenstående instruktioner.</p>

   <ol>
     <li>Opret et nyt Google regneark for hver af tilmeldingslisterne.</li>
     <li>Gå til formularfeltet og indsæt følgende text
       <ul>
         <li>For alle tilmeldinger skrives: <span class="tt">=IMPORTHTML("http://gef.nw3.dk/kun/for/you/know/who/tilmeldinger","table",1)</span></li>
         <li>For alle OD tilmeldinger skrives: <span class="tt">=IMPORTHTML("http://gef.nw3.dk/kun/for/you/know/who/odtilmeldinger","table",1)</span></li>
       </ul>
     </li>
   </ol>

  </div>
</div>

@stop
