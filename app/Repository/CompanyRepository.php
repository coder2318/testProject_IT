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
        return $this->entity->orderByDesc('id')->paginate(10);
    }

    public function edit($id)
    {
        $company = Company::find($id);

        return $company;
    }
}
