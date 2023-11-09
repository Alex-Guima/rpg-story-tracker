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
        return Inertia::render('CampaignPage', [
            'campaigns' => CampaignResource::collection(Campaign::all()),
        ]);
    }

    public function store(StoreUpdateCampaignRequest $request)
    {
        $data = $request->validated();

        $campaign = Campaign::create($data);

        if($request->hasFile('campaignImage')) {
            $campaign->addMediaFromRequest('campaignImage')->toMediaCollection('campaigns');
        }

        return to_route('campaigns.index');
    }

    public function update(StoreUpdateCampaignRequest $request, Campaign $campaign)
    {
        $data = $request->validated();

        $campaign->update($data);

        return to_route('campaigns.index');
    }

    public function destroy(Campaign $campaign)
    {
        $campaign->delete();

        return to_route('campaigns.index');
    }

    public function create()
    {
        return Inertia::render('CampaignCreatePage');
    }
}
