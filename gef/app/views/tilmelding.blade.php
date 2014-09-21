{{-- app/views/tempforside.blade.php --}}

@extends('layouts.oeggef')

@section('body')
  <h1>Tilmelding til workshop</h1>

{{ Form::open(array('url' => 'tilmelding')) }}


<ul class="errors">
@foreach($errors->all() as $message)
<li>{{ $message }}</li>
@endforeach
</ul

  
<p>
   {{ Form::label('pupilid', 'ElevId') }}
   {{ Form::text('pupilid','' ,array('size' => '5')) }}
   <span> ElevId skrives som f.eks. '1a 14'</span> 
</p>

<p>
   {{ Form::label('firstname', 'Fornavn') }}
   {{ Form::text('firstname') }}
</p>
<p>
   {{ Form::label('lastname', 'Efternavn') }}
   {{ Form::text('lastname') }}
</p>
<p>

   {{ Form::label('wid', 'Workshop') }}
   {{ Form::select('wid', $names) }}
</p>
<p>
   {{ Form::submit('Tilmeld') }}
</p>
{{ Form::close() }}


<p><a href="/">Tilbage til forsiden</a></p>

@stop
