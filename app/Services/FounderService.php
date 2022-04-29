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
}