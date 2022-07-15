@extends('layouts.dashboard')
@section('page-title')
    <div class="pagetitle">
        <h1>Display Users</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Display Users</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div id="success_message"></div>
                <div class="table-responsive ">
                    <table class="col table table-striped table-bordered dataTable" id="users_table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="usertable">
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->firstname}}</td>
                                    <td>{{$user->lastname}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role}}</td>
                                    <td>
                                        <a href="{{route('admin.editUser',$user->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('admin.deleteUser',$user->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

@endsection
{{--    @push('scripts')--}}
{{--            <script>--}}
{{--                $(document).ready(function (){--}}
{{--                    fetch_data();--}}

{{--                    function fetch_data() {--}}
{{--                        $.ajax({--}}
{{--                            url: "{{ route('admin.getUsers') }}",--}}
{{--                            method: 'get',--}}
{{--                            data: "",--}}
{{--                            dataType: 'json',--}}
{{--                            success: function (response) {--}}

{{--                               $.each(response.students, function(key,item){--}}
{{--                                   $('#usertable').append("<tr>\--}}
{{--                                   <td>"+item.id+"</td>\--}}
{{--                                   <td>"+item.role+"</td>\--}}
{{--                                   <td>"+item.firstname+"</td>\--}}
{{--                                   <td>"+item.lastname+"</td>\--}}
{{--                                   <td>"+item.email+"</td>--}}
{{--                                   </tr>");--}}

{{--                               });--}}
{{--                            }--}}
{{--                        });--}}
{{--                    }--}}
{{--                })--}}
{{--            </script>--}}
{{--    @endpush--}}
