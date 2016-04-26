@extends('layouts.master')

@section('title')

    <title>Create a GrooveHammer</title>

@endsection

@section('content')

        <ol class='breadcrumb'><li><a href='/'>Home</a></li><li><a href='/groove-hammer'>GrooveHammer</a></li><li class='active'>Create</li></ol>

        <h2>Create a New GrooveHammer</h2>

        <hr/>


        <form class="form" role="form" method="POST" action="{{ url('/groove-hammer') }}">

        {!! csrf_field() !!}

        <!-- groove_hammer_name Form Input -->
            <div class="form-group{{ $errors->has('groove_hammer_name') ? ' has-error' : '' }}">
                <label class="control-label">GrooveHammer Name</label>

                    <input type="text" class="form-control" name="groove_hammer_name" value="{{ old('groove_hammer_name') }}">

                    @if ($errors->has('groove_hammer_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('groove_hammer_name') }}</strong>
                                    </span>
                    @endif

            </div>


            <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">
                        Create
                    </button>
            </div>

        </form>

@endsection