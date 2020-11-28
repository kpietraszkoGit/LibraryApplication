@extends('layouts.app')

@section('title') Updated the book @endsection

@section('content')

<div class="container">
    <div class="mainTitleSubpage">Updated the book</div>
    <div class="row">
        <div class="alert alert-info col-12 text-center deleteRow" role="alert">
            Editing was successful. The new title for the book is "{{$site-> title}}", with the description: "{{$site-> description}}".
        </div>
    </div>
    <div class="row">
        <a class="btn btn-primary" href="{{route('sites.add')}}">Add a book</a>
        <a class="btn btn-primary mx-3" href="{{route('sites.index')}}">List of books</a>
    </div>
</div>

@endsection
