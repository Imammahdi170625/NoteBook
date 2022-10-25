@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ul
                            style="display: flex; list-style: none; text-decoration: none; justify-content:center; font-size: 25px">
                            <li class="m-2" style="float: right">
                                <button type="button" class="btn btn-primary"><a style="text-decoration: none; color:beige"
                                        href="{{ Route('home') }}" class="card-link">Pending</a></button>
                            </li>
                            <li class="m-2" style="float: right">
                                <button type="button" class="btn btn-primary"><a style="text-decoration: none; color:beige"
                                        href="{{ Route('executed') }}" class="card-link">Executed</a></button>
                            </li>
                            <li class="m-2" style="float: right">
                                <button type="button" class="btn btn-primary"><a style="text-decoration: none; color:beige"
                                        href="{{ Route('expired') }}" class="card-link">Expired</a></button>
                            </li>
                            <li class="m-2" style="float: right">
                                <button type="button" class="btn btn-primary"><a style="text-decoration: none; color:beige"
                                        href="{{ Route('task.create') }}" class="card-link">Create Task</a></button>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body row justify-content-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @yield('tasks')


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
