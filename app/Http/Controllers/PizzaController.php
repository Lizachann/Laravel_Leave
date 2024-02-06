<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblemployees;

class PizzaController extends Controller
{
    public function index() {
        // $pizzas = [
        //     ['type' => 'hawaiian', 'base' => 'chessy crust'],
        //     ['type' => 'italy', 'base' => 'hotdog'],
        //     ['type' => 'hawaiian', 'base' => 'seafood']
        //   ];

        // $pizzas=pizza::all();

        $employees = Tblemployees::all() ;
        
          return view('welcome', 
          [
            //   'pizzas' => $pizzas,
            //   'name' => request('name')
            'employees' => $employees
              
          ] );
          
    }
    
public function show($id) {
    return view('test',[
        'id' => $id
    ]);
}
    
}