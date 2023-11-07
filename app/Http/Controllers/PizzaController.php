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

        // $pizza = Pizza::find($id);
        $pizza = Pizza::findorFail($id);
        return view('pizzas.show',['pizza' => $pizza]);  
    }

    public function create() {
        return view('pizzas.create');  
    }
    public function store(Request $request) {

        error_log($request->name);
        error_log($request->type);
        error_log($request->base);

        return redirect('/');
    }

   
}
