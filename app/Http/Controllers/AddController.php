<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function create(){
        return view('show_projet');
    }
    public function store (Request $reguest){
     
        $inputs=$reguest->all();
return view('infos',compact('inputs'));
  
        }}
