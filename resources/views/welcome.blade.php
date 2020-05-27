@extends('layouts.app')

@section('content')


    <div id="first-block">
        <div id="svg-background">
            <svg style="height: 85%; max-height: 550px;width:100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:rgb(0,55,255);stop-opacity:1" />
                        <stop offset="100%" style="stop-color:rgb(27,83,255);stop-opacity:1" />
                    </linearGradient>
                </defs>
                <polygon id="triangle" points="0,0 100,0 100,95 0,75" fill="url(#grad1)" style="" />
            </svg>
        </div>

        <div class="bg-transparent container p-3 mt-3">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8 text-center d-flex justify-content-center align-items-center "
                     style="height: 60vh; max-height: 500px;">
                    <p class="line-height-16 display-4">Do you need a <br>
                        <span class="badge badge-light">modern</span>,
                        <span class="badge badge-light">speed</span> and
                        <span class="badge badge-light">beautiful</span> <br>
                        website?</p>
                </div>
            </div>
        </div>
    </div>

    <div id="fourth-block" class="my-5 container">
        <div class="container px-5 pb-3">
            <hr class="my-2">
        </div>
        <h4 class="px-5 text-center">
            My high quality team creating individual websites
        </h4>
        <h4 class="px-5 pt-3 text-center">
            Our websites don't modern <strong>or</strong> speed <strong>or</strong> beautiful, <br>
            They are modern <strong> and</strong> speed<strong> and</strong> beautiful
        </h4>
        <h4 class="px-5 pt-3 text-center">
            We also offer some ready projects
        </h4>
        <h4 class="px-5 pt-3 text-center">
            If you want to order website or another programmer service,
            probably you don't know where to begin - you needs only to write us
        </h4>

        <h4 class="px-5 pt-3 text-center">
            We will advice you in what you needs, how it coasts, is it difficult and we will get unswer on
            all your  questions
        </h4>



        <div class="container px-5 pt-3">
            <hr class="my-2">
        </div>
    </div>

    <div id="second-block" class="mb-3 p-4">
        <div class="mx-auto">
            <div class="col-4 mx-auto d-flex justify-content-center">
                <a href="{{ route('contact')  }}"
                   class="btn btn-outline-secondary p-2"
                   style="width: 200px; font-size: 32px">
                    Contact</a>

            </div>
        </div>
    </div>

    <div id="third-block" class="my-4">
        <div class="container p-4">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <div class="card my-shadow" >
{{--                        <img height="80%" class="card-img-top" src="/images/ecommerce.png" alt="Card image cap">--}}
                        <div class="card-body">
                            <h5 class="card-title text-secondary">ECOMMERCE</h5>
                            <p class="card-text">ECOMMERCE WEBSITES</p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <div class="card  my-shadow" >
{{--                        <img height="80%" class="card-img-top" src="/images/ecommerce.png" alt="Card image cap">--}}
                        <div class="card-body">
                            <h5 class="card-title text-secondary">HOTEL</h5>
                            <p class="card-text">HOTEL WEBSITES</p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <div class="card  my-shadow" >
{{--                        <img height="80%" class="card-img-top" src="/images/ecommerce.png" alt="Card image cap">--}}
                        <div class="card-body">
                            <h5 class="card-title text-secondary">NEWS</h5>
                            <p class="card-text">NEWS WEBSITES</p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <div class="card  my-shadow" >
{{--                        <img height="80%" class="card-img-top" src="/images/ecommerce.png" alt="Card image cap">--}}
                        <div class="card-body">
                            <h5 class="card-title text-secondary">COMPANY</h5>
                            <p class="card-text">COMPANY WEBSITES</p>

                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <div class="card  my-shadow" >
                        {{--                        <img height="80%" class="card-img-top" src="/images/ecommerce.png" alt="Card image cap">--}}
                        <div class="card-body">
                            <h5 class="card-title text-secondary">BUGS</h5>
                            <p class="card-text">Fixing bugs</p>

                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <div class="card  my-shadow" >
                        {{--                        <img height="80%" class="card-img-top" src="/images/ecommerce.png" alt="Card image cap">--}}
                        <div class="card-body">
                            <h5 class="card-title text-secondary">WEB DESIGN</h5>
                            <p class="card-text">Web design</p>

                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <div class="card  my-shadow" >
                        {{--                        <img height="80%" class="card-img-top" src="/images/ecommerce.png" alt="Card image cap">--}}
                        <div class="card-body">
                            <h5 class="card-title text-secondary">WORDPRESS</h5>
                            <p class="card-text">Wordpress websites</p>

                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 p-1">
                    <div class="card  my-shadow" >
                        {{--                        <img height="80%" class="card-img-top" src="/images/ecommerce.png" alt="Card image cap">--}}
                        <div class="card-body">
                            <h5 class="card-title text-secondary">PORTFOLIO</h5>
                            <p class="card-text">Portfolio web pages</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
