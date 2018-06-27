@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

<div class="container">
        <h2>{{$hall->name}} foglalás</h2>
        <hr>
        <p>Órabér: {{$hall->price}} lei</p>
        <div class="form-group">
            <form action="">
                    <strong>Start Date:</strong> <input type="text" id="datepicker-start" class="datepicker from-control">
                    <strong>End Date:</strong> <input type="text" id="datepicker-end" class="datepicker from-control">
            </form>
        </div>
        <a class="btn btn-outline-secondary" href="" role="button">Foglalás</a>
</div>         
<script type="text/javascript">
    $( ".datepicker" ).datepicker();
</script>
</div>

@endsection