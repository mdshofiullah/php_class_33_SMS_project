@extends('master.front.master')

@section('title')
    Login Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-info text-center fw-bold ">
                            Login Form
                        </div>
                        <div class="card-body">
                            <p class="text-center text-danger">{{ Session::get('message') }}</p>
                            <form action="{{ route('new-login') }}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-md-3">Login As</label>
                                    <div class="col-md-9">
                                        <label for=""><input type="radio"  name="check" value="1"/> Teacher</label>
                                        <label for=""><input type="radio"  name="check" value="0"/> Student</label>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" value="Login"/>
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
