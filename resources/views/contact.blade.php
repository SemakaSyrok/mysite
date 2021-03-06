@extends('layouts.app')

@section('content')


    @if(\Illuminate\Support\Facades\Session::has('submited'))
        <div class="container-fluid  p-1" style="background:url({{ asset('/images/bg.jpg') }});min-height:100vh;  background-size: cover ">
            <div class="row justify-content-center ">
                <div class="col-sm-12 p-4 mt-5 col-md-8 bg-white">
                    <h5>Message sent! </h5>
                    <h6>You will get unswer from the <strong>info@simon-svirkov.com</strong></h6>
                    <a href="/" class="text-center">Return to main</a>
                </div>
            </div>
        </div>
    @else
        <div class="container-fluid" style="background:url({{ asset('/images/bg.jpg') }});min-height:100vh;  background-size: cover ">
            <div class="row justify-content-center  p-1 align-items-center" style="min-height: 95vh">
                <div class="form col-sm-10 col-md-6 p-4 mt-5  shadow-lg bg-white">
                    <form action="{{ route('message') }}" method="POST">

                        @csrf
                        <div class="form-group">
                            <label for="email" >E-mail</label>
                            <input id="email" name="email" type="text"
                                   class="form-control"
                                    value="{{ old('email') }}"
                            >
                            @error('email')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name" >Name</label>
                            <input id="name" name="name" type="text"
                                   class="form-control"
                                    value="{{ old('name') }}"
                            >
                            @error('name')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="4" type="text"
                                      class="form-control"
                                      value="{{ old('message')  }}"
                            >{{session('contact_message') ? session('contact_message') : old('message') }}</textarea>
                            @error('message')
                            <small class="text-danger">
                                {{ $message  }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for="captcha">Captcha</label>
                            <div class="d-flex justify-content-between align-items-center p-2">
                                <div class=" d-block mx-auto">
                                    {!! captcha_img('math') !!}
                                </div>
                                <input id="captcha" name="captcha" type="text"
                                       class="form-control col-7 @error('captcha') is-invalid @enderror"
                                >
                            </div>
                        </div>

                        <div class="form-group d-none">
                            <label for="phone">Phone</label>
                            <div class="d-flex justify-content-between align-items-center p-2">
                                <input id="phone" name="phone" type="text">
                            </div>
                        </div>

                        <div class="form-group  d-flex justify-content-center">
                            <button  class="btn btn-lg btn-outline-secondary">Send</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @endif



@endsection
