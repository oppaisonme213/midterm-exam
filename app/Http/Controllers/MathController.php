<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class MathController extends Controller
{
    

    public function list(Request $request){

      $token = "AoLAQIfceOZvTL8dQLgLDZkQzr3ONVBY";
      $value1 = $request->input("q");
      $value2 = $request->input("language");

      if(is_null($request)){
        $data = Http::get("http://dataservice.accuweather.com/locations/v1/cities/search?apikey=$token&q=Manila&language=en-us&details=false")->json();
        return view("welcome", ['data'=>$data]);
      }

      
      $data = Http::get("http://dataservice.accuweather.com/locations/v1/cities/search?apikey=$token&q=$value1&language=$value2&details=false")->json();
      
      return view("welcome", ['data'=>$data]);
    }
}
