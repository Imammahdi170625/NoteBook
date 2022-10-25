@extends('home')

@section('tasks')
    @foreach ($tasks as $task)
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $task->heading }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $task->status }}</h6>
                <p class="card-text">{{ $task->deadline }}</p>

                <button type="button" class="btn btn-success"><a style="text-decoration: none; color:beige"
                        href="{{ Route('task.show', ['id' => $task->id]) }}" class="card-link">Details</a></button>
                <button type="button" class="btn btn-primary"><a style="text-decoration: none; color:beige" href="#"
                        class="card-link">Update</a></button>
                <button type="button" class="btn btn-danger"><a style="text-decoration: none; color:beige"
                        href="{{ Route('task.delete', ['id' => $task->id]) }}" class="card-link">delete</a></button>
            </div>
        </div>
    @endforeach
@endsection
