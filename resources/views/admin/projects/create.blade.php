@extends('layouts.app')


@section('content')

<section class="py-5">

    <div class="container">
        <form action="{{route('admin.projects.store')}}" method="post" class="card p-3">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="insert a name" aria-describedby="helpId">
                <small id="helpId" class="text-muted">insert a project name</small>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="insert a description" aria-describedby="helpId">
                <small id="helpId" class="text-muted">insert a project description</small>
            </div>
            <div class="mb-3">
                <label for="language" class="form-label">language</label>
                <input type="text" name="language" id="language" class="form-control" placeholder="insert a language url" aria-describedby="helpId">
                <small id="helpId" class="text-muted">insert a project language url</small>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</section>


@endsection