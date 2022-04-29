<?php

namespace App\Repository;

use App\Models\Company;

class CompanyRepository extends BaseRepository
{
    public function __construct(Company $company)
    {
        $this->entity  = $company;
    }

    public function index()
    {
        return $this->entity->get();
    }
}