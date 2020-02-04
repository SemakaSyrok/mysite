@extends('layouts.app')

@section('content')

    <div class="container pt-4 my-4 d-block mx-auto card shadow">

        <h1>FAQ</h1>
        <br>

        <h3>What is it?</h3>
        <p>
            It is 2 Progressive Web Applications (user and admin) and server application for them.
            <br>
            The killer feature is - streaming video from
            surveillance camera to users.
            <br>
            <br>
            It provides next services:

        <ul>
            <li>New items</li>
            <li>Bonuses</li>
            <li>Cameras</li>
            <li>Chats</li>
            <li>Completed works</li>
            <li>Prices</li>
            <li>FAQ</li>
            <li>Helpful information</li>
            <li>Projects</li>
        </ul>

        <hr>
        <h3>For what is it?</h3>
        <p>
            It was built for custom homes builder company.
            The task was to provide clients different services, the main is the real-time
            monitoring of the builder process.
        </p>
        <hr>
        <h3>What will You get?</h3>
        <p>
            You will get the link to download this application.
        </p>
        <hr>
        <h3>Price</h3>
        <p>99$</p>

        <div class="col-sm-12 col-md-8 col-xl-6 xol-lg-6 d-block d-flex justify-content-center mx-auto py-3">
            <a class="d-block mx-auto my-2 btn btn-outline-primary" style="min-width: 150px;" href="{{ route('pay') }}">Buy</a>
            <a class="d-block mx-auto my-2 btn btn-outline-primary" style="min-width: 150px;" href="{{ route('contact', ['mess' => 1]) }}">Test</a>
        </div>


    </div>

@endsection
