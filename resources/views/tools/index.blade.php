@extends('layouts.master')
@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Eszköz <b>Management</b></h2>
                    </div>
                    <div class="col-sm-7">
                        @if(Auth::check() && Auth::user()->isAdmin())
                            <a href="/tools/create" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Eszköz hozzáadása</span></a>
                        @endif		
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Név</th>						
                        <th>Órabér</th>
                        <th>Darab</th>
                        <th>Esemény</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach($tools as $tool)
                        <tr>
                                <td>{{ $i++ }}</td>
                                <td id="id"><a href="/tools/{{$tool->id}}">{{ $tool->name }}</a></td>
                                <td>{{ $tool->price }} lei</td>
                                <td>{{ $tool->piece }}</td>                         
                                <td>
                                    @if (Auth::guest())
                                        N/A
                                    @elseif(Auth::check() && Auth::user()->isAdmin())
                                        <a href="/tools/{{ $tool->id }}/edit" id="edit" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                        <a href="" data-id="{{ $tool->id }}" id="delete" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                                    @else
                                        <a class="btn btn-outline-secondary" href="/tools/booking/{{ $tool->id }}" role="button">Foglalás</a>
                                    @endif
                                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>     
    </div>

    <!-- Ajax -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.delete').click(function(){
            console.log('begin');
            var tr = $(this).closest('tr');
            var id = $(this).data("id");
            console.log('Id: ' + id);

            $.ajax({
                url: "tools/" + id,
                type: "DELETE",
                data: {
                _token: '{{csrf_token()}}',
                },
                success:function(result){
                    tr.fadeOut(1000, function(){
                        $(this).remove();
                    });
                }

            });
            return false;
        });
</script>
@endsection