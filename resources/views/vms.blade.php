@extends('layouts.app')

@section('content')

    <div class="container pt-4">




        <v-vms link="{{ route('contact', ['mess' => 1]) }}" buy="{{ route('pay') }}"
        ></v-vms>




    </div>

@endsection
