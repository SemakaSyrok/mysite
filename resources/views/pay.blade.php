@extends('layouts.app')



@section('scripts')
    <script src="https://www.paypalobjects.com/api/checkout.js" ></script>
@endsection


@section('content')

    <Pay></Pay>

    <br><br><br>

    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="P5AGG3CFLT7XC">
        <input type="image" src="https://www.paypalobjects.com/ru_RU/RU/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal — более безопасный и легкий способ оплаты через Интернет!">
        <img alt="" border="0" src="https://www.paypalobjects.com/ru_RU/i/scr/pixel.gif" width="1" height="1">
    </form>



@endsection










