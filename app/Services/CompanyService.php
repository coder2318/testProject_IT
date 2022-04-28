<?php

namespace App\Services;

use App\Repository\CompanyRepository;

class CompanyService extends BaseService
{
    public function __construct(CompanyRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        return $this->repo->index();
    }
}