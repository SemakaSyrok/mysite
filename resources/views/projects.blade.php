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

    <div class="container pt-1">


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

            <div class="col-4 ">
                <a href="{{ route('vms')  }}" class=" ">
                    <button class="btn btn-outline-primary">More...</button>
                </a>
            </div>

        </div>

        <div class="item  shadow bg-white p-3 my-3">
            <h3 class="mt-4">E-commerce engine</h3>
            <p class="text-muted">Coming soon...</p>
        </div>

        <div class="item  shadow bg-white p-3 my-3">
            <h3 class="mt-4">Hotel engine</h3>
            <p class="text-muted">Coming soon...</p>
        </div>

        <div class="item  shadow bg-white p-3 my-3">
            <h3 class="mt-4">Education engine</h3>
            <p class="text-muted">Coming soon...</p>
        </div>


    </div>
@endsection
