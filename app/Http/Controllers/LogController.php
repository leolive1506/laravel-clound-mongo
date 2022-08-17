<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        return Log::all();
    }

    public function store(Request $request)
    {
        return Log::create($request->all());
    }
}
