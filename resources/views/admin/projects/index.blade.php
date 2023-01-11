@extends('layouts.app')

@section('content')

<h1 class="text-center text-uppercase">project view</h1>
<div class="container">
    @forelse($projects as $project)
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title </th>
                    <th scope="col">description </th>
                    <th scope="col">language </th>
                    <th scope="col">actions </th>

                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">{{$project->id}}</td>
                    <td>{{$project->title}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->language}}</td>
                    <td class="d-flex flex-column">
                        <a class="btn btn-primary btn-sm" href="#">edit</a>
                        <a class="btn btn-primary btn-sm" href="{{route('admin.projects.show',$project->id)}}">show</a>
                        <form action="#" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    @empty
    <tr>
        Ops! No projects available yet!
    </tr>
    @endforelse
</div>
</section>


@endsection