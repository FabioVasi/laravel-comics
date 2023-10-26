@extends('layouts.app')



@section('content')

    <section class="banner mt-2"></section>

    <section class="products pt-5 pb-3">

        <div class="container">
            <button class="current btn btn-large rounded-0 fw-bold fs-2 px-4 border-0 text-white">CURRENT SERIES</button>
            <div class="row g-5">
                @foreach($comics as $comic)
                    <div class="col-2">
                        <div class="card border-0 rounded-0 bg-transparent">
                            <img style="aspect-ratio: 1 / 1.5; object-fit: cover;" class="card-img-top rounded-0" src="{{$comic['thumb']}}" alt="">
                            <div class="card-body test-start px-0 border-0 rounded-0 bg-transparent h-100">
                                <h4 class="text-secondary">{{$comic['series']}}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <button class="load btn rounded-0 fw-bold my-3 border-0 text-white">LOAD MORE</button>
            </div>            
        </div>

    </section>

    <section class="snippets">

        <div class="container">
            <div class="row row-cols-5 gx-5">
                <div class="col">
                    <div class="card bg-transparent border-0 rounded-0 py-5">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="image" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                            <a class="text-decoration-none text-white ps-1 fs-6" href="#">DIGITAL COMICS</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent border-0 rounded-0 py-5">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="image" src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                            <a class="text-decoration-none text-white ps-1 fs-6" href="#">DC MERCHANDISE</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent border-0 rounded-0 py-5">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="image" src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                            <a class="text-decoration-none text-white ps-1 fs-6" href="#">SUBSCRIPTION</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent border-0 rounded-0 py-5">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="image" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                            <a class="text-decoration-none text-white ps-1 fs-6" href="#">COMIC SHOP LOCATOR</a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="card bg-transparent border-0 rounded-0 py-5">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="svg" src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                            <a class="text-decoration-none text-white ps-1 fs-6" href="#">DC POWER VISA</a>
                        </div>
                    </div>
                </div>
                
            </div>        
        </div>

    </section>

@endsection