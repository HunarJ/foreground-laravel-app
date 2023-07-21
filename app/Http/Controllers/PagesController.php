<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
      //Home

      public function home()
      {

        $services = Service::all();

        return view('pages/home', ['services' => $services]);
      }
  
      public function detail($url)
      {
        $service = Service::where('url', $url)->first();

        return view('pages/detail', ['service' => $service]);
      }
      
}
