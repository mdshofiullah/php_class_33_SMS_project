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
                        <div class="card-header fw-bolder text-center bg-warning">Change Password</div>
                        <div class="card-body">
                            <p class="text-center text-success">{{ Session::get('message') }}</p>
                            <form action="{{ route('update-student-password', ['id' => $id]) }}" method="post" >
                                @csrf

                                <div class="row mb-3">
                                    <label for=""class="col-md-3">Previous Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="prev_password" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for=""class="col-md-3">New Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control"  name="password" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for=""class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" value="Update Password" name="" />
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
