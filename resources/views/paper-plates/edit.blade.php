@extends('layouts.master')

@section('title')

    <title>Edit PaperPlates</title>

@endsection

@section('content')


        <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/paper-plates'>PaperPlates</a></li>
        <li><a href='/paper-plates/{{$paperPlates->id}}'>{{$paperPlates->paper_plates_name}}</a></li>
        <li class='active'>Edit</li>
        </ol>

        <h1>Edit PaperPlates</h1>

        <hr/>


        <form class="form" role="form" method="POST" action="{{ url('/paper-plates/'. $paperPlates->id) }}">
        <input type="hidden" name="_method" value="patch">
        {!! csrf_field() !!}

        <!-- paper_plates_name Form Input -->
            <div class="form-group{{ $errors->has('paper_plates_name') ? ' has-error' : '' }}">
                <label class="control-label">PaperPlates Name</label>

                    <input type="text" class="form-control" name="paper_plates_name" value="{{ $paperPlates->paper_plates_name }}">

                    @if ($errors->has('paper_plates_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('paper_plates_name') }}</strong>
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