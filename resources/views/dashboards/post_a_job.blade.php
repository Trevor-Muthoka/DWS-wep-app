@extends('layouts.cdashboard')

@section('content')

    <div class="pagetitle">
    <h1>POST A JOB</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('clientDash')}}">Home</a></li>
            <li class="breadcrumb-item active">Post a job</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->
    <section class="section">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">POST A JOB</h5>
                                @if(session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('status') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <!-- Multi Columns Form -->
                                <form class="row g-3" name="job" id="job" method="post" action="{{ url('jobpost')}}">
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="jobname" class="form-label">Job Name</label>
                                        {{-- @error('jobname') is-invalid @enderror  --}}
                                        <input type="text" class="form-control" id="jobname" name="jobname" placeholder="e.g Cleaning clothes">
                                        {{-- @error('jobname')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror --}}
                                    </div>
                                    <div class="col-md-12">
                                        <label for="jobdescription" class="form-label">Job Description</label>
                                        {{-- @error('jobdescription') is-invalid @enderror  --}}
                                        <textarea class="form-control" placeholder="e.g washing two buckets of clothes" id="jobdescription" name="jobdescription" style="height: 100px;"></textarea>
                                        {{-- @error('jobdescription')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="payment" class="form-label">Expected pay</label>
                                        {{-- @error('payment') is-invalid @enderror --}}
                                        <input type="number" class="form-control" id="payment" name="payment" placeholder="e.g 500">
                                        <p style="color:#e03e2d">NB: Negotiable</p>
                                        {{-- @error('payment')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="location" class="form-label">Location</label>
                                        {{-- @error('location') is-invalid @enderror --}}
                                        <input type="text" class=" form-control" id="location" name="location" placeholder="e.g Muimara Estate">
                                        {{-- @error('location')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror --}}
                                    </div>
{{--                                    <div class="col-md-6">--}}
{{--                                        <label for="status" class="form-label">Status of Job</label>--}}
{{--                                        <select id="status" name="status" class="@error('status') is-invalid @enderror form-select">--}}
{{--                                            <option selected>Pending</option>--}}
{{--                                            <option>Ongoing</option>--}}
{{--                                            <option>Complete</option>--}}
{{--                                        </select>--}}
{{--                                        @error('status')--}}
{{--                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <label for="inputPassword5" class="form-label">Location</label>--}}
{{--                                        <input type="password" class="form-control" id="inputPassword5">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <label for="inputAddress5" class="form-label">Address</label>--}}
{{--                                        <input type="text" class="form-control" id="inputAddres5s" placeholder="1234 Main St">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <label for="inputAddress2" class="form-label">Address 2</label>--}}
{{--                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <label for="inputCity" class="form-label">City</label>--}}
{{--                                        <input type="text" class="form-control" id="inputCity">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-4">--}}
{{--                                        <label for="inputState" class="form-label">State</label>--}}
{{--                                        <select id="inputState" class="form-select">--}}
{{--                                            <option selected>Choose...</option>--}}
{{--                                            <option>...</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-2">--}}
{{--                                        <label for="inputZip" class="form-label">Zip</label>--}}
{{--                                        <input type="text" class="form-control" id="inputZip">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <div class="form-check">--}}
{{--                                            <input class="form-check-input" type="checkbox" id="gridCheck">--}}
{{--                                            <label class="form-check-label" for="gridCheck">--}}
{{--                                                Check me out--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="text-center">
                                        <button  type="submit" class="btn btn-primary" >Submit</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </form><!-- End Multi Columns Form -->

                            </div>
                        </div>

                    </div>

    </section>

@push('scriptsdash')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
    $(document).ready(function (){
    
        $('#job').validate({
            rules: {
                jobname: {
                    required: true,
                },
                jobdescription: {
                    required: true,
                },
                payment: {
                    required: true,
                    numeric: true,
                },
                // status: {
                //     required: true,
                // },
                location: {
                    required: true,
                },
            },
            messages: {
                jobname: {
                    required: "Please enter the job name",
                },
                jobdescription: {
                    required: "Please enter the job description",
                },
                payment: {
                    required: "Please enter a valid number",
                    numeric: "The input must be a number",
                },
                // status: {
                //     required: "Please choose a status",
                // },
                location: {
                    required: "Please enter the location",
                },
            },
        });
    });

</script>

@endpush
@endsection
