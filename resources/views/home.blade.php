@extends('layout/main')

@section('title', 'Home')

@section('container',)

    <div class="carousel slide text-truncate d-lg-flex align-items-lg-center" data-ride="carousel" id="carousel-1" style="height: 269px;">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item"><img class="w-100 d-block" src="{{asset('img/rumahcar1.jpg')}}" alt="Slide Image"></div>
            <div class="carousel-item active"><img class="w-100 d-block" src="{{asset('img/rumahcar2.jpg')}}" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="{{asset('img/rumahcar3.jpeg')}}" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="{{asset('img/rumahcar4.jpeg')}}" alt="Slide Image"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol
            class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0"></li>
            <li data-target="#carousel-1" data-slide-to="1" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            <li data-target="#carousel-1" data-slide-to="3"></li>
        </ol>
    </div>
    <div class="testimonials-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Ezlow Company</h2>
                <p class="text-center">Help you in choosing the right housing to live in. Our customers love us! Read what they have to say below.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="{{asset('img/1.jpg')}}">
                        <h5 class="name">Ben Johnson</h5>
                        <p class="title">CEO of Company Inc.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="{{asset('img/3.jpg')}}">
                        <h5 class="name">Carl Kent</h5>
                        <p class="title">Founder of Style Co.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="{{asset('img/2.jpg')}}">
                        <h5 class="name">Emily Clark</h5>
                        <p class="title">Owner of Creative Ltd.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
