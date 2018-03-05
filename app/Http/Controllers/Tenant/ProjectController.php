<?php

namespace App\Http\Controllers\Tenant;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Store a new Project resource
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        Project::create([
            'name' => $request->name
        ]);

        return back();
    }

    /**
     * Delete a Project resource
     *
     * @param integer $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Project::findOrFail($id)->delete();

        return back();
    }
}
