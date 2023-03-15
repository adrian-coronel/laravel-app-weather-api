<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index(){
        return view('index');
    }

    /**
     * Mediante esté metodo se realiza la petición
     */
    public function search(Request $request){
        
        $data = $request->validate([
            'city' => 'required',
        ]);

        # Obtenemos la key de la configuración y la ciudad buscada
        $city = $data['city'];
        $key = config('services.owm.key');

        # Obtenemos una respuesta en forma de matriz mediante la url y datos adicionales
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=".$city."&lang=es"."&appid=".$key)
        ->json();

        # Si el estado de la respuesta es "200" que se realize...
        if ($response['cod'] == '200') {
            
            # Obtenemos el clima apartir de la matriz
            $weather = $response['weather'][0]['description'];
            # Obtenemos el main apartir de la matriz
            $main = $response['weather'][0]['main'];
            # Obtenemos la temperatura apartir de la matriz
            $temp = $response['main']['temp'] - 273;
            # Obtenemos el nombre apartir de la matriz
            $name = $response['name'];
            # Obtenemos el pais apartir de la matríz
            $country = $response['sys']['country'];
            # Obtenemos el estado
            $ok = $response['cod'];
            
            # compact => Crea una matriz que contiene las variables ingresadas y sus valores
            return view('index',compact('weather', 'main', 'temp', 'name', 'country', 'ok'));
        }
        else {
            $notFound = true;
            return view('index',compact('notFound'));
        }
        
    }
}
