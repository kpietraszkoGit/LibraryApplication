@extends('layouts.app')

<!--@section('title', 'Add a book') tak lub tak jest dobrze-->
@section('title') Add a book @endsection

@section('content')

    <div class="mainTitleSubpage">Add a book</div>
    <form action="{{route('sites.save')}}" method="post"> <!--można też tak zrobić /save -->
    <!--walidacja formularza, ogólnie walidacja znajduje się w pliku PagesRequest.php-->
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Title: ">
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control" placeholder="Description: "></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Save</button>
            <a class="btn btn-primary mx-3" href="{{route('sites.index')}}">Cancel</a>
        </div>
    </form>

@endsection