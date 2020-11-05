@extends('layout/main')

@section('title', 'Gallery')

@section('container',)

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<link rel="stylesheet" href="{{asset('css/style2/Lightbox-Gallery.css')}}">
<link rel="stylesheet" href="{{asset('css/style2/styles.css')}}">

<div class="photo-gallery mt-5">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Gallery</h2>
            <p class="text-center">This is a housing gallery view from our company. We give the best view by choosing a strategic location for placing a modern home.</p>
        </div>
        <div class="row photos">
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset('img/gal1.jpg')}}"><img class="img-fluid" src="{{asset('img/gal1.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset('img/gal2.jpg')}}"><img class="img-fluid" src="{{asset('img/gal2.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset('img/gal3.jpg')}}"><img class="img-fluid" src="{{asset('img/gal3.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset('img/rumahcar1.jpg')}}"><img class="img-fluid" src="{{asset('img/rumahcar1.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset('img/rumahcar2.jpg')}}"><img class="img-fluid" src="{{asset('img/rumahcar2.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset('img/gal4.jpeg')}}"><img class="img-fluid" src="{{asset('img/gal4.jpg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset('img/gal5.jpeg')}}"><img class="img-fluid" src="{{asset('img/gal5.jpeg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset('img/gal6.jpeg')}}"><img class="img-fluid" src="{{asset('img/gal6.jpeg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset('img/gal7.jpeg')}}"><img class="img-fluid" src="{{asset('img/gal7.jpeg')}}"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset('img/gal8.jpeg')}}"><img class="img-fluid" src="{{asset('img/gal8.jpeg')}}"></a></div>
        </div>
    </div>
</div>
<script src="assets/js/jquery1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

@endsection
