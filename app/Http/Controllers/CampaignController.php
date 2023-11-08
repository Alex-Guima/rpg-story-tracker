<?php

namespace App\Http\Controllers;

use App\Http\Resources\CampaignResource;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CampaignController extends Controller
{
    public function index()
    {
        $campaign = Campaign::paginate();
        return Inertia::render('CampaignPage');
    }

    public function create()
    {
        return Inertia::render('CampaignPage');
    }
}
