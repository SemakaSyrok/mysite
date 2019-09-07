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


        <div class="item card shadow bg-white p-3 my-2">

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
                <a href="{{ route('contact', ['mess' => 1])  }}" class="my-btn btn-order highlight-min my-shadow ">
                    <span class="p-2">Try it</span>
                </a>
            </div>

        </div>

        <div class="item card shadow bg-white p-3 my-2">
            <h3 class="mt-4">E-commerce engine</h3>
            <p class="text-muted">Coming soon...</p>
        </div>

        <div class="item card shadow bg-white p-3 my-2">
            <h3 class="mt-4">Hotel engine</h3>
            <p class="text-muted">Coming soon...</p>

        </div>


    </div>
@endsection