<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecialistVisa\StoreRequest;
use App\Services\SpecialistVisaService;
use App\Traits\FileUpload;

class SpecialistVisaController extends Controller
{
    use FileUpload;
    protected $service;

    public function __construct(SpecialistVisaService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $specialists = $this->service->index();
        return view('specialist_visa.index', compact('specialists'));
    }

    public function show(int $id)
    {
        $specialist = $this->service->show($id);
        return view('specialist_visa.show', compact('specialist'));
    }

    public function create()
    {
        return view('specialist_visa.create');
    }

    public function store(StoreRequest $request)
    {
        $params = $request->validated();
        $params = $this->fileUpload($params, $request, 'specialist-visa');
        $this->service->create($params);
        return redirect()->route('home');
    }
}