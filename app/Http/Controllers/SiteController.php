<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index() {
        $id = 1;
        $name = 'Joao';
        $surname = 'Pereira';
        $age = 27;
        $birthdate = '22/12/1994';

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
            'surname' => $surname,
            'birthdate' => $birthdate
        ];
        return view('welcome', $data);
    }
    public function exit() {
        return view('sair');
    }
    public function users(Request $req){
        $data = [
            'quantity' => $req -> qtd
        ];

        return view('users', $data);
    }
}
