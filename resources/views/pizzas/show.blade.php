@extends('layouts.layout')

@section('content')

<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen  bg-center bg-gray-100  dark:bg-gray-900">
  <div class="mx-auto">
    <div class="flex justify-center mx-auto p-6 lg:p-8 ">
      <h1 class="underline text-3xl text-violet-600">Pizzas Details</h1>

    </div>
    <div class="flex flex-col justify-center  mx-auto p-6 lg:p-8">
      <h5>Order for {{$pizza->name}}</h5>  
      <p>Type - {{$pizza->type}}</p>
      <p>Base - {{$pizza->base}}</p>
    </div>
    <a href="/pizzas" class=" text-blue-600">Back to all pizzas</a>
  </div>
</div>

@endsection