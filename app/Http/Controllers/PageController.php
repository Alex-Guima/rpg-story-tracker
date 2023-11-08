<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function home() {
        return Inertia::render('HomePage');
    }

    public function about() {
        return Inertia::render('AboutPage');
    }

    public function login() {
        return Inertia::render('LoginPage');
    }

    public function signUp() {
        return Inertia::render('SignUpPage');
    }

    public function campaigns() {
        return Inertia::render('CampaignPage');
    }

    public function profile() {
        return Inertia::render('ProfilePage');
    }
}
