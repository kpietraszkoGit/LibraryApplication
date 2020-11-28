@extends('layouts.app')

@section('title') {{$site->title}} - Book @endsection

@section('content')

<div class="mainTitleSubpage">Show the book</div>
<div class="container">
    <div class="row">
        <div> 
            <h1>{{$site->title}}</h1>
            <div class="description">{{$site->description}}</div>
        </div>
    </div>
    <div class="row buttons">
        <a class="btn btn-primary" href="{{route('sites.add')}}">Add a book</a>
        <a class="btn btn-primary mx-3" href="{{route('sites.index')}}">List of books</a>
    </div>
</div>

@endsection
