<?php

namespace App\Http\Controllers;

use App\Http\Requests\Company\IndexRequest;
use App\Http\Requests\Company\StoreRequest;
use App\Models\SpecialistVisa;
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

    public function index()
    {
        // $params = $request->validated();
        $companies = $this->service->index();
        return view('company.index', compact('companies'));
    }
    public function sp()
    {
        $sp = SpecialistVisa::all();
        return view('specialist_visa.index', compact('sp'));
    }
    public function show(int $id)
    {
        $company = $this->service->show($id);
        return view('company.show', compact('company'));
    }
}