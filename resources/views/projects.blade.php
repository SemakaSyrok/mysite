@extends('layouts.app')

@section('content')

    <style>
    @media not print {
        img.decoded { background: none!important; }
    }
    img{
        background: transparent;
    }
    </style>


    <div class="container-fluid" style="background:url({{ asset('/images/bg.jpg') }});min-height:100vh;  background-size: cover ">
        <div class="container pt-1" >




            <div class="item  shadow bg-white p-3 my-3">

                <h3 class="mt-4">Video Management System</h3>

                <p>
                <span>
                    Video Management System was created to building company
                    to give clients an opportunity to watch building process in real time.
                    VMS it is a website and mobile app witch also have a lot another functions:
                    Our Works, Bonuses, Your Project, Prices, New  etc.
                    <strong>Press the button to try it!</strong>
                </span>

                </p>


                <a href="{{ route('vms')  }}" class=" ">
                    <button class="btn btn-outline-secondary">More...</button>
                </a>


            </div>

            <div class="item  shadow bg-white p-3 my-3">
                <h3 class="mt-4">Hotel engine</h3>
                <p>
                <span>
                    There are many small hotels and hostels in the  world.
                Not all of them can afford Hotel management system, and they forced to use third-party aggregators.
                Usually travellers find the hotel's site before booking, and with Hotel management system they can book apartments without using third-party aggregators.
                This system developed not only for find free apartments in your hotel. It is responsive engine  specially for small hotels.
                </span>

                </p>

                <a href="{{ route('hotel')  }}" class=" ">
                    <button class="btn btn-outline-secondary">More...</button>
                </a>
            </div>

            <div class="item  shadow bg-white p-3 my-3">
                <h3 class="mt-4">E-commerce engine</h3>
                <p class="text-muted">Coming soon...</p>
            </div>

            <div class="item  shadow bg-white p-3 my-3">
                <h3 class="mt-4">Education engine</h3>
                <p class="text-muted">Coming soon...</p>
            </div>


        </div>
    </div>
@endsection
