
@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

@section('title')

    <title>The FruitBasket Page</title>

@endsection

@section('content')



        <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/fruit-basket'>FruitBasket</a></li>
        </ol>

        <h1>FruitBasket</h1>

        @include('fruit-basket.datatable')

        <div> <a href="/fruit-basket/create">
              <button type="button" class="btn btn-lg btn-primary">
                        Create New
              </button></a>
            </div>



@endsection

@section('scripts')

    @include('fruit-basket.datatable-script')

@endsection