<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Psy\Util\Json;

class DashboardController extends Controller
{
    function showDashboard(){
        $totalCustomer = Customer::all()->count();
        // goi api lay thong tinn thoi tiet
        $data = $this->getWeather();
        $location = $data->name;
        $windSpeed = $data->wind->speed;
        $temp = $data->main->temp;
        $weather = $data->weather[0]->main;
        $oC = $temp - 273;
        return view('dashboard', compact('totalCustomer', 'oC', 'location', 'windSpeed', 'weather'));
    }

    function getWeather($city = "Ha Noi") {
        $urlApi = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=02e3323f29bc461c2346db2fe3989729";
        $response = Http::get($urlApi);
        return json_decode($response->body());
    }
}
