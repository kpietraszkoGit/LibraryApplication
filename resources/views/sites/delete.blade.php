@extends('layouts.app')

@section('title') Removing books @endsection

@section('content')

<div class="mainTitleSubpage">Deletion of the book</div>
<div class="container">
    <div class="row">
        <div class="alert alert-info col-12 text-center deleteRow" role="alert">
            Book title: "{{$site-> title}}" has been removed!
        </div>
    </div>
    <div class="row">
        <a class="btn btn-primary" href="{{route('sites.add')}}">Add a book</a>
        <a class="btn btn-primary mx-3" href="{{route('sites.index')}}">List of books</a>
    </div>
</div>

@endsection
