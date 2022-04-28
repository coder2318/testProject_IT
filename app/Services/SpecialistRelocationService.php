<?php

namespace App\Services;

use App\Repository\SpecialistRelocationRepository;

class SpecialistRelocationService extends BaseService
{
    public function __construct(SpecialistRelocationRepository $repo)
    {
        $this->repo = $repo;
    }
}
