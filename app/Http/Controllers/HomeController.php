<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Product;
use App\Models\Project;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $project = Project::get();
        $product = Product::get()->take(8);
        $team = OurTeam::get()->take(8);
        $review = Review::get()->take(8);
        $post = Post::get()->take(3);
        $partner = Partner::get();
        return view('themes.default.index', [
            'projects' => $project,
            'products' => $product,
            'teams' => $team,
            'reviews' => $review,
            'posts' => $post,
            'partners' => $partner,
        ]);
    }
}
