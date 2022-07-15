<?php

namespace App\Http\Controllers;

use App\Services\DashboardService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }

    public function index()
    {
        $reports = $this->dashboardService->getReport();
        $ancetas = $this->dashboardService->ancetas();
//        dd($ancetas);
        return view('dashboard.index', compact('reports', 'ancetas'));
    }
}
