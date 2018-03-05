<?php

namespace App\Http\Controllers\Tenant;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $projects = Project::all();
        return view('tenant.dashboard', compact('projects'));
    }
}
