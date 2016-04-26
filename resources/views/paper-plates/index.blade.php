
@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

@section('title')

    <title>The PaperPlates Page</title>

@endsection

@section('content')



        <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/paper-plates'>PaperPlates</a></li>
        </ol>

        <h1>PaperPlates</h1>

        @include('paper-plates.datatable')

        <div> <a href="/paper-plates/create">
              <button type="button" class="btn btn-lg btn-primary">
                        Create New
              </button></a>
            </div>



@endsection

@section('scripts')

    @include('paper-plates.datatable-script')

@endsection