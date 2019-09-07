@extends('layouts.app')

@section('content')

    <div class="container pt-3">

        <div class="info mb-2">
            ID: {{ $message->id }}
            <hr>
            Created at: {{ $message->created_at }}
            <hr>
            Name: {{ $message->name }}
            <hr>
            Email: {{ $message->email }}
            <hr>
            IP: {{ $message->ip }}
            <hr>
            Message: <p>{{ $message->message }}</p>
            <hr>
        </div>


            <form action="/admin/messages/{{ $message->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button  class="btn btn-danger">Delete</button>
            </form>


    </div>

@endsection