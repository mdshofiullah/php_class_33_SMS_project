@extends('master.front.master')
@section('title')
    Home Page
@endsection

@section('body')

    <section class="notice-section py-lg-5">
        <div class="container">
            <h4 class="text-center text-danger">{{ Session::get('message') }}</h4>
            <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="2200">
                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <div class="card card-body rounded-0">
                            <h3 class="card-title">Notice Title Goes Here 1</h3>
                            <hr/>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Accusantium adipisci animi aspernatur at id laborum magnam nobis optio,
                                placeat provident vel velit voluptates. Corporis deleniti ex explicabo nam, vitae voluptas!</p>
                            <p>placeat provident vel velit voluptates. Corporis deleniti ex explicabo nam, vitae voluptas!</p>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body rounded-0">
                            <h3 class="card-title">Notice Title Goes Here 2</h3>
                            <hr/>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Accusantium adipisci animi aspernatur at id laborum magnam nobis optio,
                                placeat provident vel velit voluptates. Corporis deleniti ex explicabo nam, vitae voluptas!</p>
                            <p>placeat provident vel velit voluptates. Corporis deleniti ex explicabo nam, vitae voluptas!</p>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body rounded-0">
                            <h3 class="card-title">Notice Title Goes Here 3</h3>
                            <hr/>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Accusantium adipisci animi aspernatur at id laborum magnam nobis optio,
                                placeat provident vel velit voluptates. Corporis deleniti ex explicabo nam, vitae voluptas!</p>
                            <p>placeat provident vel velit voluptates. Corporis deleniti ex explicabo nam, vitae voluptas!</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach( $subjects as $subject)
                <div class="col-md-6">
                    <div class="card mb-3" style="">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{ asset($subject->image) }}" class="img-fluid rounded-start w-100 h-100" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>{{$subject->title}}</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            <cite title="Source Title">{{$subject->teacher->name}}</cite>
                                        </figcaption>
                                    </figure>
                                    <div>{!! $subject->short_description !!}</div>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{ route('course-detail', ['id' => $subject->id]) }}" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-outline-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body card">
                        <div class="row">
                            <div class="col-9">
                                <input type="text" placeholder="Enter Your Email Here" class="form-control" />
                            </div>
                            <div class="col-3">
                                <input type="text" class="btn btn-outline-warning w-100" value="Subscribe Now" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
