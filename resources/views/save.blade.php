@extends('layouts.app')

@section('title') Added the book @endsection

@section('content')

<div class="container">
    <div class="mainTitleSubpage">Added the book</div>
    <div class="row">
        <div class="alert alert-info col-12 text-center deleteRow" role="alert">
            The book has been added!
        </div>
    </div>
    <div class="row">
        <a class="btn btn-primary" href="{{route('sites.add')}}">Add a book</a>
        <a class="btn btn-primary mx-3" href="{{route('sites.index')}}">List of books</a>
    </div>
</div>

@endsection
