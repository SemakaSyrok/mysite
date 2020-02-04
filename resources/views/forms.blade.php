@extends('layouts.app')




@section('content')

<div class="container p-2">

    {!! Form::open(['url' => 'foo/bar']) !!}
        {{ Form::model($user) }}
    {!! Form::close() !!}


</div>

@endsection
