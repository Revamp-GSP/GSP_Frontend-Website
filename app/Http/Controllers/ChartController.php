<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chart;
use App\Models\project;

class ChartController extends Controller
{
    public function index()
    {
        $query = project::query();
        $statusCounts = project::countStatus();
        //dd ($statusCounts);
        return view('Dashboard', compact('statusCounts'));
    }
}