<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function view($slug)
    {
        $project = Project::find($slug);
        $blogs = Post::where('is_published', true)->get()->take(5);
        if ($project) {
            return view('themes.default.pages.project', [
                'project' => $project,
                'blogs' => $blogs,
            ]);
        }
    }
}
