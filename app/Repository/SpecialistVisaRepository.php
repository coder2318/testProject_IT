<?php

namespace App\Repository;

use App\Models\SpecialistVisa;

class SpecialistVisaRepository extends BaseRepository
{
    public function __construct(SpecialistVisa $specialistVisa)
    {
        $this->entity  = $specialistVisa;
    }

    public function index()
    {
        return $this->entity->get();
    }
}