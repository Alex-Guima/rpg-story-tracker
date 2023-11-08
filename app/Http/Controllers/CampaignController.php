<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateCampaignRequest;
use App\Http\Resources\CampaignResource;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CampaignController extends Controller
{
    public function index()
    {
        return Inertia::render('CampaignPage');
    }

    public function store(StoreUpdateCampaignRequest $request)
    {
        $data = $request->validated();

        $campaign = Campaign::create($data);

        return CampaignResource::collection($campaign);
    }
}
