<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Project;

class ProjectController extends Controller
{
    public function index(){
        // $projects = Project::all();

        $projects = Project::with('technologies', 'type')->get();

        return response()->json([
            'success' => true,
            'projects' => $projects,
        ]);
    }
}
