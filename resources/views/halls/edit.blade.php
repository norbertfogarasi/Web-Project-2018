@extends('layouts.master')

@section('content')
<div class="container">
    <h3>Adatok módosítása</h3>
    <hr>
    {!! Form::open(['url' => url('halls/'.$hall->id), 'class' => 'form-group']) !!}
        {{csrf_field()}}
        {{ method_field('PATCH') }}
        {{ Form::label('name', 'Név') }}
        <br>
        {{ Form::text('name', $hall->name, array('required' => 'required')) }}
        <br>
        {{ Form::label('piece', 'Darab') }}
        <br>
        {{ Form::number('piece', $hall->piece, array('required' => 'required')) }}
        <br>
        {{ Form::label('price', 'Órabér (lei)') }}
        <br>
        {{ Form::text('price', $hall->price, array('required' => 'required')) }}
        <br>
        <br>
        {{ Form::submit('Módosítás', array('class' => 'btn btn-primary')) }}
        {!! Form::close() !!}
    @include('layouts.errors')
</div>
@endsection