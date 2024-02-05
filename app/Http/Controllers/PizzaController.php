<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index() {
        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'chessy crust'],
            ['type' => 'italy', 'base' => 'hotdog'],
            ['type' => 'hawaiian', 'base' => 'seafood']
          ];
          
          return view('welcome', 
          [
              'pizzas' => $pizzas,
              'name' => request('name')
              
          ] );
          
    }
    
public function show($id) {
    return view('test',[
        'id' => $id
    ]);
}
    
}