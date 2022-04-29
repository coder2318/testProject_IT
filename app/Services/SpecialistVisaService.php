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
        return $this->repo->index();
    }
}