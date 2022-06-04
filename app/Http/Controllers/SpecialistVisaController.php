<?php

namespace App\Http\Controllers;

use App\Http\Requests\Founder\UpdateRequest;
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
        return redirect()->route('thanks');
    }


    public function edit(int $id)
    {
        $specialist = $this->service->edit($id);
        return view('specialist_visa.edit', compact('specialist'));
    }

    public function update(int $id, UpdateRequest $request)
    {
        $params = $request->validated();
        $params = $this->fileUpload($params, $request, 'specialist_visa');
        $specialist = $this->service->update($params,$id);
        return redirect()->route('specialist-visa.index');
    }

    public function delete(int $id)
    {
        try {
            $this->service->delete($id);
            return redirect()->route('specialist-visa.index');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
