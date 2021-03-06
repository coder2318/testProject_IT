<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecialistRelocation\StoreRequest;
use App\Http\Requests\SpecialistRelocation\UpdateRequest;
use App\Services\SpecialistRelocationService;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class SpecialistRelocationController extends Controller
{
    use FileUpload;
    protected $service;

    public function __construct(SpecialistRelocationService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $specialists = $this->service->index();
        return view('specialist_relocation.index', compact('specialists'));
    }

    public function show(int $id)
    {
        $specialist = $this->service->show($id);
        return view('specialist_relocation.show', compact('specialist'));
    }

    public function create()
    {
        return view('specialist_relocation.create');
    }

    public function store(StoreRequest $request)
    {
        $params = $request->validated();
        $params = $this->fileUpload($params, $request, 'specialist-relocation');
        $this->service->create($params);
        return redirect()->route('thanks');
    }


    public function edit(int $id)
    {
        $specialist = $this->service->edit($id);
        return view('specialist_relocation.edit', compact('specialist'));
    }

    public function update(int $id, UpdateRequest $request)
    {
        $params = $request->validated();
        $params = $this->fileUpload($params, $request, 'specialist');
        $specialist = $this->service->update($params,$id);
        return redirect()->route('specialist-relocation.index');
    }

    public function delete(int $id)
    {
        try {
            $this->service->delete($id);
            return redirect()->route('specialist-relocation.index');
        } catch (\Throwable $th) {
            dd($th);
        }
    }


}
