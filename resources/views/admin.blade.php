@extends('layout')

@section('title', 'Admin panel')

@section('content')
<h1>Admin</h1>

<h2>Создать продукт</h2>
<form action="{{ route('product.create') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" id="name" name="name" placeholder="Название" required>
    <input type="number" id="price" name="price" placeholder="Цена" step="0.01" required>
    <input type="file" id="image" name="image" placeholder="Фото" required>
    <input type="text" id="countryManufacturer" name="countryManufacturer" placeholder="Страна изготовитель" required>
    <input type="number" id="yearOfRelease" name="yearOfRelease" placeholder="Год изготовления" required>
    <input type="text" id="model" name="model" placeholder="Модель" required>
    <button class="submit" type="submit">Создать</button>
</form>
@endsection