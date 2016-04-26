@extends('layouts.master')

@section('title')

    <title>Edit FruitBasket</title>

@endsection

@section('content')


        <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/fruit-basket'>FruitBasket</a></li>
        <li><a href='/fruit-basket/{{$fruitBasket->id}}'>{{$fruitBasket->fruit_basket_name}}</a></li>
        <li class='active'>Edit</li>
        </ol>

        <h1>Edit FruitBasket</h1>

        <hr/>


        <form class="form" role="form" method="POST" action="{{ url('/fruit-basket/'. $fruitBasket->id) }}">
        <input type="hidden" name="_method" value="patch">
        {!! csrf_field() !!}

        <!-- fruit_basket_name Form Input -->
            <div class="form-group{{ $errors->has('fruit_basket_name') ? ' has-error' : '' }}">
                <label class="control-label">FruitBasket Name</label>

                    <input type="text" class="form-control" name="fruit_basket_name" value="{{ $fruitBasket->fruit_basket_name }}">

                    @if ($errors->has('fruit_basket_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('fruit_basket_name') }}</strong>
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