@extends('front.layouts.main',['title'=>$producto->name])
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col 12">
            <div class="section-title">
                <h2>{{$producto->name}}</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <img src="{{asset('/nfts/'.$producto->image)}}" alt="">
        </div>
        <div class="col-6">
            <h2 class="h4">{{$producto->description}}</h2>
            <p> <b>Price {{ number_format($producto->base_price,2) }}</b></p>
            <p> <i class="fa fa-heart"></i>{{$producto->likes}}</p>
        </div>
    </div>

</div>
@endsection