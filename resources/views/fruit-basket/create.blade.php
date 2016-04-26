@extends('layouts.master')

@section('title')

    <title>Create a FruitBasket</title>

@endsection

@section('content')

        <ol class='breadcrumb'><li><a href='/'>Home</a></li><li><a href='/fruit-basket'>FruitBasket</a></li><li class='active'>Create</li></ol>

        <h2>Create a New FruitBasket</h2>

        <hr/>


        <form class="form" role="form" method="POST" action="{{ url('/fruit-basket') }}">

        {!! csrf_field() !!}

        <!-- fruit_basket_name Form Input -->
            <div class="form-group{{ $errors->has('fruit_basket_name') ? ' has-error' : '' }}">
                <label class="control-label">FruitBasket Name</label>

                    <input type="text" class="form-control" name="fruit_basket_name" value="{{ old('fruit_basket_name') }}">

                    @if ($errors->has('fruit_basket_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('fruit_basket_name') }}</strong>
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