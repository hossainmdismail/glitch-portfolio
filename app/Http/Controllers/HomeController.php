<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Review;
use App\Models\OurTeam;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Project;
use App\Models\Setting;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

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


        // Meta Information
        $setting = Setting::first();

        // Setup SEO, OpenGraph, and JsonLD metadata
        $this->setupSeo($setting);

        return view('themes.default.index', [
            'projects' => $project,
            'products' => $product,
            'teams' => $team,
            'reviews' => $review,
            'posts' => $post,
            'partners' => $partner,
        ]);
    }

    public function setupSeo($setting)
    {
        if (!$setting) {
            return;
        }

        // Set SEO Meta Tags
        SEOMeta::setTitle($setting->name);
        SEOMeta::setDescription($setting->description);
        SEOMeta::setKeywords($this->generateKeywords($setting));
        SEOMeta::setCanonical($setting->link);

        // Set Open Graph Meta Tags
        OpenGraph::addImage($setting->logo);
        OpenGraph::setTitle($setting->name);
        OpenGraph::setDescription($setting->description);
        OpenGraph::setType('website');
        OpenGraph::setSiteName($setting->name);

        // Set JSON-LD Data
        JsonLd::setType('WebPage');
        JsonLd::setTitle($setting->name);
        JsonLd::setDescription($setting->description);
        JsonLd::setUrl(url()->current());
        JsonLd::addValue('datePublished', $setting->created_at);
        JsonLd::addValue('dateModified', $setting->updated_at);
        JsonLd::addValue('inLanguage', 'bn-BD');
        JsonLd::addValue('isPartOf', [
            "@type" => "WebSite",
            "@id" => $setting->link,
            "url" => $setting->link,
        ]);
        JsonLd::addValue('publisher', [
            '@id' => "$setting->link/#organization",
            '@type' => 'Organization',
            'name' => $setting->name,
            'url' => $setting->link,
            'logo' => [
                '@type' => 'ImageObject',
                'url' => $setting->logo,
                'caption' => $setting->description,
                'inLanguage' => 'bn-BD',
                'contentUrl' => url()->current(),
            ],
        ]);
    }

    private function generateKeywords($setting)
    {
        // Dynamically generate keywords based on content, e.g. from the products or projects
        $keywords = 'web design, web development, mobile app development, digital marketing, seo';
        // Add custom keywords here, for example from projects or products
        return $keywords;
    }
}
