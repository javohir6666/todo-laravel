@extends('base')
@section('title')
    My Todo App
@endsection
@section('content')

<section class="info-tiles mt-3">
    <div class="tile is-ancestor has-text-centered">
        <div class="tile is-parent">
            <article class="tile is-child box" style="color: #fff; background-color: #4A586E; ">
                <p class="title" style="color: #fff;">{{$Todo->count()}}</p>
                <p class="subtitle" style="color: #fff;">Notes</p>
            </article>
        </div>
        <div class="tile is-parent">
            <article class="tile is-child box" style="background-color: #CEFF9D;">
                <p class="title">0</p>
                <p class="subtitle">...</p>
            </article>
        </div>
        <div class="tile is-parent">
            <article class="tile is-child box" style="background-color: #FF9CA1;">
                <p class="title">0</p>
                <p class="subtitle">...</p>
            </article>
        </div>
    </div>
</section>
<div class="row mt-3">
    <div class="col-12 align-self-center">

            @if ($Todo->count() > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Desctiption</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Todo as $todo)
                            <tr>
                                <td scope="row">{{ $todo->id }}</td>
                                <td>{{ $todo->name }}</td>
                                <td>{{ $todo->description }}</td>
                                <td class="text-muted">{{ $todo->created_at }}</td>
                                <td class="text-muted">{{ $todo->updated_at }}</td>
                                <td><a href="edit/{{ $todo->id }}" class="btn btn-primary">Edit</a>&nbsp;<a
                                        href="delete/{{ $todo->id }}" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-danger text-center">
                    <strong>Sorry!</strong> No thins to display :(
                </div>
            @endif


        </div>
    </div>
@endsection
