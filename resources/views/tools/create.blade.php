@extends('layouts.master')

@section('content')
<div class="container">
    <h3>Eszköz hozzáadása</h3>
    <hr>
    {!! Form::open(['url' => '/tools', 'class' => 'form-group']) !!}
        @include('layouts.form')
    {!! Form::close() !!}
    @include('layouts.errors')
</div>
@endsection