<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryProductsResource;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): ResourceCollection
    {
        return CompanyResource::collection(Company::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company): CompanyResource
    {
        return new CompanyResource($company);
    }

    /**
     * Display products for specified company.
     */
    public function products(Company $company): CategoryProductsResource
    {
        return new CategoryProductsResource($company);
    }
}
