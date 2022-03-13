@extends('master.front.master');

@section('title')
    Details Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{ asset('/img/c4.jpg') }}" alt="" class="w-100" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h1>Course Title 1</h1>
                        <p>Course fee:15,600/-</p>
                        <hr/>
                        <h3>Trainer Name Goes Here</h3>
                        <ul>
                            <li><a href="">Trainer LinkedIn</a></li>
                            <li><a href="">Trainer Facebook</a></li>
                            <li><a href="">Trainer Twitter</a></li>
                        </ul>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, repudiandae.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body">
                        <h1>Course Modul details</h1>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem beatae deleniti ducimus ea explicabo impedit in maxime minus molestiae nemo placeat, quas, reprehenderit repudiandae rerum sunt, veniam. Eligendi, illo!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem beatae deleniti ducimus ea explicabo impedit in maxime minus molestiae nemo placeat, quas, reprehenderit repudiandae rerum sunt, veniam. Eligendi, illo!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem beatae deleniti ducimus ea explicabo impedit in maxime minus molestiae nemo placeat, quas, reprehenderit repudiandae rerum sunt, veniam. Eligendi, illo!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem beatae deleniti ducimus ea explicabo impedit in maxime minus molestiae nemo placeat, quas, reprehenderit repudiandae rerum sunt, veniam. Eligendi, illo!</p>
                        <hr/>
                        <a href="" class="btn btn-outline-success w-25 mx-auto  ">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
