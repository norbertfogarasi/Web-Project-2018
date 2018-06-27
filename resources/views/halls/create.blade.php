@extends('layouts.master')

@section('content')
<div class="container">
    <h3>Terem hozzáadása</h3>
    <hr>
    {!! Form::open(['url' => '/halls', 'class' => 'form-group']) !!}
        @include('layouts.form')
    {!! Form::close() !!}
    @include('layouts.errors')
</div>
@endsection