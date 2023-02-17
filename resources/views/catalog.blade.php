@extends('layout')

@section('title', 'Каталог')

@section('content')
        <div>
          @forelse ($products as $product)
            <div style="max-width: 250px;">
              <h1>{{$product->name}}</h1>
              <img style="max-width: 100%; height: auto" src="{{$product->imageUrl}}" alt="">
              <p>{{$product->price}}</p>
              <a href="{{route('product', $product->id)}}">see</a>
            </div>
          @empty
            <p>no items</p>
          @endforelse
        </div>
@endsection