
@extends('frontLayouts.main')
@section('title', 'Home - DentCare')

{{--@section('content)--}}
    @section('content')

        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-start">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Welcome To Medinova</h5>
                        <h1 class="display-1 text-white mb-md-4">Best Healthcare Solution In Your City</h1>
                        <div class="pt-2">
                            <a href="" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Find Doctor</a>
                            <a href="" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container">
                @foreach($about as $abouData)


                <div class="row gx-5">
                    <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded" src="{{asset('storage/'.$abouData->image)}}" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="mb-4">
                            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">{{$abouData->title}}</h5>
                            <h1 class="display-4">{{$abouData->heading}}</h1>
                        </div>
                        <p> {!! $abouData->description !!}</p>
                        <div class="row g-3 pt-3">
                            <div class="col-sm-3 col-6">
                                <div class="bg-light text-center rounded-circle py-4">
                                    <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                                    <h6 class="mb-0">Qualified<small class="d-block text-primary">Doctors</small></h6>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="bg-light text-center rounded-circle py-4">
                                    <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                                    <h6 class="mb-0">Emergency<small class="d-block text-primary">Services</small></h6>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="bg-light text-center rounded-circle py-4">
                                    <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                                    <h6 class="mb-0">Accurate<small class="d-block text-primary">Testing</small></h6>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="bg-light text-center rounded-circle py-4">
                                    <i class="fa fa-3x fa-ambulance text-primary mb-3"></i>
                                    <h6 class="mb-0">Free<small class="d-block text-primary">Ambulance</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- About End -->


        <!-- Services Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
                    <h1 class="display-4">Excellent Medical Services</h1>
                </div>
                <div class="row g-5">
                    @foreach($services as $service)


                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon mb-4">
                                <i class="{{$service->service_icon}}"></i>
                            </div>
                            <h4 class="mb-3">{{$service->heading}}</h4>
                            <p class="m-0">{{$service->title}}</p>
                            <a class="btn btn-lg btn-primary rounded-pill" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
        <!-- Services End -->


        <!-- Appointment Start -->
        <div class="container-fluid bg-primary my-5 py-5">
            <div class="container py-5">
                <div class="row gx-5">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="mb-4">
                            <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Appointment</h5>
                            <h1 class="display-4">Make An Appointment For Your Family</h1>
                        </div>
                        <p class="text-white mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
{{--                        <a class="btn btn-dark rounded-pill py-3 px-5 me-3" href="">Find Doctor</a>--}}
                        <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="{{route('appointment')}}">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-white text-center rounded p-5">
                            <h1 class="mb-4">Book An Appointment</h1>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <form action="{{route('appointment.store')}}" method="post">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select bg-light border-0" style="height: 55px;" name="service">
                                            <option selected>Choose Department</option>
                                            <option value="1">Department 1</option>
                                            <option value="2">Department 2</option>
                                            <option value="3">Department 3</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select bg-light border-0" style="height: 55px;" name="doctor">
                                            <option selected>Select Doctor</option>
                                            <option value="1">Doctor 1</option>
                                            <option value="2">Doctor 2</option>
                                            <option value="3">Doctor 3</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control bg-light border-0" placeholder="Your Name" name="name" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control bg-light border-0" placeholder="Your Email" name="email" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input type="text"
                                                   class="form-control bg-light border-0 datetimepicker-input"
                                                   placeholder="Date" data-target="#date" data-toggle="datetimepicker" name="date" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="time" id="time" data-target-input="nearest">
                                            <input type="text"
                                                   class="form-control bg-light border-0 datetimepicker-input"
                                                   placeholder="Time" data-target="#time" data-toggle="datetimepicker" name="time" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input type="number" class="form-control bg-light border-0" placeholder="Your number" name="number" style="height: 55px;">
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Make An Appointment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->


        <!-- Pricing Plan Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Medical Packages</h5>
                    <h1 class="display-4">Awesome Medical Programs</h1>
                </div>
                <div class="owl-carousel price-carousel position-relative" style="padding: 0 45px 45px 45px;">
                    @foreach($plans as $plan)

                    <div class="bg-light rounded text-center">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="{{asset('storage/'.$plan->image)}}" alt="">
                            <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                                <h3 class="text-white">{{$plan->title}}</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;">$</small>{{$plan->price}}<small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/ Year</small>
                                </h1>
                            </div>
                        </div>
                        <div class="text-center py-5">
                            <p>{{$plan->msg}}</p>

                            <p>{{$plan->fe_2}}</p>
                            <p>{{$plan->fe_3}}</p>
                            <a href="{{route('appointment')}}" class="btn btn-primary rounded-pill py-3 px-5 my-2">Book Appointment</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Pricing Plan End -->


        <!-- Team Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Our Doctors</h5>
                    <h1 class="display-4">Qualified Healthcare Professionals</h1>
                </div>
                <div class="owl-carousel team-carousel position-relative">
                    @foreach($teams as $team)


                    <div class="team-item">
                        <div class="row g-0 bg-light rounded overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                                <img class="img-fluid h-100" src="{{asset('storage/'.$team->image)}}" style="object-fit: cover;">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                                <div class="mt-auto p-4">
                                    <h3>{{$team->name}}</h3>
                                    <h6 class="fw-normal fst-italic text-primary mb-4">{{$team->title}}</h6>
                                    <p class="m-0">{{$team->msg}}</p>
                                </div>
                                <div class="d-flex mt-auto border-top p-4">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="{{$team->fb_url}}"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="{{$team->in_url}}"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="{{$team->wat_url}}"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team End -->


{{--        <!-- Search Start -->--}}
{{--        <div class="container-fluid bg-primary my-5 py-5">--}}
{{--            <div class="container py-5">--}}
{{--                <div class="text-center mx-auto mb-5" style="max-width: 500px;">--}}
{{--                    <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Find A Doctor</h5>--}}
{{--                    <h1 class="display-4 mb-4">Find A Healthcare Professionals</h1>--}}
{{--                    <h5 class="text-white fw-normal">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5>--}}
{{--                </div>--}}
{{--                <div class="mx-auto" style="width: 100%; max-width: 600px;">--}}
{{--                    <div class="input-group">--}}
{{--                        <select class="form-select border-primary w-25" style="height: 60px;">--}}
{{--                            <option selected>Department</option>--}}
{{--                            <option value="1">Department 1</option>--}}
{{--                            <option value="2">Department 2</option>--}}
{{--                            <option value="3">Department 3</option>--}}
{{--                        </select>--}}
{{--                        <input type="text" class="form-control border-primary w-50" placeholder="Keyword">--}}
{{--                        <button class="btn btn-dark border-0 w-25">Search</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Search End -->--}}


        <!-- Testimonial Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Testimonial</h5>
                    <h1 class="display-4">Patients Say About Our Services</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="owl-carousel testimonial-carousel">
                            @foreach($testimonials as $testimonial)


                            <div class="testimonial-item text-center">
                                <div class="position-relative mb-5">
                                    <img class="img-fluid rounded-circle mx-auto" src="{{asset('storage/'.$testimonial->image)}}" alt="">
                                    <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                        <i class="fa fa-quote-left fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <p class="fs-4 fw-normal">{{$testimonial->msg}}</p>
                                <hr class="w-25 mx-auto">
                                <h3>{{$testimonial->name}}</h3>
{{--                                <h6 class="fw-normal text-primary mb-3">Profession</h6>--}}
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Blog Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Blog Post</h5>
                    <h1 class="display-4">Our Latest Medical Blog Posts</h1>
                </div>
                <div class="row g-5">
                    @foreach($blogs->take(3) as $blog)


                    <div class="col-xl-4 col-lg-6">
                        <div class="bg-light rounded overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('storage/'.$blog->image)}}" alt="">
                            <div class="p-4">
                                <a class="h3 d-block mb-3" href="{{route('blog-details',$blog->id)}}">{{$blog->title}}</a>
                                <p class="m-0">{{$blog->short_description}}</p>
                            </div>
                            <div class="d-flex justify-content-between border-top p-4">
                                <div class="d-flex align-items-center">
{{--                                    <img class="rounded-circle me-2" src="{{asset('asset/img/user.jpg')}}" width="25" height="25" alt="">--}}
                                    <small>{{$blog->author_name}}</small>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                                    <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Blog End -->

    @endsection
