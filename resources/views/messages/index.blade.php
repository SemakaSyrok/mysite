@extends('layouts.app')

@section('content')

    <div class="container">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">IP</th>
                <th scope="col">Time</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>

            @foreach($messages as $message)
                <tr>
                    <th scope="row">{{ $message->id }}</th>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->ip }}</td>
                    <td>{{ $message->created_at }}</td>
                    <td>
                        <a href="/admin/messages/{{$message->id}}" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>



        {{ $messages->links() }}
    </div>

@endsection