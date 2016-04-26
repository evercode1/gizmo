@extends('layouts.master')

@section('title')

    <title>Create a GrooveStone</title>

@endsection

@section('content')

        <ol class='breadcrumb'><li><a href='/'>Home</a></li><li><a href='/groove-stone'>GrooveStone</a></li><li class='active'>Create</li></ol>

        <h2>Create a New GrooveStone</h2>

        <hr/>


        <form class="form" role="form" method="POST" action="{{ url('/groove-stone') }}">

        {!! csrf_field() !!}

        <!-- groove_stone_name Form Input -->
            <div class="form-group{{ $errors->has('groove_stone_name') ? ' has-error' : '' }}">
                <label class="control-label">GrooveStone Name</label>

                    <input type="text" class="form-control" name="groove_stone_name" value="{{ old('groove_stone_name') }}">

                    @if ($errors->has('groove_stone_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('groove_stone_name') }}</strong>
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