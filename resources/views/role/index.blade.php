@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Role</h1>

            @if (Auth::user()->role->name == 'Admin')
            <a href="{{ route('role.create') }}" class="btn btn-primary mb-2">Create New</a>
            @endif

            <div class="card mb-4">
                <div class="card-body">
                    <table id="dataTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>

                                @if (Auth::user()->role->name == 'Admin')
                                <th>Action</th>
                                @endif

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $role->name }}</td>
                                    @if (Auth::user()->role->name == 'Admin')
                                    <td>
                                        <form action="{{ route('role.destroy', $role->id) }}" method="POST" class="d-inline">
                                            <a href="{{ route('role.edit', $role->id) }}" class="btn btn-warning">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
