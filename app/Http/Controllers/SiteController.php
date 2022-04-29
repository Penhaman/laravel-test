<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index() {

        $people = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Alessandro',
                'birth' => '29/01/90',
                'idade' => 29],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Bonieky',
                'birth' => '10/11/1933',
                'idade' => 90],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Maria',
                'birth' => '01/01/2020',
                'idade' => 2]
        ];

        $data['people'] = $people;

        return view('welcome', $data);
    }




    public function exercise() {

        $number = 1;


        $url = 'https://i.pravatar.cc/150?img='.$number;


        $data['url'] = $url;

        return view('exercise', $data);
    }
}
