@extends('master.front.master')

@section('body')
    <section class="py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card" >
                        <div class="list-group list-group-flush">
                            <a href="" class="list-group-item">My All Course</a>
                            <a href="{{ route('student-profile') }}" class="list-group-item">My Profile</a>
                            <a href="{{ route('change-password') }}" class="list-group-item">Change Password</a>
                            <a href="" class="list-group-item">My Payment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header fw-bolder text-center bg-warning">My Profile</div>
                        <div class="card-body">
                            <p class="text-center text-success">{{ Session::get('message') }}</p>
                            <form action="{{ route('update-student-profile', ['id' => $student->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for=""class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <img src="{{ asset($student->image) }}" alt="{{ $student->name }}" width="200" height="200" /><br/>
                                        <input type="file" class="form-control-file" name="image" value="" accept="image/*" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for=""class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{ $student->name }}" name="name" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for=""class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" value="{{ $student->email }}" name="email" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for=""class="col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" value="{{ $student->mobile }}" name="mobile" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for=""class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" value="Update Profile" name="" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
