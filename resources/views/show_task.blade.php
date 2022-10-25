@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ul
                            style="display: flex; list-style: none; text-decoration: none; justify-content:center; font-size: 25px">
                            <li class="m-2">
                                <h3>{{ $task->heading }}</h3>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body row justify-content-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="card m-2" style="width: 40rem;">
                            <div class="card-body">
                                <h3>Status: <h6 class="card-subtitle mb-2 text-muted">{{ $task->status }}</h6>
                                </h3>
                                <h3>Deadline: <h6 class="card-subtitle mb-2 text-muted">{{ $task->deadline }}</h6>
                                </h3>
                                <h4>Description:</h4>
                                <p>{{ $task->description }}</p>
                                <button type="button" class="btn btn-primary"><a style="text-decoration: none; color:beige"
                                        href="#" class="card-link">Update</a></button>
                                <button type="button" class="btn btn-danger"><a style="text-decoration: none; color:beige"
                                        href="{{ Route('task.delete', ['id' => $task->id]) }}"
                                        class="card-link">delete</a></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
