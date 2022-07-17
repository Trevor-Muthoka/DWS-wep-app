@extends('layouts.cdashboard')
@section('title','bookWorkers')
@section('content')
    <div class="pagetitle">
        <h1>Domestic workers</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Domestic workers</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Domestic workers</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First name</th>
                                <th scope="col">Last name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th></th>
                                <th></th>


                            </tr>
                            </thead>
                            <tbody>


                                @foreach($employees as $key=>$employee)
                                    <tr>
                                    <th scope="row">{{++$key}}</th>
                                <td>{{ $employee->firstname }}</td>
                                <td>{{ $employee->lastname }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{$employee->name}}</td>
                                    <td>
                                        <a class="btn btn-info" href="">Show</a>
                                    </td>
                                <td>
                                        <a class="btn btn-primary" href="">Book</a>
                                </td>
{{--                                <td>--}}
{{--                                        <form action="" method="POST">--}}

{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                                        </form>--}}
{{--                                    </td>--}}

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
