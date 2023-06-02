@extends('layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="my-4">Role</h1>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple" class="table table-striped">
                    <thead class="table-secondary">
                      <tr>
                        <th>#</th>
                        <th>Action</th>
                        <th>Avatar</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Phone</th>
                        <th>Address</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">1</td>
                        <td>
                          <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </td>
                        <td>Avatar</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Role</td>
                        <td>Phone</td>
                        <td>Address</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</main>
@endsection
