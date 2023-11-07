@extends('layouts.layout')

@section('content')
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen  bg-center bg-gray-100  dark:bg-gray-900">
    <div class="mx-auto">
      <div class="flex justify-center mx-auto p-6 lg:p-8 ">
        <h1 class="underline text-3xl text-violet-600">Add new pizza</h1>
      </div>
      <div class=" test flex items-center justify-center flex-col  mx-auto p-6 lg:p-8">

     

        
<form  action="/pizzas" method="POST">
  @csrf
  <div class="mb-6">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name:</label>
    <input type="text"  name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-6">
    <label for="type" id="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose type of pizza:</label>
    <select name="type"id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option value="margarita">Margarita</option>
      <option value="hawaiian">Hawaiian</option>
      <option value="veg supreme">Veg Supreme</option>
      <option value="volcano">Volcano</option>
    </select>

  </div>
  <div class="mb-6">
    <label for="base" id="base" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose crust:</label>
    <select name="base" id="base" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option value="thick">Thick</option>
      <option value="thin & crispy">Thin & Crispy</option>
      <option value="cheese crust">Cheese Crust</option>
      <option value="garlic crust">Garlic Crust</option>
    </select>

  </div>

 
 
  <button type="submit" value="Order Pizza" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

            
      </div>
    </div>
  </div>

@endsection