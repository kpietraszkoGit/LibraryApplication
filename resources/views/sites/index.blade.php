@extends('layouts.app')

@section('title') List of books @endsection

@section('content')

<div class="container">
    <div class="mainTitlePage">List of read books</div>
    <table class="table table-hover">
        <tr>
            <td class="column">ID</td>
            <td class="column">TITLE</td>
            <td class="column">DESCRIPTION</td>
            <td class="column">EDIT</td>
            <td class="column">DELETE</td>
        </tr>

    @foreach($sites as $site)
        <tr>
            <td>{{$site->id}}</td>
            <td><a href="{{route('sites.show', $site)}}">{{$site->title}}</a></td>
            <td>{{$site->description}}</td>
            <td><a class="btn btn-info" href="{{route('sites.edit', $site)}}">Edit</a></td>
            <td><a class="btn btn-danger" href="{{route('sites.delete', $site)}}">Delete</a></td>
        </tr>
    @endforeach
    </table>
    <a class="btn btn-primary" href="{{route('sites.add')}}">Add a book</a>
    <div class="my-4">{{$sites->links()}}</div>
</div>

@endsection

