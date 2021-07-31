<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><!-- CSS only -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<style>
    * {
        transition: all 0.2s ease-in-out;
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 400;
    }

    html {
        scroll-behavior: smooth;
    }

    .bg-success {
        background-color: #FFCCCB !important;

    }

    .tbgrid {
        display: grid;
        grid-gap: 10px;
        margin-left: 8%;
        margin-right: 8%;
        /* justify-content: center; */
        width: auto;

    }

    .colorvalue {
        background-color: #9DC88D;
        color: black;
    }

    .auto-tbfill {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));

    }

    .h1gradient {
        color: #111;
        font-family: 'Helvetica Neue', sans-serif;
        /* font-size: 275px; */
        font-weight: bold;
        letter-spacing: -1px;
        line-height: 1;
        text-align: center;
        font-size: 100px;
        background: linear-gradient(to right, #4D774E 0%, #9DC88D 80%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px) {

        .h1gradient {
            color: #111;
            font-family: 'Helvetica Neue', sans-serif;
            /* font-size: 275px; */
            font-weight: bold;
            letter-spacing: -1px;
            line-height: 1;
            text-align: center;
            font-size: 60px;
            background: linear-gradient(to right, #30CFD0 0%, #330867 80%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

    }

    .linecolorh2 {
        background-image: linear-gradient(to right, whitesmoke, #008000);
        width: 40%;
        text-align: left;
        margin-left: 0;
    }

    .linecolorh1 {
        background-image: linear-gradient(to right, red 80%, whitesmoke);
        width: 40%;
        text-align: left;
        margin-left: 0;
    }

    .linehr {
        border-width: 4px;

    }

    .borderleft {
        border-left: 5px solid #9DC88D;
        height: 2px;

    }

    .borderright {
        border-left: 5px solid #4D774E;
        height: 2px;

    }

    .linehrcenter {
        border-width: 2px;
    }

    .linecolorhr_about {
        background-image: linear-gradient(to right, #273443 60%, whitesmoke);
        width: 10%;
        text-align: left;
        margin-left: 0;
    }

    .linehr_about {
        border-width: 2px;

    }

    .pointerscrollup {
        cursor: pointer;
    }

    .navbar-nav {
        font-size: 1rem;
        font-family: 'Source Sans Pro', sans-serif;
    }

    .borderradius1 {
        /* border-radius: 50%; */
        /* margin: -20px -20px 20px -20px; */
        border-radius: 160px 160px 0px 160px;

    }

    .borderradius2 {
        /* border-radius: 50%; */
        /* margin: -20px -20px 20px -20px; */
        border-radius: 0px 160px 160px 160px;

    }

    .btnsend,
    .btnsend:hover,
    .btnsend:active,
    .btnsend:visited {
        outline: none !important;
        /* background-color: rgb(208, 192, 74); */
        background-color: #DADED4;
        color: whitesmoke;
    }

    .btncontact,
    .btncontact:hover,
    .btncontact:active,
    .btncontact:visited {
        outline: none !important;
        /* background-color: rgb(208, 192, 74); */
        background-color: #DADED4;
        color: whitesmoke;
    }

    .btncontact:visited {
        outline: none !important;
        /* background-color: rgb(208, 192, 74); */
        background-color: red;
        color: whitesmoke;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" style="font-size:xx-large;">Mo<b>gen</b> <i class='fa fa-leaf' style='font-size:14px'></i>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{Request::is ('home') ? 'active' : ''}}">
                            <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="/testiminial">Testimonials</a>
                        </li> -->
                        <li class="nav-item {{Request::is ('about') ? 'active' : ''}}">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>
                        <li class="nav-item {{Request::is ('contact') ? 'active' : ''}}">
                            <a class="nav-link" href="/contact">Contact Us</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <!-- <section class="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block">
                        <ol class="carousel-indicators tabs">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0">
                                <figure>
                                    <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-01-179x179.png" class="img-fluid" alt="">
                                </figure>
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                <figure>
                                    <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-02-306x306.png" class="img-fluid" alt="">
                                </figure>
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                <figure>
                                    <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-03-179x179.png" class="img-fluid" alt="">
                                </figure>
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <div id="carouselExampleIndicators" data-interval="false" class="carousel slide" data-ride="carousel">
                            <h3>WHAT OUR CLIENTS SAY</h3>
                            <h1>TESTIMONIALS</h1>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="quote-wrapper">
                                        <p>I have tried a lot of food delivery services but Plate is something out of this world! Their food is really healthy and it tastes great, which is why I recommend this company to all my friends!</p>
                                        <h3>peter lee</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="quote-wrapper">
                                        <p>I have tried a lot of food delivery services but Plate is something out of this world! Their food is really healthy and it tastes great, which is why I recommend this company to all my friends!</p>
                                        <h3>peter lee</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="quote-wrapper">
                                        <p>I have tried a lot of food delivery services but Plate is something out of this world! Their food is really healthy and it tastes great, which is why I recommend this company to all my friends!</p>
                                        <h3>peter lee</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- <ol class="carousel-indicators indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol> -->
        <!-- </div>
    </div>
    </div>
    </div> -->
        <!-- </section> -->
        <br />


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <script>
        function scrollToTop() {
            $(window).scrollTop(0);
        }
    </script>
    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-2 align-self-center">
                    <h5 class="text-uppercase">
                    <i class="fa fa-leaf col d-flex justify-content-center pb-3 py-3" style="font-size:38px;color:#9DC88D;"></i>
                    </h5>

                    <p>
                        Microgreens are the seedlings of vegetables and herbs. They are an emerging type of specialty vegetable that people can buy from shops or grow at home from the seeds of vegetables, herbs, or grains
                        May be you did not know: plant-based diets may help reduce the risk of heart disease, cancer, type 2 diabetes, obesity, and other conditions.

                    </p>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mb-4 mb-md-0 ">
                    <h5 class="text-uppercase">Mogen Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li class="{{Request::is ('contact') ? 'active' : ''}}">
                            <a href="/about" class="text-dark">About Us</a>
                        </li>
                        <li class="{{Request::is ('contact') ? 'active' : ''}}">
                            <a href="/contact" class="text-dark">Contact Us</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">T&Cs</a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Follow us</h5>
                    <ul class="nav justify-content-center list-unstyled mb-0">
                        <li>
                            <a class="nav-link" href="#"> <i class="fa fa-facebook-f" style="font-size:20px;color:#9DC88D;"></i>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#"> <i class="fa fa-google" style="font-size:20px;color:#9DC88D;"></i>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
            <i class='fas fa-arrow-alt-circle-up float-right pointerscrollup' onclick="scrollToTop()" style='font-size:38px;color:#DADED4'></i>
        </div>
        <!-- <footer class="text-light text-center text-lg-start" style="background-color: #DADED4;"> -->

        <!-- Copyright -->
        <div class="text-light text-center p-3 " style="background-color: #9DC88D;">
            © 2021 Copyright:
            <a class="text-light" href="#">mogen.co.za</a>
        </div>
        <!-- Copyright -->
    </footer>
    
</body>

</html>