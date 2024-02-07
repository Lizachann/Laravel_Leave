<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblemployees;
use App\Models\Tblleaves;
use App\Models\Tbldepartments;

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
        $leaves = Tblleaves::all();
        $departments = Tbldepartments::all();
        
          return view('welcome', 
          [
            //   'pizzas' => $pizzas,
            //   'name' => request('name')
            'employees' => $employees,
            'leaves' => $leaves,
            'departments' => $departments
              
          ] );
        
        //
        // return view('welcome', 
        // ['leaves' => $leaves]);
          
    }
    
public function show($id) {
    return view('test',[
        'id' => $id
    ]);
}
    
}