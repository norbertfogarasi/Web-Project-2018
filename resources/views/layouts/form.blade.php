{{ Form::label('name', 'Név') }}
<br>
{{ Form::text('name', null, array('required' => 'required')) }}
<br>
{{ Form::label('piece', 'Darab') }}
<br>
{{ Form::number('piece', null, array('required' => 'required')) }}
<br>
{{ Form::label('price', 'Órabér (lei)') }}
<br>
{{ Form::text('price', null, array('required' => 'required')) }}
<br>
<br>
{{ Form::submit('Hozzáadás', array('class' => 'btn btn-primary')) }}