<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class Inicio extends Controller
{
    public function bienvenida(){
        return view('bienvenida');
    }

    public function cuento(){
        return view('cuento');
    }

    //Capítulo 1
    public function cap1(){
        return view('cap1');
    }

    //Opción 1
    public function op1cap1(){
        return view('op1cap1');
    }

    //Opción 2
    public function op2cap1(){
        return view('op2cap1');
    }



    //Capítulo 2
    public function cap2(){
        return view('cap2');
    }

    //Opción 1
    public function op1cap2(){
        return view('op1cap2');
    }

    //Opción 2
    public function op2cap2(){
        return view('op2cap2');
    }

    //Capítulo 3
    public function cap3(){
        return view('cap3');
    }


    //Opción 1
    public function op1cap3(){
        return view('op1cap3');
    }

    //Opción 2
    public function op2cap3(){
        return view('op2cap3');
    }

}

