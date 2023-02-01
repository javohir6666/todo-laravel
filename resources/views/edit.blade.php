@extends('base')
@section('title')
    Edit Todo
@endsection
@section('content')
    <form action="../update/{{ $Todo->id }}" class="mt-4 p-4">
        <div class="form-group m-3">
            <label for="name">Todo Name</label>
            <input type="text" class="form-control" name="name" value="{{ $Todo->name }}">
        </div>
        <div class="form-group m-3">
            <label for="description">Todo Description</label>
            <textarea class="form-control" name="description" rows="3">{{ $Todo->description }}</textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Update">
        </div>
    </form>
@endsection
