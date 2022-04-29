<?php

namespace App\Repository;

use App\Models\SpecialistRelocation;

class SpecialistRelocationRepository extends BaseRepository
{
    public function __construct(SpecialistRelocation $company)
    {
        $this->entity  = $company;
    }

    public function index()
    {
        return $this->entity->get();
    }
}