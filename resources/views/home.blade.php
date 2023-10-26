@extends('layouts.app')



@section('content')

    <section class="banner"></section>

    <section class="products py-5">

        <div class="container">
            <button></button>
            <div class="row g-5">
                @foreach($comics as $comic)
                    <div class="col-2">
                        <div class="card border-0 rounded-0 bg-transparent">
                            <img style="aspect-ratio: 1 / 1; object-fit: cover;" class="card-img-top rounded-0 aspect-ratio-1" src="{{$comic['thumb']}}" alt="">
                            <div class="card-body test-start px-0 border-0 rounded-0 bg-transparent h-100">
                                <h4 class="text-secondary">{{$comic['series']}}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        

        

    </section>


@endsection