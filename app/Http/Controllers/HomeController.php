<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\About;
use App\Models\Client;
use App\Models\Target;
use App\Models\Feature;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $abouts = $this->getAbouts();
        $clients = $this->getClients();
        $faqs = $this->getFaqs();
        $features = $this->getFeatures();
        $targets = $this->getTargets();

        return view('home', compact('abouts', 'clients', 'faqs', 'features', 'targets'));
    }

    private function getAbouts()
    {
        return About::get()->first();
    }

    private function getClients()
    {
        return Client::all();
    }

    private function getFaqs()
    {
        return Faq::all();
    }

    private function getFeatures()
    {
        return Feature::all()->first();
    }

    private function getTargets()
    {
        return Target::all()->first();
    }
}
