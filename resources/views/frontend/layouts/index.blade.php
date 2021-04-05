@extends('frontend.layouts.main')
@section('content')

    <main>
        <div class="container">
            <div class="title" style="padding-top: 150px;">
                <hr style="width:38%; background-color: black;"> <h1>WOMEN'S APPAREL BRAND</h1> <hr style="width:38%; background-color: black;">
            </div>
            <div class="slides">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="/images/front-end/slide/1.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="/images/front-end/islide/2.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="/images/front-end/slide/3.jpg" alt="Third slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="/images/front-end/slide/4.jpg" alt="Four slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            <div class="title" style="padding-top: 90px;">
                <hr style="width:41%; background-color: black;"> <h1>FEATURED ITEMS</h1> <hr style="width:41%; background-color: black;">
            </div>
            <div class="row w-100" style="padding-top: 70px;">
                <div class="col-lg-4 col-sm-12">
                    <div class="news">
                        <a href=""><img src="/images/front-end/slide/5.jpg" alt="item" style="width:100%; height:407px;"></a>
                        <div class="news-link">
                            <a href="">Quick View</a>
                        </div>
                    </div>
                    <div class="news-price">
                        <a href="">Lola Pants</a> <br>
                        <a href="">$85.00</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="news">
                        <a href=""><img src="/images/front-end/slide/6.jpg" alt="item" style="width:100%; height:407px;"></a>
                        <div class="news-link">
                            <a href="">Quick View</a>
                        </div>
                    </div>
                    <div class="news-price">
                        <a href="">Tote Bag</a> <br>
                        <a href="">$20.00</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="news">
                        <a href=""><img src="/images/front-end/slide/7.jpg" alt="item" style="width:100%; height:407px;"></a>
                        <div class="news-link">
                            <a href="">Quick View</a>
                        </div>
                    </div>
                    <div class="news-price">
                        <a href="">Anna Blouse</a> <br>
                        <a href="">$75.00</a>
                    </div>
                </div>
            </div>
            <div class="news-item">
                <a href="{{route('home.index')}}">Shop All</a>
            </div>
        </div>
    </main> 
@endsection