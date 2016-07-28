<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function horaLocal(){
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('d/m/Y');
        $hora = date('H:i:s');

        return view('site.layout',compact('data','hora'));
    }

}
