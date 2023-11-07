@extends('layouts.layout')

@section('content')
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen  bg-center bg-gray-100  dark:bg-gray-900">
    <div class="mx-auto">
      <div class="flex justify-center mx-auto p-6 lg:p-8 ">
        <h1 class="underline text-3xl text-violet-600">Pizzas List</h1>
      </div>
      <div class=" test flex items-center justify-center flex-col  mx-auto p-6 lg:p-8">

          @foreach($pizzas as $pizza)
          <div class="flex items-center justify-center flex-col">
              <p>
                {{$pizza['name']}} -{{$pizza['type']}} - {{$pizza['base']}}
              </p>
          </div>
            @endforeach
            
      </div>
    </div>
  </div>

@endsection