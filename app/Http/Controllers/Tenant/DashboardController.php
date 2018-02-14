<?php

namespace App\Http\Controllers\Tenant;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __invoke(Company $company)
    {
        $projects = $company->projects;
        return view('tenant.dashboard', compact('projects'));
    }
}
