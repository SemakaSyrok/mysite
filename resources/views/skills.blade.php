@extends('layouts.app')

@section('content')

    <div class="container-fluid" style="background:url({{ asset('/images/bg.jpg') }});min-height:100vh;  background-size: cover ">

    <div class="container py-3">


            <div class="skill  my-3 p-3 bg-white shadow ">
                <h4>
                    <span >PHP</span>
                </h4>
                <div class="subskills">
                    <span class="  m-1">YII2</span>
                    <span class="  m-1">Laravel</span>
                </div>
            </div>

            <div class="skill  my-3 p-3 bg-white shadow ">
                <h4>
                    <span >CMS</span>
                </h4>
                <div class="subskills">
                    <span class="  m-1">Wordpress</span>
                    <span class="  m-1">Magento</span>
                    <span class="  m-1">OpenCart</span>
                </div>
            </div>

            <div class="skill  my-3 p-3 bg-white shadow">
                <h4>
                    <span class="">JS</span>
                </h4>
                <div class="subskills">
                    <span class="  m-1">jQuery</span>
                    <span class="  m-1">React</span>
                    <span class="  m-1">Vue</span>
                </div>
            </div>

            <div class="skill  my-3 p-3 bg-white shadow">
                <h4>
                    <span class="">DATABASES</span>
                </h4>
                <div class="subskills">
                    <span class="  m-1">MySQL</span>
                    <span class="  m-1">PostgresSQL</span>
                    <span class=" ">MongoDB</span>
                </div>
            </div>

            <div class="skill  my-3 p-3 bg-white shadow">
                <h4>
                    <span class="">CSS</span>
                </h4>
                <div class="subskills">
                    <span class="  m-1">Bootstrap</span>
                    <span class="  m-1">Materialize</span>
                </div>
            </div>

            <div class="skill  my-3 p-3 bg-white shadow">
                <h4>
                    <span class="">Linux</span>
                </h4>
                <div class="subskills">
                    <span class="   mx-1">Ubuntu</span>
                    <span class="   mx-1">Debian</span>
                </div>
            </div>

            <div class="skill  my-3 p-3 bg-white shadow">
                <h4>
                    <span class="">Hosting</span>
                </h4>
                <div class="subskills">
                    <span class="   mx-1">Amazon AWS</span>
                    <span class="   mx-1">Digital Ocean</span>
                    <span class="   mx-1">Heroku</span>
                </div>
            </div>

        </div>
    </div>

@endsection
