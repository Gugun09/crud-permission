@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item bg-secondary text-white d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Setting</div>
                            </div>
                            <a href="" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></a>
                        </li>
                    </ol>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $users)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $users->name }}</td>
                                        <td>{{ $users->email }}</td>
                                        <td>{{ print_r($role[0], 1) }}</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm"><i class="fas fa-pencil"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
