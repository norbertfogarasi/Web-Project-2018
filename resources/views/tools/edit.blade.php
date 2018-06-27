@extends('layouts.master')

@section('content')
<div class="container">
    <h3>Adatok módosítása</h3>
    <hr>
    {!! Form::open(['url' => url('tools/'.$tool->id), 'class' => 'form-group']) !!}
        @csrf
        @method('PATCH')
        {{ Form::label('name', 'Név') }}
        <br>
        {{ Form::text('name', $tool->name, array('required' => 'required')) }}
        <br>
        {{ Form::label('piece', 'Darab') }}
        <br>
        {{ Form::number('piece', $tool->piece, array('required' => 'required')) }}
        <br>
        {{ Form::label('price', 'Órabér (lei)') }}
        <br>
        {{ Form::text('price', $tool->price, array('required' => 'required')) }}
        <br>
        <br>
        {{ Form::submit('Módosítás', array('class' => 'btn btn-primary')) }}
        {!! Form::close() !!}
    @include('layouts.errors')
</div>
@endsection