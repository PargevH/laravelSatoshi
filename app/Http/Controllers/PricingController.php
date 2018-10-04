<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class PricingController extends Controller
{
 public function index(){
    $plan = Config::get('pricing');
    return view('pricing')->with('plan', $plan);
 }
}