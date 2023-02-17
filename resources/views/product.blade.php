@extends('layout')

@section('title', 'Продуки')

@section('content')
<div style="max-width: 450px;">
    <h1>Название: {{$product->name}}</h1>
    <img style="max-width: 100%; height: auto" src="{{url('/images', $product->imageUrl)}}" alt="">
    <p>Цена: {{$product->price}}</p>
    <p>Страна производитель: {{$product->countryManufacturer}}</p>
    <p>Год выпуска: {{$product->yearOfRelease}}</p>
    <p>Модель: {{$product->model}}</p>
  </div>
@endsection