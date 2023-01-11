@extends('layouts.app')

@section('content')

<h1 class="text-center text-uppercase">project view</h1>
<div class="container py-5">
    @include('partials.message')
    @forelse($projects as $project)
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title </th>
                    <th scope="col">description </th>
                    <th scope="col">actions </th>

                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">{{$project->id}}</td>
                    <td>{{$project->title}}</td>
                    <td>{{$project->description}}</td>
                    <td class="d-flex justify-content-around">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.projects.edit',$project->id)}}"><i class="fa-solid fa-pencil"></i></a>
                        <a class="btn btn-primary btn-sm" href="{{route('admin.projects.show',$project->id)}}"><i class="fa-solid fa-eye"></i></a>
                        <form action="{{route('admin.projects.destroy',$project->id)}}" method="post">
                            @csrf
                            @method('DELETE')


                            <!-- Modal trigger button -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalId">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                            <!-- Modal Body -->
                            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                            <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId">Delete form</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Do you want to delete this project permanently?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Confirm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

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

    <!-- Create button -->
    <a href="{{route('admin.projects.create')}}" class="btn btn-primary "><i class="fa-solid fa-plus"></i></a>
</div>
</section>


@endsection