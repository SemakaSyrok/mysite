@extends('layouts.app')



@section('scripts')

@endsection


@section('content')

    <div class="container mt-5 pt-5">

        <div class="bg-white mt-3 col-sm-10 col-md-8 col-lg-6 col-xl-6 shadow p-3 d-block mx-auto position-relative "
            style="min-height: 280px"
        >
            <h4 class="text-center pt-5">Buy Video Management System</h4>
            <div class="d-flex justify-content-center align-items-center pt-4">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="8P4D5J5LPMV4E">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/ru_RU/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
            <a href="{{ route('faq') }}" class="position-absolute text-center" style="bottom: 18px">No, I have some questions</a>
        </div>

    </div>




@endsection









