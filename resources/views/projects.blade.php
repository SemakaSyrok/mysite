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

    <div class="container">
        <h3 class="mt-4">Video Managment System</h3>

        <div class="mx-auto">
            <div class="col-4 mx-auto d-flex justify-content-center">
                <a href="{{ route('contact', ['mess' => 'hi'])  }}" class="my-btn btn-order highlight-min my-shadow">Contact</a>
            </div>
        </div>

    </div>
@endsection