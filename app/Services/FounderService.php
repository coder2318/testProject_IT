<?php

namespace App\Services;

use App\Repository\FounderRepository;

class FounderService extends BaseService
{
    public function __construct(FounderRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
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
