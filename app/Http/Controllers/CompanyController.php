<?php

namespace App\Http\Controllers;

use App\Http\Requests\Company\IndexRequest;
use App\Http\Requests\Company\StoreRequest;
use App\Http\Requests\company\UpdateRequest;
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
    public function dashboard()
    {
        return view('admin.layouts.app');

    }
    public function create()
    {
        return view('company.create');
    }

    public function store(StoreRequest $request)
    {
        $params = $request->validated();
        $this->service->create($params);
        return redirect()->route('thanks');
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

    public function edit(int $id)
    {
        $company = $this->service->edit($id);
        return view('company.edit', compact('company'));
    }

    public function update(int $id, UpdateRequest $request)
    {
        $params = $request->validated();
        $company = $this->service->update($params,$id);
        return redirect()->route('company.index');
    }

    public function delete(int $id)
    {
        try {
            $this->service->delete($id);
            return redirect()->route('company.index');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
