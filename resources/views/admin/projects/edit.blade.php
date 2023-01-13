@extends('layouts.app')


@section('content')

<section class="py-5">

    <div class="container">
        @include('partials.error')

        <form action="{{route('admin.projects.update',$project->id)}}" method="post" class="card p-3" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="insert a name" aria-describedby="helpId" value="{{old('title',$project)}}">
                <small id="helpId" class="text-muted">insert a project name</small>
            </div>

            <div class="mb-3 d-flex">

                <div class="thumb me-4">
                    <img width="100" src="{{asset('storage/' . $project->cover_img)}}" alt="">
                </div>
                <div>
                    <label for="cover_img" class="form-label">cover_img</label>
                    <input type="file" name="cover_img" id="cover_img" class="form-control" placeholder="insert a image" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Replace your cover image</small>

                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="insert a description" aria-describedby="helpId" value="{{old('description',$project)}}">
                <small id="helpId" class="text-muted">insert a project description</small>
            </div>
            <div class="mb-3">
                <label for="language" class="form-label">language</label>
                <input type="text" name="language" id="language" class="form-control" placeholder="insert a language url" aria-describedby="helpId" value="{{old('language',$project)}}">
                <small id="helpId" class="text-muted">insert a project language url</small>
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</section>


@endsection