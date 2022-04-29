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
}