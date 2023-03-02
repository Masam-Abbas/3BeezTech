@extends('components.dashboard-component')

@section('dashboard')
    <main id="main" class="main">

        {{-- <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title --> --}}

        <section style="width: 100vw" class="section dashboard">

            <hr class="my-5">

            <div class="container my-5">

                <h1 class="text-center text-lg my-5 text-secondary">Users - Table</h1>

                <table class="table table-striped table-bordered table-center ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>

                            <th style="text-align: center">Profile Pic</th>
                            <th>Role</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->password }}</td>


                                <td style="text-align: center">
                                    <img src="{{ asset('uploads/users/' . $data->profile_pic) }}" width="70px"
                                        height="70px" alt="product image" class="rounded-circle">
                                </td>
                                <td>{{ $data->role }}</td>
                                <td style="text-align: center">
                                    <a href="{{ url('admin/user_edit') }}/{{ $data->id }}">
                                        <button class="btn btn-secondary p-2">Update</button>
                                    </a>

                                    <a onclick="return confirm('Are You Sure Want To Delete This?')"
                                        href="{{ url('admin/user_delete') }}/{{ $data->id }}">
                                        <button class="btn btn-danger p-2">Delete</button>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>


                </table>
                <div class="my-4">

                    <a href="/admin/user_add">
                        <button class="btn btn-success form-control my-1">Add User</button>
                    </a>

                </div>
            </div>

            <hr class="my-5">


        </section>



    </main>
@endsection
