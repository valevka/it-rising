<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
   public function getIndex(){
    return view('welcome');
   }

   public function getChoose_lang(){
    return view('choose_lang');
   }

   public function getC_sharp(){
    return view('c_sharp');
   }

   public function getC(){
    return view('c');
   }

   public function getHtml(){
    return view('html');
   }

   public function getJs(){
    return view('js');
   }

   public function getPhp(){
    return view('php');
   }

   public function getPython(){
    return view('python');
   }

    


}
