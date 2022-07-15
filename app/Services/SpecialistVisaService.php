<?php

namespace App\Services;

use App\Repository\SpecialistVisaRepository;

class SpecialistVisaService extends BaseService
{
    public function __construct(SpecialistVisaRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        if(auth()->user()->role == 'expert'){
            $query = $this->repo->getQuery();
            $query = $query->sent();
            $query = $query->orderByDesc('id');
            return $query->paginate(10);
        }
        return $this->repo->index();
    }
    public function edit($id)
    {
        return $this->repo->edit($id);
    }

    public function update($params, $id)
    {
        return $this->repo->update($params, $id);
    }
}
