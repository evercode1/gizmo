@extends('layouts.master')

@section('title')

    <title>GrooveHammer</title>

@endsection

@section('content')

        <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/groove-hammer'>GrooveHammer</a></li>
        <li><a href='/groove-hammer/{{ $grooveHammer->id }}'>{{ $grooveHammer->groove_hammer_name }}</a></li>
        </ol>

        <h1>GrooveHammer Details</h1>

        <hr/>

        <div class="panel panel-default">

                <!-- Table -->
                <table class="table table-striped">
                    <tr>

                        <th>Id</th>
                        <th>Name</th>
                        <th>Date Created</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>


                    <tr>
                        <td>{{ $grooveHammer->id }} </td>
                        <td> <a href="/groove-hammer/{{ $grooveHammer->id }}/edit">
                                {{ $grooveHammer->groove_hammer_name }}</a></td>
                        <td>{{ $grooveHammer->created_at }}</td>

                        <td> <a href="/groove-hammer/{{ $grooveHammer->id }}/edit">

                                <button type="button" class="btn btn-default">Edit</button></a></td>

                        <td>

                        <div class="form-group">

                       <form class="form" role="form" method="POST" action="{{ url('/groove-hammer/'. $grooveHammer->id) }}">
                       <input type="hidden" name="_method" value="delete">
                       {!! csrf_field() !!}

                       <input class="btn btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">

                            </form>
                       </div>
                       </td>

                    </tr>

                </table>


        </div>

@endsection
@section('scripts')
    <script>
        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script>
@endsection