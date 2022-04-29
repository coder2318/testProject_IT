<?php

namespace App\Http\Controllers;

use App\Http\Requests\Investor\StoreRequest;
use App\Services\InvestorService;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    use FileUpload;
    protected $service;

    public function __construct(InvestorService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $investors = $this->service->index();
        return view('investor.index', compact('investors'));
    }

    public function show(int $id)
    {
        $investor = $this->service->show($id);
        return view('investor.show', compact('investor'));
    }

    public function create()
    {
        return view('investor.create');
    }

    public function store(StoreRequest $request)
    {
        $params = $request->validated();
        $params = $this->fileUpload($params, $request, 'investor');
        $this->service->create($params);
        return redirect()->route('home');
    }
}