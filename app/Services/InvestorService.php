<?php

namespace App\Services;

use App\Repository\InvestorRepository;

class InvestorService extends BaseService
{
    public function __construct(InvestorRepository $repo)
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
