@extends('layouts.app')

@section('title') Editing a book @endsection

@section('content')

    <div class="mainTitleSubpage">Edit the book</div>
    <form action="{{route('sites.update', $site)}}" method="post">

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="New title:">
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control" placeholder="New description: "></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Save</button>
            <a class="btn btn-primary mx-3" href="{{route('sites.index')}}">Cancel</a>
        </div>
    </form>

@endsection
