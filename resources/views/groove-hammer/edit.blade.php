@extends('layouts.master')

@section('title')

    <title>Edit GrooveHammer</title>

@endsection

@section('content')


        <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/groove-hammer'>GrooveHammer</a></li>
        <li><a href='/groove-hammer/{{$grooveHammer->id}}'>{{$grooveHammer->groove_hammer_name}}</a></li>
        <li class='active'>Edit</li>
        </ol>

        <h1>Edit GrooveHammer</h1>

        <hr/>


        <form class="form" role="form" method="POST" action="{{ url('/groove-hammer/'. $grooveHammer->id) }}">
        <input type="hidden" name="_method" value="patch">
        {!! csrf_field() !!}

        <!-- groove_hammer_name Form Input -->
            <div class="form-group{{ $errors->has('groove_hammer_name') ? ' has-error' : '' }}">
                <label class="control-label">GrooveHammer Name</label>

                    <input type="text" class="form-control" name="groove_hammer_name" value="{{ $grooveHammer->groove_hammer_name }}">

                    @if ($errors->has('groove_hammer_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('groove_hammer_name') }}</strong>
                                    </span>
                    @endif

            </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">
                        Edit
                    </button>
            </div>

        </form>


@endsection