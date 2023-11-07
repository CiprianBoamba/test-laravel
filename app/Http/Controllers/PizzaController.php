<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class PizzaController extends Controller
{
    public function index() {
    $pizzas = Pizza::all();

    return view('pizzas.index', 
    ['pizzas' => $pizzas,
    ]);
    }

    public function show($id) {
        return view('pizzas.show',['id' => $id]);  
    }

    public function create() {
        return view('pizzas.create');  
    }

   
}
