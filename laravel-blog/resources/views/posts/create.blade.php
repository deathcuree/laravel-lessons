@extends('layouts.app') 


@section('content')
<form method="POST" action="/post">
    {{-- This directive uses the app file in the layout folder --}}
    {{-- @extends, you can include this common structure in your layout/view --}}
    {{-- section directive - used to define a named section in your blades --}}
    
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title"/>
    </div>

    <div class="form-group">
        <label for="title">Content:</label>
        <input type="text" class="form-control" id="title" name="title"/>
    </div>

    <div class="mt-2">
        <button type="submit" class="btn btn-success">Create Post</button>
    </div>
</form>
@endsection