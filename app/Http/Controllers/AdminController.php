<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use App\Models\Service;
use App\Models\Client;
use App\Models\Slider;
use App\Models\Intro;
use App\Models\Skill;

class AdminController extends Controller
{
    public function index()
    {
        $usersCount    = User::count();
        $projectsCount = Project::count();
        $servicesCount = Service::count();
        $clientsCount  = Client::count();
        $slidersCount  = Slider::count();
        $introsCount   = Intro::count();
        $skillsCount   = Skill::count();

        return view('back-end.dashboard', compact(
            'usersCount',
            'projectsCount',
            'servicesCount',
            'clientsCount',
            'slidersCount',
            'introsCount',
            'skillsCount'
        ));
    }
}
