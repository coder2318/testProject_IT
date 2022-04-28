<?php

namespace App\Http\Controllers;

use App\Http\Requests\Company\StoreRequest;
use App\Services\CompanyService;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    protected $service;

    public function __construct(CompanyService $service)
    {
        $this->service = $service;
    }

    public function create()
    {
        return view('company.create');
    }

    public function store(StoreRequest $request)
    {
        $params = $request->validated();
        $this->service->create($params);
        return redirect()->route('home');
    }
}
