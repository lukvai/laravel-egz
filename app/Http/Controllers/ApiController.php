<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workers;

class ApiController extends Controller
{
    public function api()
    {
        $workers = Workers::all();

        return $workers;
    }
}
